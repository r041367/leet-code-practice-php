
# 啟動環境
up: down 
	docker-compose -p leet-code up -d

# 關閉環境
down:
	docker-compose -p leet-code down

# 進入 container 的 bash
bash:
	docker-compose -p leet-code exec ${t} bash

# 重新 build 環境
build:
	docker-compose -p leet-code build

logs:
	docker-compose -p leet-code logs -f
