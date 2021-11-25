package main

type page struct {
	Title string
	tmpl  string
	root  bool
}

var pages = []page{
	{
		Title: "Programming: thoughts and paradigms",
		tmpl:  "index.tmpl",
		root:  true,
	},
	{
		Title: "AWS ELB vs HAProxy",
		tmpl:  "aws-elb-vs-haproxy.tmpl",
	},
	{
		Title: "Kubernetes: Canary release",
		tmpl:  "k8s-canary-release.tmpl",
	},
	{
		Title: "Kubernetes: Migrating legacy services",
		tmpl:  "k8s-migration.tmpl",
	},
	{
		Title: "Kubernetes: Service ports",
		tmpl:  "k8s-service-ports.tmpl",
	},
	{
		Title: "KubeCon &amp; CloudNativeCon — North America '18",
		tmpl:  "kubecon-18.tmpl",
	},
	{
		Title: "Manage channel operations using context",
		tmpl:  "manage-channel-ops.tmpl",
	},
	{
		Title: "Message Privacy &amp; Security",
		tmpl:  "message-privacy-security.tmpl",
	},
	{
		Title: "Parallel tests in Go",
		tmpl:  "parallel-tests-go.tmpl",
	},
	{
		Title: "Remote Cohesion",
		tmpl:  "remote-cohesion.tmpl",
	},
	{
		Title: "Understanding Mutexes",
		tmpl:  "understanding-mutexes.tmpl",
	},
	{
		Title: "The /etc directory",
		tmpl:  "etc.tmpl",
	},
}
