<?php 
$food['meat']['ushi'] = '和牛';
$food['meat']['buta'] = '豚ロース';
$food['meat']['tori'] = '焼き鳥';
$food['fish']['maguro'] = '本まぐろ';
$food['fish']['katsuo'] = '鰹のたたき';
$food['fish']['ika'] = 'イカ焼き';
$food['fruits']['apple'] = 'アップルパイ';
$food['fruits']['banana'] = 'チョコバナナ';
$food['fruits']['grape'] = 'ワイン';


foreach ($food['meat'] as $key => $val) {
  echo $key;
  echo "<br>";
  echo $val;
  echo "<br>";
}



?>
