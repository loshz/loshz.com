ARGS ?= -local

.PHONY: build
build:
	go run ./cmd/... $(ARGS)
