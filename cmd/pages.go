package main

import "time"

type Page struct {
	// HTML title
	Title string
	// HTML content description
	Description string
	// Template path
	Tmpl string
	// Publish date
	DateTime time.Time
	// Is HTML in root dir
	Root bool
	// Create RSS page
	RSS bool
}

var pages = []Page{
	{
		Title: "Programming thoughts and paradigms",
		Tmpl:  "index",
		Root:  true,
	},
	{
		Title: "The /etc directory",
		Tmpl:  "etc",
	},
	{
		Title:       "Arch Linux: LVM on LUKS",
		Description: "Simple Arch Linux instructions for setting up LVM on top of a LUKS encrypted partition.",
		Tmpl:        "arch-linux",
		DateTime:    time.Date(2022, time.May, 9, 12, 0, 0, 0, time.UTC),
		RSS:         true,
	},
	{
		Title:       "A Linux PAM development story",
		Description: "Wading through the weeds of a custom Pluggable Authentication Module.",
		Tmpl:        "linux-pam",
		DateTime:    time.Date(2022, time.March, 11, 17, 0, 0, 0, time.UTC),
		RSS:         true,
	},
	{
		Title:       "Segfaults in safe code",
		Description: "Constructing a dangling pointer isn't considered unsafe in itself - but using it is.",
		Tmpl:        "segfaults-in-safe-code",
		DateTime:    time.Date(2021, time.December, 14, 17, 0, 0, 0, time.UTC),
		RSS:         true,
	},
	{
		Title:       "Message Privacy &amp; Security",
		Description: "Keeping your personal conversations private and secure.",
		Tmpl:        "message-privacy-security",
		DateTime:    time.Date(2021, time.January, 07, 15, 0, 0, 0, time.UTC),
		RSS:         true,
	},
	{
		Title:       "AWS ELB vs HAProxy",
		Description: "Battle of the proxies.",
		Tmpl:        "aws-elb-vs-haproxy",
		DateTime:    time.Date(2020, time.August, 25, 16, 0, 0, 0, time.UTC),
		RSS:         true,
	},
	{
		Title:       "Understanding Mutexes",
		Description: "Mutually exclusive synchronization - how does it work?",
		Tmpl:        "understanding-mutexes",
		DateTime:    time.Date(2019, time.October, 22, 23, 0, 0, 0, time.UTC),
		RSS:         true,
	},
	{
		Title:       "Parallel tests in Go",
		Description: "Your application code doesn't have to be the only thing that executes asynchronously.",
		Tmpl:        "parallel-tests-go",
		DateTime:    time.Date(2019, time.October, 8, 17, 0, 0, 0, time.UTC),
		RSS:         true,
	},
	{
		Title:       "KubeCon &amp; CloudNativeCon — North America '18",
		Description: "8000 attendees, 150+ speakers, 250+ talks, 100+ sponsors and more swag than you could carry.",
		Tmpl:        "kubecon-18",
		DateTime:    time.Date(2018, time.December, 30, 17, 0, 0, 0, time.UTC),
		RSS:         true,
	},
	{
		Title:       "Remote Cohesion",
		Description: "Fusing a team together in a distant world.",
		Tmpl:        "remote-cohesion",
		DateTime:    time.Date(2018, time.November, 30, 17, 0, 0, 0, time.UTC),
		RSS:         true,
	},
	{
		Title:       "Kubernetes: Migrating legacy services",
		Description: "Why copy/pasting your services to Kubernetes isn't always the answer.",
		Tmpl:        "k8s-migration",
		DateTime:    time.Date(2018, time.October, 31, 17, 0, 0, 0, time.UTC),
		RSS:         true,
	},
	{
		Title:       "Kubernetes: Canary release",
		Description: "Reduce the risk of introducing a new software version in Kubernets.",
		Tmpl:        "k8s-canary-release",
		DateTime:    time.Date(2018, time.May, 11, 17, 0, 0, 0, time.UTC),
		RSS:         true,
	},
	{
		Title:       "Kubernetes: Service ports",
		Description: "Balance the load.",
		Tmpl:        "k8s-service-ports",
		DateTime:    time.Date(2018, time.April, 5, 17, 0, 0, 0, time.UTC),
		RSS:         true,
	},
	{
		Title:       "Manage channel operations using context",
		Description: "Give extra context when it is most needed.",
		Tmpl:        "manage-channel-ops",
		DateTime:    time.Date(2017, time.May, 05, 17, 0, 0, 0, time.UTC),
		RSS:         true,
	},
}
