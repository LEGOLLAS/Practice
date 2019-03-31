//전역객체 활용하기
function func(){
  alert('hello');
}
func();
window.func();// window는 객체, func()은 메소드


var a = {'func' : function(){
  alert('wdwdwdwdw');
}}
a.func();
window.a.func();
