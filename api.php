<html lang="ja">
<head>
  <meat charset="utf-8">
  <title>位置情報の確認</title>
</head>
<body>
<h1>お問合せ</h1>
<form action="https://fukmurataizen.github.io./api.html" method="get">
        <p>お名前（必須）：<br>
        <input type="text" name="name"></p>
        <p>メールアドレス：<br>
        <input type="text" name="mail"></p>
        <p>お問合せ内容：<br>
        <textarea name="comment" cols="30" rows="5"></textarea></p>
        <p><input type="submit" value="確認する"></p>
</form>

<?php
   $data="<hr>¥r¥n";
   $data .="<p>名前:"$_GET["name"]"</p>¥r¥n";
   $data .="<p>メールアドレス:"$_GET["mail"]"</p>¥r¥n"; 
   $data .="<p>お問合せ内容:"$_GET["comment"]"</p>¥r¥n";

   $data="$data .";
    
    $itijouhou_file='itijouhou.txt';
    $fp=fopen($itijouhou_file,"w");
    if($fp){
        if(flock($fp, LOCK_EX)){
          if(fwrite($fp,  $data) === FALSE){
            print('file write error');
            }
             flock($fp, LOCK_UN);
            }else{
              print('file lock error');
            }
          }
?>
</body>
</html>
