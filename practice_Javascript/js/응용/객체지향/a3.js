//this 함수내에서 함수 호출 맥락(상황에 따라 달라진다.)

function func(){
  if(window === this){
    document.write("window 는 this랑 같다." +'</br>');
  }
}
func();
//this는 함수 func를 가진 전역객체 window를 의미한다


//생성자 호출하기
var funcThis = null;

function Func(){
  //var여부를 살펴봐라 없으면 전역변수를 사용하였다.
  //있으면 지역변수를 사용할 수 있다.
    funcThis = this;
}
//this는 window를 가리킨다.
var o1 = Func();
if(funcThis === window){
    document.write('window <br />');
}
//생성자로 호출하면 this 는 생성된 객체가 된다
var o2 = new Func();
if(funcThis === o2){
    document.write('o2 <br />');
}
