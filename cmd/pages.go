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
		Title: "Dan Bond",
		Tmpl:  "index",
		Root:  true,
	},
	{
		Title:       "Useful BPF Helpers",
		Description: "Useful Kernel and libbpf helper functions for use in eBPF programs.",
		Tmpl:        "bpf-helpers",
		DateTime:    time.Date(2023, time.May, 17, 13, 0, 0, 0, time.UTC),
		RSS:         true,
	},
	{
		Title:       "YubiKey: Secure SSH with FIDO2",
		Description: "Configure a YubiKey to secure OpenSSH for FIDO2 Authentication.",
		Tmpl:        "yubikey-ssh-fido2",
		DateTime:    time.Date(2022, time.December, 21, 12, 0, 0, 0, time.UTC),
		RSS:         true,
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
		Title:       "Understanding Mutexes",
		Description: "Mutually exclusive synchronization - how does it work?",
		Tmpl:        "understanding-mutexes",
		DateTime:    time.Date(2019, time.October, 22, 23, 0, 0, 0, time.UTC),
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
		Title:       "Manage channel operations using context",
		Description: "Give extra context when it is most needed.",
		Tmpl:        "manage-channel-ops",
		DateTime:    time.Date(2017, time.May, 05, 17, 0, 0, 0, time.UTC),
		RSS:         true,
	},
}
