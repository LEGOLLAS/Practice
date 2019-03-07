function sum(){
  var _sum = 0;
  for(var i =0; i<arguments.length; i++){
    document.write(i + ':' + arguments[i] + '</br>');
    _sum += arguments[i];
  }
  return '총 합계는 : ' + _sum;
}
document.write(sum(1,2,3,4));
