# ①課題名
英単語学習アプリ 改

## ②課題内容（どんな作品か）
- 英単語CSVを読み取りそれをもとに英単語学習が進められるアプリです。
- 1000件以上の大規模ファイル、不測文字が含まれていても対応できるようになっています。
- DB接続、テーブル操作を一つのクラスにまとめました。
- 学習画面と管理画面を分けました。

以下のライブラリを利用しています。
Materialize


## ③アプリのデプロイURL
 https://transformnavi.sakura.ne.jp/kadai02_db
 
## ④アプリのログイン用IDまたはPassword（ある場合）
- 不要

## ⑤工夫した点・こだわった点
- HTMLとPHPのソースを完全分離しました。
- DBコントロールクラスは、ネットに落ちているものをベースにしながら、かなり汎用的に拡張しました。

## ⑥難しかった点・次回トライしたいこと（又は機能）
- CSVの読み取り機能、複数ユーザー対応
- PHPのエラーが最初判別できなくて苦労したが、サーバーエラーを出力するための工夫をし、エラーをすべて見えるようにした。

## ⑦フリー項目（感想、シェアしたいこと等なんでも）
- [感想]
 ・SQLわかりやすいし、使いやすいと感じた。。

 ・
- [参考記事]
  - 1. [Materialize](https://materializecss.com/)
  - 2. PHPのサイトいろいろ見た