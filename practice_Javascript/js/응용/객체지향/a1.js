function person(){}
var p = new person();
p.name = 'hong';
p.introduce = function(){
  return 'my name is ' + this.name;
}
document.write(p.introduce());
