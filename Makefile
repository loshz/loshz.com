.PHONY: build
build:
	go run *.go

.PHONY: local
local:
	go run *.go -local
