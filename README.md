# flea-market

## 環境構築

**Dockerビルド**</br>
1,git clone  git@github.com:risa-prog/flea-market.git<br/>
2,docker-compose up -d --build

**Laravel環境構築**</br>
1,docker-compose exec php bash<br/>
2,composer install<br/>
3,.env.exampleファイルから.envを作成し、環境変数を変更<br/>
4,php artisan key:generate<br/>
5,php artisan migrate<br/>
6,php artisan db:seed<br/>

## 使用技術(実行環境)

•PHP 7.4<br/>
•Laravel 8.83<br/>
•MySQL 8.0<br/>
.JavaScript</br>

## 開発環境

•home画面:http://localhost/<br/>
•会員登録:http://localhost/register</br>
•phpMyAdmin:http://localhost:8080/</br>
•MailHog:http://localhost:8025

## ER図

![](./flea-market.drawio.png)</br>
</br>
(今回追加分)
![](./flea-market2.drawio.png)

## メールの受信確認について

MailHogというツールを使用しています。
.envファイルのMAIL_FROM_ADDRESSは任意のメールアドレスを入力してください。　取引完了後、出品者にメールが送られてきます。

## ダミーデータについて

ユーザー1:太郎　CO01からCO05までの商品データを出品しています。</br>
ユーザー2:花子　CO06からCO10までの商品データを出品しています。</br>
ユーザー3:商品を出品していません。</br>
