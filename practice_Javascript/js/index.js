var aaa = {
  'list' : {'qqq' : 10, 'www' : 20, 'eee' : 30},
  'show' : function(){
    for(var name in this.list){
      document.write(name, this.list[name] + '</br>');
    }
  }
}
aaa.show();
//this 는 약속된 변수,  함수가 속해있는 객체를 가리키는 변수

function welcome(){
  return 'Hello world';
}
document.write(welcome() + '</br>');

// 전역변수 var를 해도 되고 안해도 된다. 지역변수는 무조건  var를 넣자
jjj = 'sdsdsd';
function fff(){
  var jjj = 'wwewewe';
  document.write('함수안'+jjj + '</br>');
}
fff();
document.write('함수밖' +jjj + '</br>');

//전역변수 사용법, 익명함수 사용법
(function(){
var mapp = {};
mapp.calculater = {
  'left' : null,
  'right' : null
}
mapp.coordinate = {
  'left' : null,
  'right' : null
}
mapp.calculater.left = 10;
mapp.calculater.right = 20;

function sum(){
  return mapp.calculater.left + mapp.calculater.right;
}
document.write(sum() + '</br>');
}())

//자바스크립트에서 지역변수의 유효범위
for(i=0; i<=5; i++){
  var name = 'going';
}
document.write(name + '</br>');

//정적 유요범위
var i = 10;
function a(){
  var i = 5;
  b();
}
function b(){
  //변수를 호출할 때에는 함수내에 지역변수를 먼저 보고 없으면 정적 유효범위에 따라 밖에 전역변수를 찾는다.
  var i =20;
  document.write(i + '</br>');
}
a();
