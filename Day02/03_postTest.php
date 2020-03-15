<?php
// 한글받기 위한 설정값 사용
//html에서 name속성에 썼던 값들을 배열안에 적용(숫자가 아닌 문자로)
header('Content-Type:text/html; charset=utf-8');
$name = $_POST['name'];
$pw= $_POST['pw'];
$gender = $_POST['rg1'];
$msg= $_POST['msg'];
$brand= $_POST['sel'];

//textArea에서 입력된 값 중 줄바꿈문자(\n)을 브라우져에 출력하면 한줄로 보여지므로
// \n을 <br>로 변경해줘야함
// \n-><br>로 변경 위치는 $msg에 
$msg=nl2br($msg);

echo "$name <br>"; 
echo "$pw <br>";
echo "$gender <br>";

//브라우져에서는 \n을 못 알아들음, 
//msg에는 robin\nNiceto로 함
echo "$msg <br>";
echo "$brand <br>";

//체크박스에 선택된 값은 여러개일수 있기에 배열로 받아짐
//html에서 배열로 쓴 []문자는 제외한다 
$fruits = $_POST['fruits'];  //대입된 $fruits벼누는 배열임. 
//배열의 길이를 구해주는 함수
$len = count($fruits);

for($i=0; $i<$len; $i++){
    echo "$fruits[$i]";
};




?>