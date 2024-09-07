<!DOCTYPE html>
<html>

<head>
    <h1>PHP if Statements</h1>
    <p>PHP if語句</p>
    <ul>
        <li><strong>if 語句</strong> - 如果一個條件為真則執行一些程式碼。</li>
        <li><strong>if...else 語句</strong> - 如果條件為真則執行一些程式碼，如果條件為假則執行另一個程式碼。</li>
        <li><strong>if...elseif...else 語句</strong> - 針對兩個以上的條件執行不同的程式碼。</li>
        <li><strong>switch 語句</strong> - 選擇要執行的多個程式碼區塊之一。</li>
    </ul>

    <?php
    $a = 5;
    if ($a > 3) {
        echo "Have a good day!";
    };

    echo "<hr>";
    if (5 > 3) {
        echo "Have a good day!";
    } else {
        echo "Have a nice day!";
    };

    echo "<hr>";
    $b = 5;
    if ($b == 5) {
        echo "b is equal to 5";
    } elseif ($b == 4) {
        echo "b is equal to 4";
    } else {
        echo "b is not equal to 5 or 4";
    };

    echo "<hr>";
    $c = "hello";
    if (is_string($c)) {
        echo "c is a string";
    } else {
        echo "c is not a string";
    };

    echo "<hr>";
    $d = 5;
    if (is_numeric($d)) {
        echo "d is a number";
    } else {
        echo "d is not a number";
    };

    echo "<hr>";

    ?>

    <h1>Comparison Operators</h1>
    <p>比較運算符:If語句通常包含比較兩個值的條件</p>
    <ul>
        <li><strong>==</strong> 相等 - 如果兩個值相等，則返回 true</li>
        <li><strong>===</strong> 全等 - 如果兩個值和數據類型相同，則返回 true</li>
        <li><strong>!=</strong> 不相等 - 如果兩個值不相等，則返回 true</li>
        <li><strong>
                <>
            </strong> 不相等 - 如果兩個值不相等，則返回 true</li>
        <li><strong>!==</strong> 不全等 - 如果值或數據類型不相同，則返回 true</li>
        <li><strong>></strong> 大於 - 如果第一個值大於第二個值，則返回 true</li>
        <li><strong>
                << /strong> 小於 - 如果第一個值小於第二個值，則返回 true</li>
        <li><strong>>=</strong> 大於或等於 - 如果第一個值大於或等於第二個值，則返回 true</li>
        <li><strong>
                <=< /strong> 小於或等於 - 如果第一個值小於或等於第二個值，則返回 true</li>
    </ul>

    <ul>
        <li><strong>and</strong> 並且 - 當兩個條件都為真時，返回 true</li>
        <li><strong>&&</strong> 並且 - 當兩個條件都為真時，返回 true</li>
        <li><strong>or</strong> 或者 - 當其中一個條件為真時，返回 true</li>
        <li><strong>||</strong> 或者 - 當其中一個條件為真時，返回 true</li>
        <li><strong>xor</strong> 異或 - 當其中一個條件為真，但不是兩個條件都為真時，返回 true</li>
        <li><strong>!</strong> 非 - 當條件不為真時，返回 true</li>
    </ul>


    <?php
    //檢查是否$t等於 14：
    $t = 14;
    if ($t == 14) {
        echo "t is equal to 14";
    }
    echo "<hr>";
    //檢查是否$a大於$b，且如果$a小於$c：

    $a = 10;
    $b = 5;
    $c = 15;
    if ($a > $b && $a < $c) {
        echo "a is greater than b and less than c";
    }
    echo "<hr>";
    //檢查是否$a為 2、3、4、5、6 或 7：

    $a = 2;
    if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
        echo "$a is a number between 2 and 7";
    }

    //if...else如果條件為真，則該語句執行一些程式碼；如果條件為假，則執行另一個程式碼。
    //輸出“祝你有美好的一天！”如果當前時間小於 20 點，則“祝您晚安！”否則：

    $time = 18;
    if ($time < 20) {
        echo "祝你有美好的一天！";
    } else {
        echo "祝您晚安！";
    }
    echo "<hr>";
    //此if...elseif...else語句針對兩個以上的條件執行不同的程式碼。
    //輸出“早安！”如果當前時間小於 10，則“祝你有美好的一天！”如果當前時間小於20。
    //如果當前時間介於10到20之間，則“午安！”：


    $time = 15;
    if ($time < 10) {
        echo "早安！";
    } elseif ($time < 20) {
        echo "祝你有美好的一天！";
    } else {
        echo "午安！";
    }
    echo "<hr>";
    //switch語句選擇要執行的多個程式碼區塊之一。
    //根據$day的值，選擇要執行的程式碼區塊：


    //PHP Shorthand if Statements
    //PHP的簡短if語句是一種簡化的if語句，它只需要一行來表示條件和程式碼。
    $a = 5;
    if ($a > 3) $b = "Hello";
    else $b = "Goodbye";
    echo $b;
    //if……else語句也可以寫在一行中，但文法有點不同。
    $a = 2;
    $b = $a > 3 ? "Hello" : "Goodbye";
    echo $b;
    echo "<hr>";
    //PHP的簡短if語句也可以用在switch語句中。
    $day = "Monday";
    switch ($day) {
        case "Monday":
            echo "今天是星期一";
            break;
        case "Tuesday":
            echo "今天是星期二";
            break;
        case "Wednesday":
            echo "今天是星期三";
            break;
        case "Thursday":
            echo "今天是星期四";
            break;
        case "Friday":
            echo "今天是星期五";
            break;
        case "Saturday":
            echo "今天是星期六";
            break;
        case "Sunday":
            echo "今天是星期日";
            break;
        default:
            echo "沒有這天";
            break;
    }
    echo "<hr>";
    //PHP的簡短if語句也可以用在while和for語句中。
    $i = 0;
    while ($i < 5) {
        $i++;
        if ($i == 3) continue;
        if ($i == 5) break;
        echo $i;
    }
    echo "<hr>";
    //PHP的簡短if語句也可以用在for語句中。
    $i = 0;
    for (; $i < 5;) {
        $i++;
        if ($i == 3) continue;
        if ($i == 5) break;
        echo $i;
    }
    echo "<hr>";
    //PHP的簡短if語句也可以用在function中。
    function myFunction($a, $b) {
        if ($a > $b) {
            return $a;
        } else {
            return $b;
        }
    }
    echo myFunction(5, 3); //輸出 5
    echo "<hr>";
    //PHP的簡短if語句也可以用在array中。
    $array = array(1, 2, 3, 4, 5);

