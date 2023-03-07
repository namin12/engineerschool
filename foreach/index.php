<?php 
$pref[] = 'tokyo';
$pref[] = 'chiba';
$pref[] = 'saitama';
$pref[] = 'kanagawa';


$pref2['japan'][] = 'tokyo';
$pref2['japan'][] = 'chiba';
$pref2['japan'][] = 'saitama';
$pref2['japan'][] = 'kanagawa';

//echo "<pre>";
//var_dump($pref2);
//exit;

//foreach($pref2['japan'] as $key => $val) {
//  echo $key;
//  echo "<br>";
//  echo $val;
//  echo "<br>";
//}

?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
   <h1>都道府県</h1>       
   <?php foreach($pref2['japan'] as $key => $val): ?>
      <h2><?= $val ?></h2>
   <?php endforeach;?>


  </body>
</html>
