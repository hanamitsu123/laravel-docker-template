# Laravel Lesson レビュー②

## Todo編集機能

### @method('PUT')を記述した行に何が出力されているか
- <input type="hidden" name="_method" value="PUT">
### findメソッドの引数に指定しているIDは何のIDか
- todosテーブルの主キーの値です。
### findメソッドで実行しているSQLは何か
- SELECT * FROM todos WHERE id = $id;
### findメソッドで取得できる値は何か
- 該当のレコードがあれば、Todoモデルのオブジェクトを返します。
### saveメソッドは何を基準にINSERTとUPDATEを切り替えているのか
- Todoモデルのプロパティにidが代入されているかどうかで切り替えています。idがない場合には、INSERTを実行します。idがある場合には、UPDATEを実行します。
## Todo論理削除

### traitとclassの違いとは
- trait:複数のクラスで共有するメソッドやプロパティをまとめるための仕組みで、インスタンス化はできません。
- class:複数のクラスで共有するメソッドやプロパティをまとめるための仕組みで、インスタンス化はできません。
### traitを使用するメリットとは
- トレイトを使うことで、多重継承ができないPHPであっても、共通処理を複数のクラスに簡単に組み込めるため、コードの重複を減らし、メンテナンス性を高められます。
## その他

### TodoControllerクラスのコンストラクタはどのタイミングで実行されるか

### RequestクラスからFormRequestクラスに変更した理由

### $errorsのhasメソッドの引数・返り値は何か

### $errorsのfirstメソッドの引数・返り値は何か

### フレームワークとは何か

### MVCはどういったアーキテクチャか

### ORMとは何か、またLaravelが使用しているORMは何か

### composer.json, composer.lockとは何か

### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか
