package main

import (
	"flag"
	"fmt"
	"html/template"
	"log"
	"net/http"
	"os"
	"strings"
)

func main() {
	var local = flag.Bool("local", false, "Run local webserver")
	flag.Parse()

	fmt.Println("Compiling static html...")

	for _, p := range pages {
		filename, err := compileHTML(p)
		if err != nil {
			fmt.Printf("\nError: %s\n%v", filename, err)
			os.Exit(1)
		}

		fmt.Println(filename)
	}

	if *local {
		fmt.Println("\nRunning local webserver: http://localhost:3000")
		http.Handle("/", http.FileServer(http.Dir("./docs")))
		log.Fatal(http.ListenAndServe(":3000", nil))
	}
}

func compileHTML(p page) (string, error) {
	// strip template file ending
	path := fmt.Sprintf("./docs/%s", strings.ReplaceAll(p.tmpl, ".tmpl", ".html"))

	// if non-root page, create parent dir and update path
	if !p.root {
		path = strings.TrimSuffix(path, ".html")
		if _, err := os.Stat(path); os.IsNotExist(err) {
			os.MkdirAll(path, 0700)
		}
		path = path + "/index.html"
	}

	// create/open static html file
	f, err := os.OpenFile(path, os.O_CREATE|os.O_RDWR, 0644)
	if err != nil {
		return path, fmt.Errorf("error opening static page: %w", err)
	}
	defer f.Close()

	// read and parse templates
	t := template.Must(template.ParseFiles(fmt.Sprintf("./templates/%s", p.tmpl), "./templates/site.tmpl"))

	// write template to static html file
	if err := t.ExecuteTemplate(f, "site", p); err != nil {
		return f.Name(), fmt.Errorf("error executing template: %w", err)
	}

	return f.Name(), nil
}
