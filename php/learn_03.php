<!DOCTYPE html>
<html>

<head>
    <title>Learn PHP_03PHP Casting鑄造</title>
</head>

<body>
    <h1>Learn PHP_03</h1>
    <p>有時您需要將變數從一種資料類型變更為另一種資料類型，有時您希望變數具有特定的資料類型。這可以透過鑄造來完成。</p>
    <ul>
        <li>(string)- 轉換為字串資料類型</li>
        <li>(int)- 轉換為資料類型 Integer</li>
        <li>(float)- 轉換為資料型別 Float</li>
        <li>(bool)- 轉換為布林資料型</li>
        <li>(array)- 轉換為資料型別數組</li>
        <li>(object)- 轉換為資料型別對象</li>
        <li>(unset)- 轉換為 NULL 資料類型</li>

    </ul>
    <?php
    //轉換為布林值
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = 0;       // Integer
    $d = -1;      // Integer
    $e = 0.1;     // Float
    $f = "hello"; // String
    $g = "";      // String
    $h = true;    // Boolean
    $i = NULL;    // NULL

    $a = (bool) $a;
    $b = (bool) $b;
    $c = (bool) $c;
    $d = (bool) $d;
    $e = (bool) $e;
    $f = (bool) $f;
    $g = (bool) $g;
    $h = (bool) $h;
    $i = (bool) $i;
    echo "<hr>";
    //轉換為數組Cast to Array
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (array) $a;
    $b = (array) $b;
    $c = (array) $c;
    $d = (array) $d;
    $e = (array) $e;
    //投射到物件Cast to Object
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (object) $a;
    $b = (object) $b;
    $c = (object) $c;
    $d = (object) $d;
    $e = (object) $e;
    //物件轉換為陣列：Converting Objects into Arrays
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $myCar = new Car("red", "Volvo");

    $myCar = (array) $myCar;
    var_dump($myCar);
    //數組轉換為物件：
    $a = array("Volvo", "BMW", "Toyota"); // indexed array
    $b = array("Peter" => "35", "Ben" => "37", "Joe" => "43"); // associative array

    $a = (object) $a;
    $b = (object) $b;
    //轉換為 NULL
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL
    ?>
    <h1>Learn PHP_03_PHP Math </h1>
    <p>PHP 具有一組數學函數，可讓您對數字執行數學任務。</p>
    <?php
    //PHP pi() Function : 傳回該pi()函數傳回 PI 值：
    echo (pi());
    echo "<hr>";
    //PHP min() 和 max() 函數可用於尋找參數清單中的最低或最高值：
    echo (min(0, 150, 30, 20, -8, -200));
    echo "<hr>";
    echo (max(0, 150, 30, 20, -8, -200));
    echo "<hr>";
    //PHP 函數abs()傳回數字的絕對（正）值：
    echo (abs(-6.7));
    echo "<hr>";
    //PHP round() 函數將浮點數捨入為最接近的整數：
    echo (round(0.60));
    echo "<hr>";
    echo (round(0.49));
    echo "<hr>";
    //PHP 函數 rand()函數產生一個隨機數：
    echo (rand());
    echo "<hr>";
    //PHP 函數 rand()函數10-100,範圍內產生一個隨機數：
    echo (rand(10, 100));
    echo "<hr>";
    //PHP 函數 pow() 計算數字2的4平方：
    echo (pow(2, 4));
    echo "<hr>";
    //PHP 函數 sqrt() 計算數字的平方根：
    echo (sqrt(16));
    echo "<hr>";
    //PHP 函數 sin() 計算正弦值：
    echo (sin(30));
    echo "<hr>";
    //PHP 函數 cos() 計算餘弦值：
    echo (cos(60));
    echo "<hr>";
    //PHP 函數 tan() 計算正切值：
    echo (tan(45));
    echo "<hr>";
    //PHP 函數 asin() 計算反正弦值：
    echo (asin(0.5));
    echo "<hr>";
    //PHP 函數 acos() 計算反餘弦值：
    echo (acos(0.866));
    echo "<hr>";
    //PHP 函數 atan() 計算反正切值：
    echo (atan(1));
    echo "<hr>";
    //PHP 函數 rad2deg() 將弧度轉換為角度：
    echo (rad2deg(3.1415926535898));
    echo "<hr>";
    //PHP 函數 deg2rad() 將角度轉換為弧度：
    echo (deg2rad(180));
    echo "<hr>";
    //PHP 函數 bindec() 將二進制數字轉換為十進制數字：
    echo (bindec("1010"));
    echo "<hr>";
    //PHP 函數 decbin() 將十進制數字轉換為二進制數字：
    echo (decbin(10));
    echo "<hr>";
    //PHP 函數 decoct() 將十進制數字轉換為八進制數字：
    echo (decoct(123));
    echo "<hr>";
    //PHP 函數 dechex() 將十進制數字轉換為十六進制數字：
    echo (dechex(255));
    echo "<hr>";
    //PHP 函數 hexdec() 將十六進制數字轉換為十進制數字：
    echo (hexdec("FF"));
    echo "<hr>";
    //PHP 函數 octdec() 將八進制數字轉換為十進制數字：
    echo (octdec("77"));
    echo "<hr>";
    ?>
    <h1>Learn PHP_03_PHP 常數PHP Constants </h1>
    <p>常量類似於變量，只不過一旦定義就不能更改或取消定義。</p>

    <?php
    //Create a PHP Constant:若要建立常數，請使用該define()函數。
    // Create a constant with a case-sensitive name:建立一個名稱區分大小寫的常數
    define("123456", "Welcome to W3Schools.com!", true);
    echo 123456;
    echo "<hr>";
    //PHP const Keyword關鍵字建立常數const。
    //使用關鍵字建立區分大小寫的const常數：Create a case-sensitive constant with the const keyword
    const MYCAR = "Volvo";
    echo MYCAR;
    echo "<hr>";
    //PHP Constant Arrays函數建立陣列常數define()
    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    echo cars[0];
    echo "<hr>";
    //Constants are Global常量自動是全域的，可以在整個腳本中
    define("GREETING", "Welcome to W3Schools.com!");

    function myTest()
    {
        echo GREETING;
    }

    myTest();
    ?>
    <h1>Learn PHP_03_PHP 魔法常數PHP Magic Constants </h1>
    <p>PHP 有九個預定義常數，它們的值會根據它們的使用位置而變化，因此它們被稱為「魔術常數」。</p>
    <ul>
        <li><strong>__CLASS__</strong>: 如果在類別內使用，會返回類別名稱。</li>
        <li><strong>__DIR__</strong>: 文件所在的目錄。</li>
        <li><strong>__FILE__</strong>: 包含完整路徑的文件名稱。</li>
        <li><strong>__FUNCTION__</strong>: 如果在函數內使用，會返回函數名稱。</li>
        <li><strong>__LINE__</strong>: 當前的行號。</li>
        <li><strong>__METHOD__</strong>: 如果在類別的函數內使用，會返回類別和函數名稱。</li>
        <li><strong>__NAMESPACE__</strong>: 如果在命名空間內使用，會返回命名空間的名稱。</li>
        <li><strong>__TRAIT__</strong>: 如果在特徵（trait）內使用，會返回特徵名稱。</li>
        <li><strong>ClassName::class</strong>: 返回指定類別的名稱，若有命名空間，也會一併返回。</li>
    </ul>

    <h1>Learn PHP_03_PHP 運算符PHP Operators </h1>
    <p>PHP 有九個預定義常數，它們的值會根據它們的使用位置而變化，因此它們被稱為「魔術常數」。</p>
    <ul>
        <li><strong>+</strong> 加法：<code>$x + $y</code> - $x 和 $y 的總和</li>
        <li><strong>-</strong> 減法：<code>$x - $y</code> - $x 和 $y 的差</li>
        <li><strong>*</strong> 乘法：<code>$x * $y</code> - $x 和 $y 的積</li>
        <li><strong>/</strong> 除法：<code>$x / $y</code> - $x 除以 $y 的商</li>
        <li><strong>%</strong> 取餘數：<code>$x % $y</code> - $x 除以 $y 的餘數</li>
        <li><strong>**</strong> 指數：<code>$x ** $y</code> - $x 的 $y 次方結果</li>
    </ul>

    <h1>PHP Comparison Operators比較運算符 </h1>
    <p>比較運算子用於比較兩個值（數字或字串）。</p>
    <ul>
  <li><strong>x = y</strong> 同於 <code>x = y</code> - 左邊的操作數被設置為右邊表達式的值</li>
  <li><strong>x += y</strong> 同於 <code>x = x + y</code> - 加法</li>
  <li><strong>x -= y</strong> 同於 <code>x = x - y</code> - 減法</li>
  <li><strong>x *= y</strong> 同於 <code>x = x * y</code> - 乘法</li>
  <li><strong>x /= y</strong> 同於 <code>x = x / y</code> - 除法</li>
  <li><strong>x %= y</strong> 同於 <code>x = x % y</code> - 取餘數</li>
