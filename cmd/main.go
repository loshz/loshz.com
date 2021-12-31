package main

import (
	"flag"
	"fmt"
	"log"
	"net/http"
	"os"
	"strings"
	"text/template"
	"time"
)

func main() {
	var local = flag.Bool("local", false, "Run local webserver")
	var rss = flag.Bool("rss", false, "Compile RSS feed")
	flag.Parse()

	// Compile static HTML
	fmt.Println("Compiling static html...")
	for _, p := range pages {
		if err := compileHTML(p); err != nil {
			log.Fatal(err)
		}
	}

	// Compile RSS feed
	if *rss {
		fmt.Println("\nCompiling rss feed...")
		if err := compileRSS(pages); err != nil {
			log.Fatal(err)
		}
	}

	// Run local webserver
	if *local {
		fmt.Println("\nRunning local webserver: http://localhost:8001")
		http.Handle("/", http.FileServer(http.Dir("./docs")))
		log.Fatal(http.ListenAndServe(":8001", nil))
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
	}{time.Now().UTC().Format(time.RFC822), pages}

	rss := template.Must(template.ParseFiles("./templates/rss.tmpl"))
	if err := rss.ExecuteTemplate(f, "rss", Data); err != nil {
		return fmt.Errorf("err executing template: %w", err)
	}

	fmt.Println(f.Name())
	return nil
}

func compileHTML(p Page) error {
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
	t := template.Must(template.ParseFiles(fmt.Sprintf("./templates/%s.tmpl", p.Tmpl), "./templates/site.tmpl"))

	// write template to static html file
	if err := t.ExecuteTemplate(f, "site", p); err != nil {
		return fmt.Errorf("error executing template: %w", err)
	}

	fmt.Println(f.Name())
	return nil
}
