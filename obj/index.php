<?php 
//インスタンス化する or オブジェクト化する or newする or オブジェクトにする or 実体化する
$human = new human('yuki','カフェに行く');
$res = $human->sleeping('ちょっとだけ');
echo $res;

class human {
  //インスタンス変数
  public $name = 'idesan';
  public $eat = "食べる";

  //コンストラクタor初期化orイニシャライズ
  public function __construct($param , $param2) {
    $this->name = $param;
    $this->eat = $param2;
  }

  public function sleeping($param) {
    $reaction = $this->cannot_thing($param , $this->eat);
    $ret_raw = $param . "寝ました";
    $ret = $ret_raw . $reaction;
    return $this->name.$ret;
  }

  public function cannot_thing($param , $verb) {
    if ($param == 'とてもよく') {
      return $verb.'ことができませんでした';
    } 
  }
}


?>
