

<!DOCTYPE html>
<html>
<body>

<?php
echo 'HELLO';

// Outputs a welcome message:
echo "Welcome Home!";

$txt="Hello World!";
echo $txt;

$txt="123";
echo "I love".$txt."!";

$x="2";
$y="3";
echo $x + $y;

echo "<hr>";
$x = 5;
$y = "John";
echo $x;
echo $y;

echo "<hr>";
$x =5;
var_dump($x);

echo "<hr>";
var_dump(5);
var_dump("Hello World");
var_dump("true");
var_dump(3.14);
var_dump([2, 4, 6]);
var_dump(NULL);

echo "<hr>";
$x = "John";
echo $x;

echo "<hr>";
$x = $y = $z ="fruit";
echo $x;
echo $y;    
echo $z;

// 具有全域範圍的變數：
echo "<hr>";
$x = 5; // global scope
function myTest() {
  global $x; // 引入全域變數 $x
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();
echo "<p>Variable x outside function is: $x</p>";

// PHP 全域關鍵字
echo "<hr>";
$x = 5;
$y = 10;

function Test() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

Test();
echo $y; // outputs 15

// PHP static 關鍵字
echo "<hr>";
function test2(){
    static $x = 5;
    echo $x;
    $x++;
}
test2();
test2();
test2();
test2();
//該echo語句可以帶或不帶括號使用： echo或echo()。
echo "<hr>";
echo "Hello World!";
echo ("Hello World!");
//顯示文字
echo "<h2>PHP is Fun!</h2>";
echo "I love PHP!<hr>";
echo "I'm learning PHP.<hr>";
echo "This", "string", "was", "made","with multiple parameters.";
//顯示變數
$txt1 ="Learn PHP";
$txt2 = "W3schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";
//使用單引號
$a1 ="Learn PHP";
$a2 = "W3schools.com";

echo '<h2>'.$a1.'</h2>';
echo '<p>Study PHP at'. $a2.'</p>';
//$txt1 ="Learn PHP";
$txt2 = "W3schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";
//PHP 列印語句
print "Hello World!<hr>";
//same as:
print ("Hello World!<hr>");
//顯示文字
print "<h2>PHP is Fun!</h2>";
print "I love PHP!<hr>";
print "I'm about to learn PHP.<hr>";
//顯示變數
$b1 ="Learn PHP";
$b2 = "W3schools.com";
print "<h2>$b1</h2>";
print "<p>Study PHP at $b2</p>";
//使用單引號
$c1 ="Learn PHP";
$c2 = "W3schools.com";
print '<h2>'.$c1.'</h2>';
print '<p>study PHP at'.$c2.'</p>';

//PHP 資料類型
$x = 5;
var_dump($x);
//PHP 字串
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<hr>";
var_dump($y);
// int(5) string(12) "Hello world!"
// string(12) "Hello world!"


//PHP 整數
echo "<hr>";
$x = 5985;
var_dump($x);

//PHP 浮點型
echo "<hr>";
$x = 3.14;
var_dump($x);

//PHP 布林型
echo "<hr>";
$x = true;
var_dump($x);

//PHP 陣列
echo "<hr>";
$x = array("apple", "banana", "cherry");
var_dump($x);

//PHP NULL
echo "<hr>";
$x = null;
var_dump($x);

//PHP 物件
echo "<hr>";
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);

  //PHP 空值
  $x = "Hello World!";
  $x = null;
  var_dump($x); // outputs NULL
//變更資料類型
$x = 5;
var_dump($x);
$x = "Hello";
var_dump($x);
//例子
$x = "5";
$x = (string) $x;
var_dump($x);
//https://www.w3schools.com/php/php_string_modify.asp

?>

 
</body>
</html>
