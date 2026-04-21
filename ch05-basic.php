<!DOCTYPE html>
<html lang="utf-8">

<head>
  <meta charset="UTF-8">
  <title>ch04-basic</title>

</head>
<body>
<h1>while / do…while練習</br>
<?php 
$score=43;
echo "成績為:" . $score . "分 <br>";
$count=0; //計算迴圈次數
while($score<60){
    $score=$score+10;
    $count=$count+1;
}

echo "登錄成績為:" .$score . "分 <br>";
echo "迴圈執行次數:" . $count . "次 <br>";
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</h1>


<h1>foreach練習</br></h1>
<?php 
$score=[60,22,72,10,80];

foreach($score as $idx => $val){
    echo '第' . ($idx+1) . '位同學的成績為' . $val . '<br>';
}

for($i=0;$i<count($score);$i=$i+1){

    echo '第' . ($i+1) . '位同學的成績為' . $score[$i] . '<br>';

}

?>

</body>
</html>