<?php

print "<h1></h1>";



// ポスト変数が存在するか
if (isset($_POST['choice'])) {
  header('Location:sazae.battle.php');

  }

?>

<!DOCTYPE html>
<html lang="ja">

<head>
<script type="text/javascript" src="sazae.js"></script>
<meta charset="UTF-8">

<br />
<br />
<br />
<h1>サザエさん　ジャンケンゲーム</h1>
</head>
<body>

<link rel="stylesheet" type="text/css" href="sazae.css.php">

 <div>

<p>選んでください。</p>

<form action="sazae.battle.php" method="post" onclick="MoveCheck();">


<button type="submit" name="choice" value="グー" a href="#" class="btn-square-g">グー</button></a>

<button type="submit" name="choice" value="チョキ" a href="#" class="btn-square-c">チョキ</button></a>

<button type="submit" name="choice" value="パー" a href="#" class="btn-square-p" >パー</button></a>

</form>

<img src="sazae.image/sss.PNG" alt='image' width='400' height='400'>

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>



</body>
</div>
</html>
