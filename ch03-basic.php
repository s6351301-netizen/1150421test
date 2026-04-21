<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>ch02-basic</title>

</head>
<body>
    <h1>
       <p>方法一,全都使用</p></br>
<?php
$level="B";
switch($level){
    case "A":
        echo "表現優良，請繼續保持";
    break;
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
        echo "是否無心學業?";
}
?>

</br><p>方法二,將A與B都顯示A結果會連著B,即將A下面的break註解</p></br>
<?php
$level="B";
switch($level){
    case "A":
        echo "表現優良，請繼續保持";
   // break;
    case "B":
        echo "值得肯定，還有進步空間";
     // break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
        echo "是否無心學業?";
}
?>
    </h1>
</body>
</html>
