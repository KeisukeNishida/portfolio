

<?php

print "<h1></h1>";


// ポスト変数が存在するか
if (isset($_POST['choice'])) {
    $janken = array(
        'グー',
        'チョキ',
        'パー'
  );}


    // エスケープ
    $player = htmlspecialchars($_POST['choice'], ENT_QUOTES, 'UTF-8');

    // 相手の手をランダムで決定
    $com = $janken[array_rand($janken)];



//ジャンケンの手のグラフィックを設定する
    if($com=='グー'){

    print "<div><br /><img src= 'sazae.image/s.gu.PNG' alt='image' width='500' height='400'></div>";
    }

    elseif($com=='チョキ'){

    print "<div><br /><img src='sazae.image/s.choki.PNG' alt='image' width='500' height='400'></div>";
    }

    elseif($com=='パー'){

    print "<div><br /><img src='sazae.image/s.pa-.PNG' alt='image' width='500' height='400'></div>";
    }



    // 勝敗判定
    if ($player === 'グー' && $com === 'チョキ') {
        $result = '勝ち';
    } elseif ($player === 'グー' && $com === 'グー') {
        $result = 'あいこ';
    } elseif ($player === 'グー' && $com === 'パー') {
        $result = '負け';
    } elseif ($player === 'チョキ' && $com === 'チョキ') {
        $result = 'あいこ';
    } elseif ($player === 'チョキ' && $com === 'グー') {
        $result = '負け';
    } elseif ($player === 'チョキ' && $com === 'パー') {
          $result = '勝ち';
    } elseif ($player === 'パー' && $com === 'チョキ') {
            $result = '負け';
    } elseif ($player === 'パー' && $com === 'グー') {
              $result = '勝ち';
    } elseif ($player === 'パー' && $com === 'パー') {
                $result = 'あいこ';
}




?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <script type="text/javascript" src="sazae.js"></script>
<meta charset="UTF-8">

</head>
<body>
    <link rel="stylesheet" type="text/css" href="sazae.css.php">

 <div>


<?php if ($result) : ?>


    <p>結果</p>

    <p>
    <font color="green">あなた：</font>
    <?php echo $player; ?><br>
    <font color="blue">あいて：</font>
    <?php echo $com; ?>
    </p>

<p><font size="6" color="#ff0000" face="ＭＳ Ｐ明朝,ＭＳ 明朝">
  <?php echo $result; ?>です。

</font></p>

<?php

if($result === '勝ち'){ print "<img src= 'sazae.image/s.win.PNG' alt='image' width='500' height='150'>";
}elseif ($result === 'あいこ'){ print "<img src= 'sazae.image/s.equal.PNG' alt='image' width='500' height='150'>";
}elseif($result === '負け'){ print "<img src= 'sazae.image/s.lose.PNG' alt='image' width='500' height='150'>";
}

?>

<input type="button" onclick="location.href='sazae.index.php'" value="再チャレンジ"  a href="#" class="btn-square-re"></form>
<?php endif; ?>

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>



</body>
</div>
</html>
