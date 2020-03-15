var date;

//워커 사용자가 w2.postMessage()로 보낸 데이터를 받는 콜백함수 입니다.

//onmessage발동
onmessage=function(event){
    data="받은 데이터는"+event.data;
    //잘 받았다는 것을 알려주기 위해 다시 데이터를 전송
    postMessage(data); 
}