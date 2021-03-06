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

## Bootstrapの導入
```
# Laravel/uiを使ってbootstrapを導入する

# Laravel/uiを追加
docker exec -it php_laravel_sandbox /bin/bash -c "cd /var/www/html/sandboxapp && composer require laravel/ui:^1.0 --dev"
# UIコマンドを実行。これでpackage.jsonにbootstrapなどが追加される。sassにbootstrapのimport文が追加される。とか。
docker exec -it php_laravel_sandbox /bin/bash -c 'cd /var/www/html/sandboxapp && php artisan ui bootstrap'
# ビルド。これでpublic/css/app.cssが作成される。app.cssにbootstrapが入っている
npm install && npm run dev
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
