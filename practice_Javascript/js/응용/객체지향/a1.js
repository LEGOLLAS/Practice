function person(name){
  this.name = name;
  this.introduce = function(){
    return 'My name is ' + this.name;
  }
}
var p1 = new person('hong');
document.write(p1.introduce()+ '</br>');

var p2 = new person('kim');
document.write(p2.introduce() + '</br>');
