# Laravel Lesson レビュー①

## Todo一覧機能

### Todoモデルのallメソッドで実行しているSQLは何か
- SELECT * FROM todos;
### Todoモデルのallメソッドの返り値は何か
- Illuminate\Database\Eloquent\Collection クラスのインタンスです。
### 配列の代わりにCollectionクラスを使用するメリットは
- Eloquent\Collection は Illuminate\Support\Collection を継承しつつ、DB操作やEloquentモデルに特化したメソッドを利用できます。一方、配列を直接扱う場合は、PHPの組み込み関数やLaravelのヘルパー関数を組み合わせる必要があり、DBやモデル固有の便利メソッドを直接利用できません。そのため、Eloquentコレクションを使う方が、DBレコードの処理や後続のデータ操作を効率的かつシンプルに書けます。
### view関数の第1・第2引数の指定と何をしているか
- 第1引数:resources/views配下のビューファイルを指定します。
- 第2引数:ビューで使用するデータを指定します。['human' => $humans]の場合では、ビューにhuman変数を渡し、Blade記法を使用しているビューの中にhumans配列を渡します。
- view()は、Bladeテンプレートを探して、変数をバインドし、HTMLを生成、それを格納したviewオブジェクトを返します。
### index.blade.phpの$todos・$todoに代入されているものは何か
- $todos:すべてのModelのインスタンス
- $todo:1件のModelインスタンス
## Todo作成機能

### Requestクラスのallメソッドは何をしているか
- フォームから送信された全ての値を配列として取得します。
### fillメソッドは何をしているか
- Modelインスタンスの各プロパティに代入します。
### $fillableは何のために設定しているか
- 一括代入を許可するプロパティを指定します。代入を受け付けるプロパティを指定しておかないと、管理者権限など意図しないデータなどが変更されるリスクがあります。
### saveメソッドで実行しているSQLは何か
- Insert into todos (content) values($todo['content']);です。
### redirect()->route()は何をしているか
- redirect() は Redirector オブジェクトを返します。
Redirector::route() は内部で UrlGenerator を用いてルート名からURLを生成し、そのURLを Redirector::to() に渡してRedirectResponse を作成します。返された RedirectResponse は、HTTP 302レスポンスと Location ヘッダーを持っており、ブラウザはこのヘッダーをもとに指定されたURLへ自動的に遷移します。
## その他

### テーブル構成をマイグレーションファイルで管理するメリット
- マイグレーションを使うことで、SQLを直接書かなくても直感的なコードでテーブル操作ができ、開発チーム全員が同じデータベース構造を簡単に共有・同期できるのが大きなメリットです。
### マイグレーションファイルのup()、down()は何のコマンドを実行した時に呼び出されるのか
- php artisan migrateを実行した時です。
### Seederクラスの役割は何か
- seederクラスは、データベースに初期データやテストデータを自動で登録するための仕組みです。これを使うことで、開発やテスト環境で同じデータを簡単に再現でき、手動でSQLを書く手間を省けます。
### route関数の引数・返り値・使用するメリット
- route() 関数は、第1引数に名前付きルートを指定すると、そのルート名に対応するURL文字列を返す関数です。ルートでURLの構造が変更された場合でも、名前付きルートを定義している箇所を修正するだけで、常に正しいURLを取得できます。そのため、URLを直接コードに書かずに済み、保守性や再利用性が高まるのがメリットです。
### @extends・@section・@yieldの関係性とbladeを分割するメリット
- @extends: 子Bladeで、利用する親Bladeを指定します。
- @section: 子Bladeで、@section ~ @endsection で囲んだ部分を定義し、親Bladeの @yield が示す位置に差し込みます。
- メリット: ヘッダーやフッターなどの共通部分を親Bladeにまとめられるため、各ページは差分だけを子Bladeに書けば済み、コードの重複が減って保守性が向上します。
### @csrfは何のための記述か
- @csrfはBladeディレクティブで、フォーム送信時のCSRFを防ぐためのトークンを埋め込む役割があります。
### {{ }}とは何の省略系か