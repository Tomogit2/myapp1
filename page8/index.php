<?php
class Menu {
  public $name;
  
  public function __construct($name) {
    $this->name = $name;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
}

$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');

?>

<!-- <p>タグの中で、$curryのnameプロパティを表示してください -->
<p><?php echo $curry -> name ?></p>

<!-- <p>タグの中で、$pastaのnameプロパティを表示してください -->
<p></p>
<p><?php echo $pasta -> name ?></p>