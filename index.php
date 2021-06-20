<!-- <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body> -->

<!-- Head[Start] -->
<!-- <header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header> -->
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- <form method="POST" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>書籍名：<input type="text" name="name"></label><br>
     <label>Amazon URL：<input type="text" name="url"></label><br>
     <label>comment：<textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form> -->
<!-- Main[End] -->

<!-- 
</body>
</html> -->


<html>

<head>
	<meta charset="utf-8">
	<title>0621提出課題</title>
</head>

<body>
 <p class=title>Book Report</p>

 <ul>
	 <li><a href="select.php">データベースpageへ</a></li>
 </ul>


 <form action="insert.php" method="post">
 
 <div class="Form">
 
 <div class="Form-Item">
    <p class="Form-Item-Label">
      <span class="Form-Item-Label-Required">必須</span>書籍名
    </p>
    <input type="text" id="name" name="book_name" class="Form-Item-Input" placeholder="例）天子蒙塵">
  </div>
 
  <div class="Form-Item">
    <p class="Form-Item-Label">
      <span class="Form-Item-Label-Required">必須</span>著者
    </p>
    <input type="text" id="name" name="author_name" class="Form-Item-Input" placeholder="例）浅田次郎">
  </div>

  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>書籍URL</p>
    <input type="url" id="url" name="url" class="Form-Item-Input" placeholder="例）http://kodanshabunko.com/asadajirou/series05.html">
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label">
      <span class="Form-Item-Label-Required">必須</span>一言コメント
    </p>
    <input type="text" id="name" name="comment" class="Form-Item-Input" placeholder="例)今日の国際関係についても考えさせられる">
   </div>

   <div class="Form-Item">
    <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">任意</span>補足コメント</p>
    <textarea  name="shosai" class="Form-Item-Textarea"></textarea>
   </div>

   <input type="submit" id=submit class="Form-Btn" value="送信する">

  </div>

  </form>
</body>

<!-- 入力漏れチェック関数 -->
<script>
  $('#submit').on('click',function(){
    Check('#name');
    Check('#email');
    Check('#tel');

  function Check(a){
    if($(a).val() === ''){
      alert('入力漏れがあります！');
      $(a).focus();
      return false;
    }
    alert('送信完了！');
  };
  });
</script>

</html>

<style>
/* title,文字関連css */
.title{
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    padding-top: 20px;
}

body{
    color:#222222;
    font-size: 16px;
    font-family: "Open Sans",'ヒラギノ角ゴ ProN W3', Hiragino Kaku Gothic ProN, "メイリオ", Meiryo, ;
}

/* 選択肢プル */
.styled-select {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    display: inline-block;
    width: 400px;
    margin-left: 0px;
    margin: 0 0; 
    padding: 0.6em 1.5em 0.6em 0.5em; 
    cursor: pointer; 
    line-height: 1.4; 
    font-size: 0.95em; 
    font-weight: 700; 
    color: #333; 
    border-radius: 4px; 
    background-color: #f7f9fb; 
    border: solid 1px #e1e8ef; 
    box-shadow: 0 3px 3px -2px rgba(3, 29, 41, 0.15); 
    background-image: linear-gradient(45deg, transparent 50%, rgba(0,0,0,0.4) 50%),  linear-gradient(135deg, rgba(0,0,0,0.4) 50%, transparent 50%);
    background-size: 5px 5px, 5px 5px;
    background-position: calc(100% - 15px) 50%, calc(100% - 10px) 50%;
    background-repeat: no-repeat;
  }

  .styled-select:focus {
    outline: 0;
    border-color: #b0c5ff; 
  }
  
  .styled-select::-ms-expand {
    display: none;
  }

  /* 背景css*/
  .Form {
  margin-top: 80px;
  margin-left: auto;
  margin-right: auto;
  max-width: 720px;
}
@media screen and (max-width: 480px) {
  .Form {
    margin-top: 40px;
  }
}
.Form-Item {
  border-top: 1px solid #ddd;
  padding-top: 24px;
  padding-bottom: 24px;
  width: 100%;
  display: flex;
  align-items: center;
}
@media screen and (max-width: 480px) {
  .Form-Item {
    padding-left: 14px;
    padding-right: 14px;
    padding-top: 16px;
    padding-bottom: 16px;
    flex-wrap: wrap;
  }
}
.Form-Item:nth-child(5) {
  border-bottom: 1px solid #ddd;
}
.Form-Item-Label {
  width: 100%;
  max-width: 248px;
  letter-spacing: 0.05em;
  font-weight: bold;
  font-size: 18px;
}
@media screen and (max-width: 480px) {
  .Form-Item-Label {
    max-width: inherit;
    display: flex;
    align-items: center;
    font-size: 15px;
  }
}
.Form-Item-Label.isMsg {
  margin-top: 8px;
  margin-bottom: auto;
}
@media screen and (max-width: 480px) {
  .Form-Item-Label.isMsg {
    margin-top: 0;
  }
}
.Form-Item-Label-Required {
  border-radius: 6px;
  margin-right: 8px;
  padding-top: 8px;
  padding-bottom: 8px;
  width: 48px;
  display: inline-block;
  text-align: center;
  background: #5bc8ac;
  color: #fff;
  font-size: 14px;
}
@media screen and (max-width: 480px) {
  .Form-Item-Label-Required {
    border-radius: 4px;
    padding-top: 4px;
    padding-bottom: 4px;
    width: 32px;
    font-size: 10px;
  }
}
.Form-Item-Input {
  border: 1px solid #ddd;
  border-radius: 6px;
  margin-left: 40px;
  padding-left: 1em;
  padding-right: 1em;
  height: 48px;
  flex: 1;
  width: 100%;
  max-width: 410px;
  background: #eaedf2;
  font-size: 18px;
}
.Form-Item-Input-R {
  /* border: 1px solid #ddd; */
  border-radius: 6px;
  margin-left: 40px;
  padding-left: 1em;
  padding-right: 1em;
  height: 48px;
  flex: 1;
  width: 100%;
  max-width: 410px;
  /* background: #eaedf2; */
  font-size: 18px;
}

@media screen and (max-width: 480px) {
  .Form-Item-Input {
    margin-left: 0;
    margin-top: 18px;
    height: 40px;
    flex: inherit;
    font-size: 15px;
  }
}
.Form-Item-Textarea {
  border: 1px solid #ddd;
  border-radius: 6px;
  margin-left: 40px;
  padding-left: 1em;
  padding-right: 1em;
  height: 216px;
  flex: 1;
  width: 100%;
  max-width: 410px;
  background: #eaedf2;
  font-size: 18px;
}
@media screen and (max-width: 480px) {
  .Form-Item-Textarea {
    margin-top: 18px;
    margin-left: 0;
    height: 200px;
    flex: inherit;
    font-size: 15px;
  }
}
.Form-Btn {
  border-radius: 6px;
  margin-top: 32px;
  margin-left: auto;
  margin-right: auto;
  padding-top: 20px;
  padding-bottom: 20px;
  width: 280px;
  display: block;
  letter-spacing: 0.05em;
  background: #5bc8ac;
  color: #fff;
  font-weight: bold;
  font-size: 20px;
  cursor: pointer;
}
@media screen and (max-width: 480px) {
  .Form-Btn {
    margin-top: 24px;
    padding-top: 8px;
    padding-bottom: 8px;
    width: 160px;
    font-size: 16px;
    cursor: pointer;
  }
}

/* 点消し */
ul {
  list-style: none;
}
  </style>