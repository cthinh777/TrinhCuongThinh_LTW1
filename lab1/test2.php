<?php
$a = 10;
$b = 3;

echo "số thứ nhất: $a <br>";
echo "số thứ hai: $b <br>";

echo "phép cộng: " . ($a + $b) . "<br>";
echo "phép trừ: " . ($a - $b) . "<br>";
echo "phép nhân: " . ($a * $b) . "<br>";
echo "phép chia: " . ($a / $b) . "<br>";
echo "chia lấy dư: " . ($a % $b) . "<br>";
////2
$a = 111;
$b = "111";

echo "giá trị a: ";
var_dump($a);

echo "Giá trị b: ";
var_dump($b);

echo "<br>so sánh 2 biến:<br>";

var_dump($a == $b);
echo " - toán tử == <br>";

var_dump($a === $b);
echo " - toán tử === <br>";

var_dump($a != $b);
echo " - toán tử != <br>";

var_dump($a <> $b);
echo " - toán tử <> <br>";

var_dump($a !== $b);
echo " - toán tử !== <br>";

///3
$x = 5;

echo "giá trị ban đầu: $x <br>";

// tang truoc
echo "giá trị khi tăng trước: " . (++$x) . "<br>";
echo "giá trị sau tăng trước: $x <br>";

$x = 5;

// tang sau
echo "<br>giá trị ban đầu: $x <br>";
echo "giá trị khi tăng sau: " . ($x++) . "<br>";
echo "giá trị sau tăng sau: $x <br>";

//4
$chuoi1 = "hi";
$chuoi2 = "haha";

// Su dung toan tu .
$ketqua = $chuoi1 . " " . $chuoi2;

echo "kết quả dùng dấu chấm: $ketqua <br>";

// Su dung toan tu .=
$chuoi1 .= " " . $chuoi2;

echo "kết quả dùng dấu chấm bằng: $chuoi1 <br>";
///6
$chuoi = "Chào PHP";

// Chuyen thanh chu in hoa
echo "chuyển thành in hoa: " . strtoupper($chuoi) . "<br>";

// Chuyen thanh chu in thuong
echo "chuyển thành in thường: " . strtolower($chuoi) . "<br>";

// Thu voi chuoi tieng Viet co dau
$viet = "Xin Chào";

// Chuyen chuoi tieng Viet thanh chu in hoa
echo "chuyển chuỗi thành in hoa: " . mb_strtoupper($viet, "UTF-8") . "<br>";

// Chuyen chuoi tieng Viet thanh chu in thuong
echo "chuyển chuỗi thành in thường: " . mb_strtolower($viet, "UTF-8") . "<br>";
//7
$chuoi1 = "123 sdf";
$chuoi2 = "sdf 123";

// Ep kieu chuoi sang so nguyen
$so1 = (int)$chuoi1;
$so2 = (int)$chuoi2;

// Hien thi ket qua
echo "chuỗi 1 sau ép kiểu: ";
var_dump($so1);

echo "<br>chuỗi 2 sau ép kiểu: ";
var_dump($so2);
//8
$tuoi = 20;
$diem = 8.5;
$hoten = "Nguyen Van A";
$ketqua = true;

// Hien thi gia tri va kieu du lieu
echo "biến tuổi: ";
var_dump($tuoi);

echo "<br>biến điểm: ";
var_dump($diem);

echo "<br>biến họ tên: ";
var_dump($hoten);

echo "<br>biến kết quả: ";
var_dump($ketqua);
?>
