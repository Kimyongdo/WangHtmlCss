<?php

    header('Content-Type: text/html; charset=UTF-8');
   $name=$_GET['name'];
   $email=$_GET['email']; 

   //원래는 받은 데이터 db저장. 시간상 패스

   echo "$name $email 이 등록되었습니다.";
    //그 전에 보여진 05_noAjax.html문서가 사라져버리기 때문에 
    //입력폼 모양 페이지가 없어져버리고 echo된 문자만 보임. 

    //이게 싫다면
    //echo시킨 내용이 html이기 때문에 이 문서를 브라우저에서 해석함
    //이렇게 나온 것 get방식으로 받았기에 name=111, email 주소가 보인다. 
    echo (" 
    <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>

    <title>Document</title>
</head>
<body>
    <h3>회원 가입 화면</h3>

    <form action='05_noAjax.php' method='GET'>
        <input type='text' name='name' value='$name'>
        <input type='text' name='email'value='$email'>
        <input type='submit'>
        <!-- 제출을 누른 순간 php파일로 이동.  -->
    </form>

    <hr>
    <textarea id='textarea' cols='30' rows='3'>$name $email 이 등록되었습니다.</textarea>

</body>
</html>
    ");
    
?>