package main

import (
	"context"
	"flag"
	"fmt"
	"log"
	"net/http"
	"os"
	"strings"
	"text/template"
	"time"

	"github.com/fsnotify/fsnotify"
)

func main() {
	var local = flag.Bool("local", false, "Run local webserver")
	var rss = flag.Bool("rss", false, "Compile RSS feed")
	flag.Parse()

	// Compile RSS feed.
	if *rss {
		fmt.Println("\nCompiling rss feed...")
		if err := compileRSS(pages); err != nil {
			log.Fatal(err)
		}
		os.Exit(0)
	}

	// Compile static HTML.
	fmt.Println("Compiling static html...")
	if err := compileHTML(pages, true); err != nil {
		log.Fatal(err)
	}

	// Run local webserver and watch for template changes.
	if *local {
		ctx, cancel := context.WithCancel(context.Background())
		defer cancel()

		go watchForChanges(ctx)

		fmt.Println("\nRunning local webserver: http://localhost:8001")
		http.Handle("/", http.FileServer(http.Dir("./docs")))
		if err := http.ListenAndServe(":8001", nil); err != nil {
			cancel()
			log.Fatal(err)
		}
	}
}

func watchForChanges(ctx context.Context) {
	watcher, err := fsnotify.NewWatcher()
	if err != nil {
		log.Fatal(err)
	}
	defer watcher.Close()

	if err := watcher.Add("./templates/"); err != nil {
		log.Fatal(err)
	}

	fmt.Println("Watching for changes...")
	for {
		select {
		case event := <-watcher.Events:
			if event.Has(fsnotify.Write) {
				fmt.Println("Template changed, recompiling static html...")
				if err := compileHTML(pages, false); err != nil {
					log.Fatal(err)
				}
			}
		case err := <-watcher.Errors:
			log.Println("error:", err)
		case <-ctx.Done():
			return
		}
	}
}

func compileRSS(pages []Page) error {
	// create/open rss file
	f, err := os.Create("./docs/index.xml")
	if err != nil {
		return fmt.Errorf("error opening rss file: %w", err)
	}
	defer f.Close()

	var Data = struct {
		DateTime string
		Pages    []Page
	}{time.Now().UTC().Format(time.RFC1123Z), pages}

	tmpl := template.Must(template.ParseFiles("./templates/rss.tmpl"))
	if err := tmpl.ExecuteTemplate(f, "rss", Data); err != nil {
		return fmt.Errorf("err executing template: %w", err)
	}

	fmt.Println(f.Name())
	return nil
}

func compileHTML(pages []Page, verbose bool) error {
	for _, p := range pages {
		// strip template file ending
		path := fmt.Sprintf("./docs/%s.html", p.Tmpl)

		// if non-root page, create parent dir and update path
		if !p.Root {
			path = strings.TrimSuffix(path, ".html")
			if _, err := os.Stat(path); os.IsNotExist(err) {
				os.MkdirAll(path, 0700)
			}
			path = path + "/index.html"
		}

		// create/open static html file
		f, err := os.Create(path)
		if err != nil {
			return fmt.Errorf("error opening static page: %w", err)
		}
		defer f.Close()

		// read and parse templates
		tmpl := template.Must(template.ParseFiles(fmt.Sprintf("./templates/%s.tmpl", p.Tmpl), "./templates/site.tmpl"))

		// write template to static html file
		if err := tmpl.ExecuteTemplate(f, "site", p); err != nil {
			return fmt.Errorf("error executing template: %w", err)
		}

		if verbose {
			fmt.Println(f.Name())
		}
	}

	return nil
}
