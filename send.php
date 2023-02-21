<?php
$name = $_POST['name']; 
$age = $_POST['age'];
$email = $_POST['email'];
$address = $_POST['address'];

//配列の最近のよくある書き方
$test = ['tokyo','osaka','saitama','chiba'];
//結局これと同じ
$test[] = 'tokyo';
$test[] = 'osaka';
$test[] = 'saitama';
$test[] = 'chiba';

$intro = '';
$chara = '';
$aiko_flg = false;

//ケース1
 if ($name == 'aimyon') {
   $intro = "マリーゴールドを歌います。";
 }

//ケース2
 if ($name ==  'aimyon') {
   $intro = "君はロックを聞かないを歌います。";
 } elseif ($name == 'higedan') {
   $intro = "pretenderを歌います。";
 }

//ケース3
  if ($name == 'aimyon') {
    $chara = "6人兄弟です。";
  } else {
    $chara = 'あいみょんしか知りません';
  }
  
//三項演算子
  if ($name == 'aimyon' and $name == 'higedan') {
    $intro = '論文生の時によく聞きました';
  }

  if ($name == 'aiko' && $age == '47') {
    $aiko_flg = true;
  }
  

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    名前は「<?= $name ?>」<br>
    年齢は「<?= $age ?>」<br>
    メールは「<?php echo $email;?>」<br>
    住所「<?php echo $address;?>」<br>

    <?= $name ?>って歌手を知っていますか?<br>
    「<?= $intro ?>」<br>
    あと秘密があって、それは「<?= $chara ?>」

    <?php if ($aiko_flg == true): ?>
      <div style="background-color:#c71585;coler:white;">
        <p>悩んでる身体が熱くて指先は凍える程冷たい<p>
      </div>
    <?php endif; ?>

  </body>
</html>
