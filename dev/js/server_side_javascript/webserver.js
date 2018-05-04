const http = require('http');//모듈을 사용하기 위해서는 require 함수를 사용한다. 
//const 자바 스크립트변수 한번 모듈을 불러오면 바뀔 이유가 없기때문에 상수변수를 정의할때는 const를 사용한다. , http변수에 http모듈을 담았다.

const hostname = '127.0.0.1'; //hostname = ip 주소
const port = 3000;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello World\n');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});

//웹서버가 되는 코드들
