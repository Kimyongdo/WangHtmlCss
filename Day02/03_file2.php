<?php
//file을 하나로만 보내면
//$file은 보통 'name' 'size' 'type' 'tmp_name' 'error'로 구성됨.
//여러 파일을 선택하면 각 종류에 들어감 100개면 100개가 name에 size에 type에 들어감 다 100개씩



$files = $_FILES['aaa'];
//files라는 2차원배열의 사이즈
//count는 php에서 길이값 구함
$num = count($files); //출력 총 5칸을 차지 //자바와 달리 크기를 가져오는게 php는 다르다 주의할것. 
$num2 = count($files['name']); //출력 :100(100개를 넣었다면)

//즉, 전송된 파일의 개수를 알고싶다면.. $files를 count하면 안되고
//$files['name']의 count()를 해야함

//전송된 파일의 개수 
$fileNum = count($files['name']);
for($i=0; $i<$fileNum; $i++){
    $srcName = $files['name'][$i]; //원본파일명 
    $tmpName = $files['tmp_name'][$i];
    $fileType = $files['type'][$i];
    $fileSize= $files['size'][$i];
}

/////////////////////////////////////오류  다섯개 안나옴 확인 바라마~~~?///////////////
echo "$srcName <br>";
echo "$fileType <br>";
echo "$fileSize <br>";
echo "$tmpName <br>";


$dstName  = date('YmdHis').".$srcName";
move_uploaded_file($tmpName, $dstName);


?>