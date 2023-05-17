.PHONY: build
build:
	go run ./cmd/...

.PHONY: rss
rss:
	go run ./cmd/... -rss


.PHONY: local
local:
	go run ./cmd/... -local
