## Laravel

https://readouble.com/laravel/6.x/ja/

### Install

```
## Laravelインストーラインストール
$ docker exec -it php_laravel_sandbox /bin/bash -c 'composer global require "laravel/installer"'
## プロジェクト作成
$ docker exec -it php_laravel_sandbox /bin/bash -c 'cd /var/www/html && composer create-project laravel/laravel=6.* sandboxapp --prefer-dist'
## アプリケーションキーの設定 (.envに記載される)
$ docker exec -it php_laravel_sandbox /bin/bash -c 'cd /var/www/html/sandboxapp && php artisan key:generate'
## テーブル作成
$ docker exec -it php_laravel_sandbox /bin/bash -c 'cd /var/www/html/sandboxapp && php artisan migrate'
## 初期データ登録
$ docker exec -it php_laravel_sandbox /bin/bash -c 'cd /var/www/html/sandboxapp && php artisan db:seed'

```


## Composer

```
$ docker exec -it php_laravel_sandbox /bin/bash -c "cd /var/www/html/sandboxapp && composer install"
```

## Docker
### コンテナに入る
``` 
# php
$ docker exec -it php_laravel_sandbox bash

# nginx
$ docker exec -it nginx_laravel_sandbox bash
```

### 起動中コンテナ表示
```
$ docker ps
```

### コンテナ表示
```
$ docker ps -a
```

### 停止&削除
```
$ docker-compose down
```

### 滅びの呪文 (全削除)
```
$ docker-compose down --rmi all --volumes
```
