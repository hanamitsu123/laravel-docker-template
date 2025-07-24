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

### $fillableは何のために設定しているか

### saveメソッドで実行しているSQLは何か

### redirect()->route()は何をしているか

## その他

### テーブル構成をマイグレーションファイルで管理するメリット

### マイグレーションファイルのup()、down()は何のコマンドを実行した時に呼び出されるのか

### Seederクラスの役割は何か

### route関数の引数・返り値・使用するメリット

### @extends・@section・@yieldの関係性とbladeを分割するメリット

### @csrfは何のための記述か

### {{ }}とは何の省略系か
