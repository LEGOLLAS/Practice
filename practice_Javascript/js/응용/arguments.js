//arguments 다루기
function boolean(){
  var value = prompt('message');
  for(var i = 0; i<arguments.length; i++){
    value += arguments[i];
  }
  return value;
}
alert(boolean(0,1,2,3));
