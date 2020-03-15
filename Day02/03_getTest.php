<?php
// $_ 슈퍼전역변수
// php는 배열의 구분자는 이름으로 구별  
// php을 위한 컴파일러가 없으면 브라우져는 그냥 글을 보여줌
// dothome은 php를 해석함


$name=$_GET['name'];
$msg = $_GET['msg'];

//변수의 값을 화면에 보여주기
//php 출력은 브라우져의 영향을 받음 그래서 html문서를 php에 사용한다.

echo "<h2>$name,      $msg</h2>"

?>