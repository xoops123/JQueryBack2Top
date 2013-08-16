@file JQueryBack2Top.class.php
@package For legacy Cube Legacy 2.2
@version $Id: JQueryBack2Top.class.php ver0.01 2012/9/11  00:00:00 marine  $


2011/11/15

これは、ページをスクロールした際にトップに戻るボタンを表示させるプリロードです。
jQueryを用いて、少しスクロールして時にボタンが現れるように設定しています。
トップに戻る際は、画面右側に出現したボタンをクリックするとスルスルっとスムースにスクロールして戻ります。

preload フォルダにある JQueryBack2Top.class.php ファイルをFTPにてサイトのXOOPSルートにある preload ディレクトリにコピーしてください。
common フォルダにある back2top フォルダをFTPにてサイトのXOOPSルートにある common ディレクトリにコピーしてください。

これで、どのテーマを利用しているときでもスムーススクロールが利用できます。
（注：テーマが同様の機能を実装している場合やjavascriptによるウィンドウの制御などを行っている場合は、本プリロードの機能が効かないこともあります。）

なお、出現するボタンの色などについては、/common/back2top/back2top.css の記述を変更してください。


2012/9/11

ページ内リンクをクリックした際に、スルスルっとアンカーに移動する機能を追加しました。


