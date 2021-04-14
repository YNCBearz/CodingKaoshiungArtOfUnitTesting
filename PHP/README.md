# PHP 環境生成

1. 必須先安裝 Docker(含 Docker Compose)，要先打開docker desktop
2. cd 到 PHP 資料夾底下
```
cd PHP
```
3. 下 docker-compose 指令
```
docker-compose up -d --build
```
4. 進入 php 環境的 container
```
docker exec -it docker_php_testing bash
```
5. 假設現在已經在 container 內了，初次使用需要安裝一下套件
```
composer install
```
6. 安裝完套件之後就可以透過下面指令去執行 tests 資料夾內的測試
```
./vendor/bin/phpunit
```
