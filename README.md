# teto

## 開發環境

需求

-   docker >= 1.17
-   docker-compose

安裝 php 依賴套件

```bash
docker run -it --rm -v ${PWD}:/app composer:latest composer install
```

啟動 php 開發伺服器

```bash
docker-compose up --build
```
