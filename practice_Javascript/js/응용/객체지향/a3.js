//this 함수내에서 함수 호출 맥락(상황에 따라 달라진다.)

function func(){
  if(window === this){
    document.write("window 는 this랑 같다.");
  }
}
func();
//this는 함수 func를 가진 전역객체 window를 의미한다