</ul>

   
    <h1> PHP Assignment Operators賦值運算符 </h1>
    <p>中的基本賦值運算子是「=」。這意味著左側操作數被設定為右側賦值表達式的值。</p>
    <ul>
  <li><strong>==</strong> 等於 - <code>$x == $y</code> - 如果 $x 等於 $y，則返回 true</li>
  <li><strong>===</strong> 嚴格等於 - <code>$x === $y</code> - 如果 $x 等於 $y 且兩者類型相同，則返回 true</li>
  <li><strong>!=</strong> 不等於 - <code>$x != $y</code> - 如果 $x 不等於 $y，則返回 true</li>
  <li><strong><></strong> 不等於 - <code>$x <> $y</code> - 如果 $x 不等於 $y，則返回 true</li>
  <li><strong>!==</strong> 嚴格不等於 - <code>$x !== $y</code> - 如果 $x 不等於 $y 或兩者類型不同，則返回 true</li>
  <li><strong>></strong> 大於 - <code>$x > $y</code> - 如果 $x 大於 $y，則返回 true</li>
  <li><strong><</strong> 小於 - <code>$x < $y</code> - 如果 $x 小於 $y，則返回 true</li>
  <li><strong>>=</strong> 大於或等於 - <code>$x >= $y</code> - 如果 $x 大於或等於 $y，則返回 true</li>
  <li><strong><=</strong> 小於或等於 - <code>$x <= $y</code> - 如果 $x 小於或等於 $y，則返回 true</li>
  <li><strong><=></strong> 太空船 - <code>$x <=> $y</code> - 根據 $x 與 $y 的關係，返回一個小於、等於或大於零的整數（PHP 7 中引入）</li>
