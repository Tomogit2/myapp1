<?php
class Menu {
  public $name;
  
  // コンストラクタの引数に$nameを入れてください
  public function __construct($name) {
    // nameプロパティに引数の$nameを代入してください
    $this -> name = $name;
    
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
}

// new Menu()の引数に'CURRY'を入れてください
$curry = new Menu('CURRY');
// new Menu()の引数に'PASTA'を入れてください
$pasta = new Menu('PASTA');
// 以下の1行を消してください

// 以下の1行を消してください

$curry->hello();
echo '<br>';
$pasta->hello();

?>