<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>ch04-basic</title>

</head>
<body>
<h1>for loop練習</br></h1>
<?php
//1至9 乘與10
for($i=1;$i<=10;$i=$i+1){
    echo "$i =>";
    echo $i * 10 . "<br>";
} 
echo $i;
?>

<h1>由1加到10的總和</br></h1>
<?php
// 由1加到10的總和
for($i=0 ; $i<10 ; $i++){
    echo $i*10;    
 }
echo $i;
?>

<?php
//顯示基數或偶數 1加到10的總和
for($i=0;$i<=10;$i=$i+1){
    echo "$i =>";
    echo $i * 2 +1 . "<br>";
    if(($i*2+1)>=10){
        break;
    }
} 
echo $i

?>

</body>
</html>
