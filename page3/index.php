<?php
class Menu {
  // $nameというプロパティを定義してください
  public $name;
  
}

$curry = new Menu();
$pasta = new Menu();
// $curryのnameプロパティに'CURRY'を代入してください
$curry -> name ='CURRY';

// $pastaのnameプロパティに'PASTA'を代入してください
$pasta -> name ='PASTA';

// $curryのnameプロパティをechoしてください
echo $curry -> name;

echo '<br>';
// $pastaのnameプロパティをechoしてください
echo $pasta -> name;

?>