//PHP Nested if Statement
//PHP的巢狀if語句是指在if語句中嵌套另一個if語句。
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
echo "<hr>";
//PHP switch Statement
//switch語句用於根據不同的條件執行不同的操作。
$favcolor = "blue";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo "<hr>";
//$favcolor是紅色的，所以執行 case "red" 中的程式碼區塊，但由於它沒有break語句，所以 case "blue" 中的程式碼區塊也會執行：
$favcolor = "white";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo "<hr>";    
//關鍵字default指定在沒有大小寫符合的情況下要執行的程式碼：
$d = 0;

switch ($d) {
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
    break;
  default:
    echo "Looking forward to the Weekend";
}

echo "<hr>";
//如果希望多個案例使用相同的程式碼區塊：
$d = 66;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}
echo "<hr>";
//PHP Loops
//PHP的迴圈用於遍歷集合或執行相同的程式碼多次。
//PHP有三種迴圈：for、while、do-while。
//The PHP while Loop
//PHP的while迴圈用於遍歷集合，直到指定的條件為假。
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}
echo "<hr>";
//The continue Statement
//PHP的continue語句用於跳過當前迴圈的一次迭代，並繼續下一次迭代。
$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}
echo "<hr>";
//Alternative Syntax
//PHP的while迴圈也可以用簡短的語法。
$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;
echo "<hr>";
//如果您希望while循環計數為 100，但每次只增加 10，則可以在每次迭代中將計數器增加 10，而不是 1：
$i = 0;
while ($i < 100):
  $i += 10;
  echo $i;
endwhile;
echo "<hr>";
//PHP do while Loop
//PHP的do-while迴圈用於遍歷集合，直到指定的條件為真。
$i = 1;
do {
  echo $i;
  $i++;
} while ($i < 6);
echo "<hr>";
//Set $i = 8, then print $i as long as $i is less than 6:
$i = 8;
do {
  echo $i;
  $i++;
} while ($i < 6);
echo "<hr>";
//$i如果為 3，則停止並跳到下一次迭代：Stop the loop when $i is 3:
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
echo "<hr>";




    ?>
    </body>

</html>