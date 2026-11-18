<?php
    $name = "Trịnh Cường Thịnh";
    $ngsinh = "01/08/2007";
    $mssv = "2125110211";
echo "họ tên: " . $name . "<br>";
echo "ngày sinh".$ngsinh."<br>";
echo "mã số sinh viên:".$mssv;
define("HOST","localhost");
define("DATABASE","ql_sinhvien");
define("USERNAME","root");
define("PASSWORD"," ");
echo "thông tin kết nối csdl:<br>";
echo "HOST:" . HOST ."<br>";
echo "DATABASE:" . DATABASE . "<br>";
echo "USERNAME:" . USERNAME . "<br>";
echo "PASSWORD:" . PASSWORD . "<br><hr>";

$thongbao = "chao $name";
$thonbaodon = 'chao $name';
echo "dấu nháy kép: $thongbao<br>";
echo "dấu nháy đơn: $thonbaodon<br><hr>";

?>