<!DOCTYPE>
<?php
include 'db_conn.php';

$sql = "SELECT num, title, name FROM board ORDER BY num";

// MySQL 데이터베이스 연결
$mysqli = new mysqli($host, $user, $password, $db);
 
// 연결 오류 발생 시 스크립트 종료
if ($mysqli->connect_errno) {
    die('Connect Error: '.$mysqli->connect_error);
}

echo 'test'. '<br/>';

// 쿼리문 전송
if ($result = $mysqli->query($sql)) {
    // 레코드 출력
    while ($row = $result->fetch_object()) {
        echo $row->name.' / '.$row->title.'<br />';
    }
     
    // 메모리 정리
    $result->free();
}
 
// 접속 종료
$mysqli->close();


?>
