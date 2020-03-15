<?php
$file= $_FILES['aaa'];
//대입된 $file은 파일의 여러정보를 가지기 위해 배열로 된 변수임 
//$file에서 배열변수에서 원하는 값들 얻어오기

//name type size는 지정된 것. 
$srcName=$file['name']; //원본파일명.확장자
$fileType=$file['type']; //전송된 파일의 확장자[MIME타입 : image/png]
$fileSize=$file['size']; //전송된 파일의 사이즈

//업로드된 파일이 잠시 보관되는 임시저장소의 경로가 있다.
//임시저장소-옮겨서 영구저장. 바로 올리지 않기에 여기서 다시 한번 옮겨야한다

$tmpName = $file['tmp_name'];

echo "$srcName <br>";
echo "$fileType <br>";
echo "$fileSize <br>";
echo "$tmpName <br>";

// 임시저장소 파일은 곧 사라지기에
//서버에 온전히 보관하고 싶다면 임시저장소($tmpName)의
//파일을 원하는 목적지로 이동시켜야함

//원하는 목적지의 경로와 파일명.확장자
//이름이 겹치면 안되기에 보통 날짜를 파일명으로 활용
$dateName = date('YmdHis').".$srcName"; //20191204144130 //결합연산자는 .
$dstName =  $dateName;//현재폴더안에 aaa.jpg라는 이름으로 저장하겠다. 
//임시 저장소 ->목적지 위치로 
// move_uploaded_file <- 함수
//임시폴더에서 목적지로 옮겨주세요 
move_uploaded_file($tmpName,$dstName)
?>