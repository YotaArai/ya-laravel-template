# ya-laravel-template

個人開発で用いる個人用リポジトリになります。

## 概要
- Dockerでの開発環境構築(https://qiita.com/YotaArai/items/840934e84e0256ecd06d)
- ヘッダーやフッターなど全体レイアウトはvuetifyで実装
- Twitter,Facebook,Googleでのソーシャルログイン実装済み
- laravel-mixでのcssとjsファイルのgzip圧縮

## 環境
### バックエンド
||version|
|:--|:--:|
|laravel|6.2|
|laravel socialite|4.4|

### フロントエンド
||version|
|:--|:--:|
|Vue.js|2.5.17|
|vuetify|2.3.1|

## 初回実行手順
1.`.env.example`を複製して`.env`にリネーム

2.hostsファイルにIPアドレス※とdockertest.comを紐つける行を追加

※IPアドレスについて

(Windowsの場合):`ipconfig`を実行して、「イーサネット アダプター vEthernet (DockerNAT)->IPv4 アドレス」に表示されているIPアドレスをhostsに記述する

(Macの場合):以下のコマンドで127.0.0.1~127.255.255.254の中からループバックアドレスを設定し、設定したIPアドレスをhostsに記述する

    sudo ifconfig lo0 alias 127.0.75.1

例

    127.0.75.1 dockertest.com

3.以下のコマンドをプロジェクト直下で実行する

    docker-compose up -d --build
    docker-compose exec app bash

(以下appコンテナ内にて)

    composer install
    php artisan key:generate
    php artisan migrate

4.ブラウザで https://dockertest.com を開く