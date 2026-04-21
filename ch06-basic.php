<!DOCTYPE html>
<html lang="utf-8">

<head>
  <meta charset="UTF-8">
  <title>ch04-basic</title>

</head>
<body>
<h1>
巢狀流程控制-流程結構練習</br>
分配成績等級</br>
<ul>
<li>給定一個成績數字，根據成績所在的區間，給定等級</li>
<li>0 ~ 59 => E</li>
<li>60 ~ 69 => D</li>
<li>70 ~ 79 => C</li>
<li>80 ~ 89 => B</li>
<li>90 ~ 100 => A</li>
<li>100 => 滿分YA！！</li>
</ul>
<?php
$score=110;
$level='';

if($score>=0 && $score<60){
    $level="E";
}else if($score>=60 && $score<70){
    $level="D";
}else if($score>=70 && $score<80){
    $level="C";
}else if($score>=80 && $score<90){
    $level="B";
}else if($score>=90 && $score<100){
    $level="A";
}else {
    $level="成績輸入錯誤";
}

echo "我的成績是 $score 分,其等級：" . $level;

// 補充：滿分時額外輸出文字
if($score == 100){
    echo " 滿分YA！！";
}
?>
</h1>





<h1>簡化寫法_巢狀流程控制-流程結構練習</br>
<?php
$score=72;
$level='';

if($score>=0 || $score >100) {
    $level="成績輸入錯誤";
} 
else if($score<60){
    $level="E";
}else if($score<70){
    $level="D";
}else if($score<80){
    $level="C";
}else if($score<90){
    $level="B";
}else if($score<100){
    $level="A";
}else {
    $level="成績輸入錯誤";
}

echo "我的成績是 $score 分,其等級：" . $level;

// 補充：滿分時額外輸出文字
//if($score == 100){
//    echo " 滿分YA！！";
//}
?>
</h1>
</body>
</html>