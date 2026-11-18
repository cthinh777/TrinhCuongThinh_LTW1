<?php
    $name = "Trinh Cuong Thinh";
    $ngsinh = "01/08/2007";
    $mssv = "2125110211";
echo "Ho ten: " . $name . "<br>";
echo "ngay sinh".$ngsinh."<br>";
echo "ma so sinh vien:".$mssv;
define("HOST","localhost");
define("DATABASE","ql_sinhvien");
define("USERNAME","root");
define("PASSWORD"," ");
echo "thong tin ket noi csdl:<br>";
echo "HOST:" . HOST ."<br>";
echo "DATABASE:" . DATABASE . "<br>";
echo "USERNAME:" . USERNAME . "<br>";
echo "PASSWORD:" . PASSWORD . "<br><hr>";

$thongbao = "chao $name";
$thonbaodon = 'chao $name';
echo "dau nhay kep: $thongbao<br>";
echo "dau nhay don: $thonbaodon<br><hr>";

?>