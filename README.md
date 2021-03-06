# CakePHP Docker環境

新しく構築するときは｀docker-compose.yml｀
コンテナ名とか変更しておくといいです。

```
container_name: php-book-app-web

- DATABASE_HOST=php-book-app-db

container_name: php-book-app-db
```

構築するアプリに合わせて上記のあたりを変更。
DBのパスワードやユーザー、使用するDBを変更したかったら下記を変更

```
    - DATABASE_USER=root
    - DATABASE_PASS=secret
    - DATABASE_NAME=qa_app
```

# `app.php`の接続
app.default.phpをapp.phpに置き換えればいい

docker-compose.ymlに環境変数を定義した。
環境変数を使用して接続できる。


# 起動

```
docker-compose build
docker-compose up -d
```

# bash使いたかったら以下のコマンド
```
docker exec -it cake-php-practice bash
```

# 3.7以上でないとphpunit自動で入らない。

```
composer require --dev phpunit/phpunit "^5.7|^6.0"
```

docker-composeに環境変数を追加
stock-controll-db/test_myappのあたりを編集すること

```
- DATABASE_TEST_URL=mysql://root:secret@stock-controll-db/test_myapp
```

# PHPunit準備

テストのDB作成

```
create database test_myapp;;
```

必要に応じて`password, username`を作成
```

```

テスト全て実行

```
vendor/bin/phpunit
```

# 初期DB tabel作りたかったら
`stock-controll/Docker/mysql/sqls/initialize.sql`
変更して作成してください。

## migration snapshot
初期テーブル作成後、snapshot作成したい場合
（migration file欲しいとき）

```
bin/cake bake migration_snapshot Initial
```

# model controller template 雛形生成
全て生成するなら

```
bin/cake bake all suppliers
```

個別で作成するなら
```
bin/cake bake model suppliers
bin/cake bake controller suppliers
bin/cake bake template suppliers
```