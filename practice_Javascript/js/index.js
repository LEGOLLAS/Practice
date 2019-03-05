// var aaa = {
//   'list' : {'qqq' : 10, 'www' : 20, 'eee' : 30},
//   'show' : function(){
//     for(var name in this.list){
//       console.log(name, this.list[name]);
//     }
//   }
// }
// aaa.show();
//this 는 약속된 변수,  함수가 속해있는 객체를 가리키는 변수

//
// function welcome(){
//   return 'Hello world';
// }
// alert(welcome());

//전역변수 var를 해도 되고 안해도 된다. 지역변수는 무조건  var를 넣자
// jjj = 'sdsdsd';
// function fff(){
//   var jjj = 'wwewewe';
//   alert('함수안'+jjj);
// }
// fff();
// alert('함수밖' +jjj);

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
document.write(sum());
}())
