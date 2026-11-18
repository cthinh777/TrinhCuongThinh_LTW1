
<?php
echo "<h2>CÂU 3: CÁC HÀM XỬ LÝ CHUỖI TRONG PHP</h2>";
// 1. SỬ DỤNG HÀM trim()
echo "<h3>1. Sử dụng hàm trim()</h3>";

// Khai báo chuỗi có khoảng trắng ở đầu và cuối
$chuoi1 = "    Xin chao cac ban hoc PHP    ";

echo "Chuỗi ban đầu: [" . $chuoi1 . "]<br>";

// Sử dụng hàm trim() để xóa khoảng trắng
$ketqua1 = trim($chuoi1);

echo "Kết quả sau khi sử dụng trim(): [" . $ketqua1 . "]<br>";


// 2. SỬ DỤNG HÀM ltrim() VÀ rtrim()

echo "<h3>2. Sử dụng hàm ltrim() và rtrim()</h3>";

// Khai báo chuỗi có khoảng trắng ở đầu và cuối
$chuoi2 = "    Hoc lap trinh PHP    ";

echo "Chuỗi ban đầu: [" . $chuoi2 . "]<br>";

// Sử dụng ltrim() để xóa khoảng trắng bên trái
$ketqua2 = ltrim($chuoi2);

echo "Kết quả sau khi sử dụng ltrim(): [" . $ketqua2 . "]<br>";

// Sử dụng rtrim() để xóa khoảng trắng bên phải
$ketqua3 = rtrim($chuoi2);

echo "Kết quả sau khi sử dụng rtrim(): [" . $ketqua3 . "]<br>";
// 3. CẮT CHUỖI BẰNG HÀM substr()
echo "<h3>3. Cắt chuỗi bằng hàm substr()</h3>";

// Khai báo chuỗi có trên 30 ký tự
$chuoi3 = "Hoc lap trinh PHP co ban va nang cao";

// Hiển thị chuỗi ban đầu
echo "Chuỗi ban đầu: " . $chuoi3 . "<br>";

// Lấy 10 ký tự đầu tiên
$ketqua4 = substr($chuoi3, 0, 10);

echo "10 ký tự đầu tiên: " . $ketqua4 . "<br>";

// Lấy từ ký tự thứ 5 đến hết chuỗi
$ketqua5 = substr($chuoi3, 4);

echo "Từ ký tự thứ 5 đến hết chuỗi: " . $ketqua5 . "<br>";
// 4. THAY THẾ CHUỖI BẰNG str_replace()
echo "<h3>4. Thay thế chuỗi bằng hàm str_replace()</h3>";

// Khai báo chuỗi có trên 30 ký tự
$chuoi4 = "Toi dang hoc ngon ngu lap trinh PHP co ban";

// Hiển thị chuỗi ban đầu
echo "Chuỗi ban đầu: " . $chuoi4 . "<br>";

// Thay thế chuỗi "PHP" thành "Java"
$ketqua6 = str_replace("PHP", "Java", $chuoi4);

echo "Chuỗi sau khi thay thế: " . $ketqua6 . "<br>";

?>
