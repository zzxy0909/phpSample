<!DOCTYPE>
<?php
include 'db_conn.php';

$sql = "SELECT num, title, name FROM board ORDER BY num";

// MySQL �����ͺ��̽� ����
$mysqli = new mysqli($host, $user, $password, $db);
 
// ���� ���� �߻� �� ��ũ��Ʈ ����
if ($mysqli->connect_errno) {
    die('Connect Error: '.$mysqli->connect_error);
}

echo 'test'. '<br/>';

// ������ ����
if ($result = $mysqli->query($sql)) {
    // ���ڵ� ���
    while ($row = $result->fetch_object()) {
        echo $row->name.' / '.$row->title.'<br />';
    }
     
    // �޸� ����
    $result->free();
}
 
// ���� ����
$mysqli->close();


?>