</ul>
<h1> PHP Increment / Decrement Operators </h1>
    <p>自增/自減運算符</p>
    <ul>
  <li><strong>++$x</strong> 前增量 - <code>++$x</code> - 將 $x 增加 1，然後返回 $x</li>
  <li><strong>$x++</strong> 後增量 - <code>$x++</code> - 返回 $x，然後將 $x 增加 1</li>
  <li><strong>--$x</strong> 前減量 - <code>--$x</code> - 將 $x 減少 1，然後返回 $x</li>
  <li><strong>$x--</strong> 後減量 - <code>$x--</code> - 返回 $x，然後將 $x 減少 1</li>
</ul>

<h1> PHP Logical Operators </h1>
    <p>PHP 邏輯運算子用於組合條件語句。</p>
    <ul>
  <li><strong>and</strong> 與 - <code>$x and $y</code> - 如果 $x 和 $y 都為真，則返回真</li>
  <li><strong>or</strong> 或 - <code>$x or $y</code> - 如果 $x 或 $y 中任意一個為真，則返回真</li>
  <li><strong>xor</strong> 異或 - <code>$x xor $y</code> - 如果 $x 或 $y 中任意一個為真，但不能兩者都為真，則返回真</li>
  <li><strong>&&</strong> 與 - <code>$x && $y</code> - 如果 $x 和 $y 都為真，則返回真</li>
  <li><strong>||</strong> 或 - <code>$x || $y</code> - 如果 $x 或 $y 中任意一個為真，則返回真</li>
  <li><strong>!</strong> 非 - <code>!$x</code> - 如果 $x 不為真，則返回真</li>
</ul>
<h1> PHP String Operators </h1>
    <p>PHP 有兩個專為字串設計的運算子。</p>
    <ul>
  <li><strong>.</strong> 連接 - <code>$txt1 . $txt2</code> - 將 $txt1 和 $txt2 連接在一起</li>
  <li><strong>.=</strong> 連接賦值 - <code>$txt1 .= $txt2</code> - 將 $txt2 附加到 $txt1 的末尾</li>
</ul>
<h1> PHP Array Operators </h1>
    <p>PHP 陣列運算子用於比較陣列。</p>
    <ul>
  <li><strong>+</strong> 聯合 - <code>$x + $y</code> - $x 和 $y 的聯合</li>
  <li><strong>==</strong> 等於 - <code>$x == $y</code> - 如果 $x 和 $y 具有相同的鍵/值對，則返回 true</li>
  <li><strong>===</strong> 全等於 - <code>$x === $y</code> - 如果 $x 和 $y 在相同的順序中具有相同的鍵/值對且類型相同，則返回 true</li>
  <li><strong>!=</strong> 不等於 - <code>$x != $y</code> - 如果 $x 不等於 $y，則返回 true</li>
  <li><strong><></strong> 不等於 - <code>$x <> $y</code> - 如果 $x 不等於 $y，則返回 true</li>
  <li><strong>!==</strong> 非全等於 - <code>$x !== $y</code> - 如果 $x 不全等於 $y，則返回 true</li>
</ul>

<h1>PHP Conditional Assignment Operators</h1>
    <p>PHP 條件賦值運算符</p>
    <ul>
  <li><strong>+</strong> 聯合 - <code>$x + $y</code> - $x 和 $y 的聯合</li>
  <li><strong>==</strong> 等於 - <code>$x == $y</code> - 如果 $x 和 $y 具有相同的鍵/值對，則返回 true</li>
  <li><strong>===</strong> 全等於 - <code>$x === $y</code> - 如果 $x 和 $y 在相同的順序中具有相同的鍵/值對且類型相同，則返回 true</li>
  <li><strong>!=</strong> 不等於 - <code>$x != $y</code> - 如果 $x 不等於 $y，則返回 true</li>
  <li><strong><></strong> 不等於 - <code>$x <> $y</code> - 如果 $x 不等於 $y，則返回 true</li>
  <li><strong>!==</strong> 非全等於 - <code>$x !== $y</code> - 如果 $x 不全等於 $y，則返回 true</li>
</ul>
    <?php



    ?>
</body>

</html>