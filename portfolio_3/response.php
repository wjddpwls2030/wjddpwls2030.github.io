<?php
$servername = 'localhost';
$username   = 'dpwls3226';
$password   = 'wjd11042030^^';
$dbname     = 'dpwls3226';

$conn = mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($conn,'utf8');

if(!$conn){
    die('DATABASE 접속 실패');
}
//데이터 베이스 헤더문()
//서버이름(localhost), 사용자이름, 비밀번호, 데이터베이스 이름 설정

//폼 정보를 변수설정 >> 기억
$email = $_POST['email'];
$code  = $_POST['code'];

//데이터베이스에 저장(입력)
//sql insert into $email

//INTO : INSERT INPUT TABLE 이동
$sql = "insert into email_table (email) value ('$email')";
$result = mysqli_query($conn,$sql);

//서버(Server)가 클라이언트에 응답
//연결할때는 . 를 써서 연결
echo '<p>축하합니다. 메일 리스트에 저장되었습니다.</p>'.$email.'<br>'.$code;

mysqli_close($conn);
?>