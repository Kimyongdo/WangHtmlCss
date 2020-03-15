function show(){
    document.write("show!!!");
}

//show() 함수를 다른 js문서에서도 사용할 수 있도록 추출
export default show; //대표적인 것은 default하나만. 

export function show2(){
     document.write('show!!!!!!!!!');
}

// export default show2; //default는 하나의 문서에 1개만 사용가능함. 

export const num =100;
export let age="변수입니다."
