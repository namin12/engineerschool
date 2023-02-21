<?php 
$name = "yuki";
$age = 24;
$address = 'yokohama';
$email = 'yuki@gmail.com';


$animal['favorite'] = 'dog';
$animal['dislike'] = 'cat';
$animal['have'] = 'hamster';

$animal2 = array('favorite' => 'dog','dislike' => 'cat','have' => 'hamster' );

$animal3[] = 'dog';
$animal3[] = 'cat';
$animal3[] = 'hamster';


$pref['tokyo']['shibuya']['restaurant'] = 'あじゅうた';
$pref['tokyo']['aoyama']['restaurant'] = '鮨あき';

$pref['tokyo']['shinjyuku']['hotel'] = 'parkhyat';


$pref['tokyo']['shinjyuku']['restaurant'] = $shinjyuku_restaurant;
$shinjyuku_restaurant[] = '眞一館';
$shinjyuku_restaurant[] = 'おはじき';
$shinjyuku_restaurant[] = '上海ハオチー';



echo "<pre>";
var_dump($pref);



?>
