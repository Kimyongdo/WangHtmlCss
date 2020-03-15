var n =0;
// while(true){
//     n++
//     //document.getElementById('hh').innerHTML=n;
//     //worker에서는 UI변경 못함. 메인 스레드만 볼 수 있음.

//     //worker사용자에게 출력하고자 하는 값을 전송
//     postMessage(n);

// }
function fff(){
    n++;
    postMessage(n);
    setTimeout(fff,500); //0.5초후에 fff()함수를 호출하라!
}

fff();

//위처럼 반복을 너무 빨리 돌려버리면 그려낼 시간이 없어서 정상동작이 안됨.
