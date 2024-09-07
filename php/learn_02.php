<!DOCTYPE html>
<html>

<head>
    <title>Learn PHP</title>
</head>

<body>
    <h1>Learn PHP_02數值類型&轉換型別</h1>
    <!-- 对齐Shift + Alt + F -->
    <!-- PHP數字
        PHP 中有三種主要的數值類型：

    Integer
    Float
    Number Strings
    
        此外，PHP 還有兩種用於數字的資料類型：
    Infinity
    NaN
    當您為數值類型變數賦值時，就會建立它們： -->
    <?php
    echo "<hr>";
    //PHP -修改字串
    $x = "Hello World";
    $y = explode(" ", $x); //分割字串

    echo $y[0] . "<br>"; //印出第一個元素
    echo $y[1] . "<br>"; //印出第二個元素
    echo implode(" ", $y); //合併陣列成字串
    echo "<hr>";
    //PHP -字串轉換
    echo strtoupper($x); //轉換成大寫
    echo "<hr>";
    echo strtolower($x); //轉換成小寫
    echo "<hr>";
    echo ucfirst($x); //首字母大寫
    echo "<hr>";
    echo ucwords($x); //每個單字的首字母大寫
    echo "<hr>";
    echo strrev($x); //反轉字串
    echo "<hr>";
    echo strpos($x, "World"); //找出字串的位置
    echo "<hr>";
    echo substr($x, 0, 5); //取出字串的前5個字元
    echo "<hr>";
    echo substr($x, -5); //取出字串的後5個字元
    echo "<hr>";
    echo str_replace("World", "PHP", $x); //取代字串中的World為PHP
    echo "<hr>";
    echo str_ireplace("world", "PHP", $x); //不區分大小寫的取代字串中的World為PHP 
    echo "<hr>";
    echo trim($x); //去除字串的空白字元
    echo "<hr>";
    echo ltrim($x); //去除字串左側的空白字元
    echo "<hr>";
    echo rtrim($x); //去除字串右側的空白字元
    echo "<hr>";
    echo implode(",", array("apple", "banana", "orange")); //將陣列用逗號分隔
    echo "<hr>";
    echo implode(" ", array("apple", "banana", "orange")); //將陣列用空白分隔
    echo "<hr>";
    echo implode("", array("apple", "banana", "orange")); //將陣列用空字串分隔
    echo "<hr>";

    //字串連接
    $d = "Abcdefg";
    $e = "World";
    $f = "!";
    $c = $d . $e . $f; //字串連接
    echo $c;
    echo "<hr>";
    $g = $d . " " . $e . " " . $f; //字串空格連接
    echo $g;
    echo "<hr>";
    $g = " $d $e $f"; //字串空格連接(同上)
    echo "<hr>";
    $name = "John";
    $age = 30;
    $message = "My name is " . $name . " and I am " . $age . " years old.";
    echo $message;
    echo "<hr>";

    //PHP -字串切片
    echo substr($d, 3, 2); //切開"Abcdefg"字串的第3個字元,開始取2個字元
    echo "<hr>";
    echo substr($d, -3, 2); //切開"Abcdefg"字串的倒數第3個字元,開始取2個字元
    echo "<hr>";
    echo substr($d, 3); //切開"Abcdefg"字串的第3個字元,開始取到最後
    echo "<hr>";
    echo substr($d, -3); //切開"Abcdefg"字串的倒數第3個字元,開始取到最後
    echo "<hr>";
    echo substr($d, 0, 1); //切開"Abcdefg"字串的第1個字元,開始取1個字元
    echo "<hr>";
    echo substr($d, -1, 1); //切開"Abcdefg"字串的倒數第1個字元,開始取1個字元
    echo "<hr>";
    echo substr($d, 0); //切開"Abcdefg"字串的第0個字元,開始取到最後
    echo "<hr>";
    echo substr($d, 3, -2); //切開"Abcdefg"字串的第3個字元,開始取到倒數第2個字元
    echo "<hr>";

    //PHP -轉義字符
    $i = "We are the so-called \"Vikings\" from the north.";
    echo $i;
    echo "<hr>";

    // PHP數值類型
    //// 整數是沒有小數部分的數字。可以是正數也可以是負數
    //// 2、256、-256、10358、-179567 都是整數。
    $j = 10;
    $k = 3.14;
    $l = 10.5;
    var_dump($j);
    var_dump($k);
    var_dump($l);
    echo "<hr>";
    //檢查變數的型別是否為整數：
    if (is_int($j)) {
        echo "j is an integer";
    } else {
        echo "j is not an integer";
    }
    echo "<hr>";
    //檢查變數的型別是否為浮點數：
    if (is_float($k)) {
        echo "k is a float";
    } else {
        echo "k is not a float";
    }
    echo "<hr>";
    //檢查變數的型別是否為數字：
    if (is_numeric($l)) {
        echo "l is a number";
    } else {
        echo "l is not a number";
    }
    echo "<hr>";
    //PHP -浮點數
    $m = 10.5;
    $n = 3.14e3;
    $o = 7E-10;
    var_dump($m);
    var_dump($n);
    var_dump($o);
    echo "<hr>";
    //PHP -無限大
    $p = INF;
    $q = -INF;
    var_dump($p);
    var_dump($q);
    echo "<hr>";
    //PHP -NaN
    $r = NAN;
    var_dump($r);
    echo "<hr>";
    //PHP -數字字串
    $s = "10";
    $t = "3.14";
    $u = "10.5";
    $v = "1e3";
    $w = "7E-10";
    $x = "INF";
    $y = "-INF";
    $z = "NAN";
    var_dump($s);
    var_dump($t);
    var_dump($u);
    var_dump($v);
    var_dump($w);
    var_dump($x);
    var_dump($y);
    var_dump($z);
    echo "<hr>";
    //PHP -數字字串轉換
    $a = (int) "10";
    $b = (float) "3.14";
    $c = (float) "10.5";
    $d = (float) "1e3";
    $e = (float) "7E-10";
    $f = (float) "INF";
    $g = (float) "-INF";
    $h = (float) "NAN";
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    var_dump($f);
    var_dump($g);
    var_dump($h);
    echo "<hr>";
    //PHP -數字字串轉換錯誤
    $i = (int) "10.5";
    $j = (float) "INF";
    $k = (float) "-INF";
    $l = (float) "NAN";
    var_dump($i);
    var_dump($j);
    var_dump($k);
    var_dump($l);
    echo "<hr>";
    //檢查變數的型別是否為 float：以下函數來檢查變數的型is_float()
    var_dump(is_float($j));
    var_dump(is_float($k));
    var_dump(is_float($l));
    //檢查數值是有限還是無限：PHP 有以下函數來檢查數值是有限還是無限：

    var_dump(is_finite($j));
    //無效計算將傳回一個NaN值：NaN代表不是數字。
    $x = acos(8);
    var_dump(is_nan($x));
    //檢查變數是否為數字：is_numeric()函數可用來找出變數是否為數字
    $j = 5895;
    var_dump(is_numeric($j));
    $k ="59.85" + 100;
    var_dump(is_numeric($k));
    $l = "hello world";
    var_dump(is_numeric($l));
    echo "<hr>";
    //將浮點數和字串轉換為整數：(int)、(integer)和 函數intval()通常用於將值轉換為整數。
    $m = 10.5;
    $int_cast =(int)$m;
    echo $int_cast;
    var_dump($int_cast);
    echo "<hr>";
    //將整數和字串轉換為浮點數：(float)、(double)和 函數floatval()通常用於將值轉換為浮點數。
    $n = 10;
    $float_cast = (float)$n;
    echo $float_cast;
    var_dump( $float_cast);
    echo "<hr>";
    //將整數和浮點數轉換為字串：(string)和 函數strval()通常用於將值轉換為字串。
    $o = 10;
    $string_cast = (string)$o;
    echo $string_cast;
    var_dump($string_cast);
    echo "<hr>";

    ?>
</body>

</html>