package main

type Page struct {
	// HTML title
	Title string
	// Template path
	Tmpl string
	// Is HTML in root dir
	Root bool
	// Create RSS page?
	RSS bool
	// Publish date
	Date string
	// Content description
	Description string
}

var pages = []Page{
	{
		Title: "syscll.org",
		Tmpl:  "index",
		Root:  true,
	},
	{
		Title: "The /etc directory",
		Tmpl:  "etc",
	},
	{
		Title:       "Message Privacy &amp; Security",
		Tmpl:        "message-privacy-security",
		RSS:         true,
		Date:        "Thu, 07 Jan 2021 15:00:00 +0100",
		Description: "Keeping your personal conversations private and secure.",
	},
	{
		Title:       "AWS ELB vs HAProxy",
		Tmpl:        "aws-elb-vs-haproxy",
		RSS:         true,
		Date:        "Tue, 25 Aug 2020 16:00:00 +0100",
		Description: "Battle of the proxies.",
	},
	{
		Title:       "Understanding Mutexes",
		Tmpl:        "understanding-mutexes",
		RSS:         true,
		Date:        "Tue, 22 Oct 2019 23:00:00 +0100",
		Description: "Mutually exclusive synchronization - how does it work?",
	},
	{
		Title:       "Parallel tests in Go",
		Tmpl:        "parallel-tests-go",
		RSS:         true,
		Date:        "Tue, 8 Oct 2019 17:00:00 +0100",
		Description: "Your application code doesn't have to be the only thing that executes asynchronously.",
	},
	{
		Title:       "KubeCon &amp; CloudNativeCon — North America '18",
		Tmpl:        "kubecon-18",
		RSS:         true,
		Date:        "Sun, 30 Dec 2018 17:00:00 +0100",
		Description: "8000 attendees, 150+ speakers, 250+ talks, 100+ sponsors and more swag than you could carry.",
	},
	{
		Title:       "Remote Cohesion",
		Tmpl:        "remote-cohesion",
		RSS:         true,
		Date:        "Fri, 30 Nov 2018 17:00:00 +0100",
		Description: "Fusing a team together in a distant world.",
	},
	{
		Title:       "Kubernetes: Migrating legacy services",
		Tmpl:        "k8s-migration",
		RSS:         true,
		Date:        "Wed, 31 Oct 2018 17:00:00 +0100",
		Description: "Why copy/pasting your services to Kubernetes isn't always the answer.",
	},
	{
		Title:       "Kubernetes: Canary release",
		Tmpl:        "k8s-canary-release",
		RSS:         true,
		Date:        "Fri, 11 May 2018 17:00:00 +0100",
		Description: "Reduce the risk of introducing a new software version in Kubernets.",
	},
	{
		Title:       "Kubernetes: Service ports",
		Tmpl:        "k8s-service-ports",
		RSS:         true,
		Date:        "Thu, 05 Apr 2018 17:00:00 +0100",
		Description: "Balance the load.",
	},
	{
		Title:       "Manage channel operations using context",
		Tmpl:        "manage-channel-ops",
		RSS:         true,
		Date:        "Fri, 05 May 2017 17:00:00 +0100",
		Description: "Give extra context when it is most needed.",
	},
}
