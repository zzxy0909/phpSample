<?php
 
 
    $save_dir = ".";
 
// ������ HTTP POST ����� ���� ���������� ���ε�Ǿ����� Ȯ���Ѵ�.
if(is_uploaded_file($_FILES["file"]["tmp_name"])) {
 
echo "Upload File Name : " . $_FILES["file"]["name"] . "<br>"; 
echo "Upload File Size(Bytes) : " . $_FILES["file"]["size"] . "<br>";
echo "Upload File MIME Type : " . $_FILES["file"]["type"] . "<br>";
echo "Temp Data name : " . $_FILES["file"]["tmp_name"] . "<br>";
// ������ ������ ���丮 �� ���ϸ�
$dest = $save_dir . "/" . $_FILES["file"]["name"];
 
// ������ ������ ���丮�� ���� 
if(!move_uploaded_file($_FILES["file"]["tmp_name"], $dest)) {
die("Save Error!!!.");
}
} else {
echo "No File.";
}
 
 
?>
