<?php
// XSS対策のためにfuncs.phpを読み込む
require_once('funcs.php');

//1.  DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．SQL文を用意(データ取得：SELECT)
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");

//3. 実行
$status = $stmt->execute();

//4．データ表示
$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  // while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
  //   $view .= "<p>";
  //   $view .= h($result['indate']).'|||'.h($result['book_name']).'|||'.h($result['author_name']).'|||'.h($result['url']).'|||'.h($result['comment']).'|||'.h($result['shosai']);
  //   $view .= "</p>";
  // }

echo "<table>\n";
echo "\t<tr><th>id</th><th>book_name</th><th>author_name</th><th>url</th><th>comment</th><th>shosai</th></tr>\n";
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    echo "\t<tr>\n";
    echo "\t\t<td>{$result['id']}</td>\n";
    echo "\t\t<td>{$result['book_name']}</td>\n";
    echo "\t\t<td>{$result['author_name']}</td>\n";
    echo "\t\t<td>{$result['url']}</td>\n";
    echo "\t\t<td>{$result['comment']}</td>\n";
    echo "\t\t<td>{$result['shosai']}</td>\n";
    echo "\t</tr>\n";
}
echo "</table>\n";
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>データベース表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>

<body id="main">

<footer>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Bookデータ登録pageへ戻る</a>
      </div>
    </div>
  </nav>
</footer>

</body>
</html>

<style>
th,td {
    border: solid 1px;  /* 枠線指定 */
    padding: 10px;      /* 余白指定 */
}
 
table {
    border-collapse:  collapse; /* セルの線を重ねる */
}

.main{
  max-width: 800px;
}
</style>