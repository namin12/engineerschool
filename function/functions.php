<?php 

//引数に名前を渡したら「さん」がついて返ってくる関数
/*
 *@param 文字列
 *
 *@return さんがついた文字列
 */
function addSan(string $param) :string
{
  $ret = $param . 'さん';
  return $ret; 
}

//titleを取得するかんすう
function getTitle($param) {
  $source = file_get_contents($param);
  $ret1 = explode('<title>' , $source);
  $ret2 = explode('</title>' , $ret1[1]);
  return $ret2[0];
}

?>
