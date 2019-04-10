//상속
function person(name){
  this.name = name;
  this.introduce = function(){
    return 'My name is ' + this.name;
  }
}
var p1 = new person('hong ji hyuk');
document.write(p1.introduce() + '</br>');


//변화주기
function person2(name){
  this.name = name;
}

person2.prototype.introduce = function(){
  return 'My name is ' + this.name;
}

var p2 = new person2('kim im jik');
document.write(p2.introduce() + '</br>');

//자바스크립트 상속 구현하기
function Person(name){
    this.name = name;
}
Person.prototype.name=null;
Person.prototype.introduce = function(){
    return 'My name is '+this.name;
}

//생성자 생성
function Programmer(name){
    this.name = name;
}

//person이라는 생성자 함수에서 prototype프로터피를 가지고 있는지 확인하고 맞으면 값을 가지게 한다.
Programmer.prototype = new Person();

var p1 = new Programmer('egoing');
document.write(p1.introduce()+"<br />");


//상속사용방법 새로운 기능추가하기
function Person(name){
    this.name = name;
}
Person.prototype.name=null;
Person.prototype.introduce = function(){
    return 'My name is '+this.name;
}

function Programmer(name){
    this.name = name;
}
Programmer.prototype = new Person();
Programmer.prototype.coding = function(){
    return "hello world";
}

function Designer(name){
    this.name = name;
}
Designer.prototype = new Person();
Designer.prototype.design = function(){
    return "beautiful";
}

var p1 = new Programmer('egoing');
document.write(p1.introduce()+"<br />");
document.write(p1.coding()+"<br />");

var p2 = new designer('leeee');
document.write(p2.introduce()+"<br />");
document.write(p2.design()+"<br />");
