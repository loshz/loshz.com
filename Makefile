.PHONY: build
build:
	go run ./cmd/...

.PHONY: local
local:
	go run ./cmd/... -local
