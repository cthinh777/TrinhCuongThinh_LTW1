<?php
$menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];
$subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
$students = [
    [
        "id" => "SV001",
        "name" => "Nguyễn Văn An",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV002",
        "name" => "Trần Thị Bình",
        "gender" => "Nữ",
        "class" => "CNTT2"
    ],
    [
        "id" => "SV003",
        "name" => "Lê Văn Cường",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV004",
        "name" => "Phạm Thị Dung",
        "gender" => "Nữ",
        "class" => "CNTT3"
    ],
];
$khoa = [
    "Công nghệ thông tin",
    "Quản trị kinh doanh",
    "Kế toán",
    "Ngôn ngữ Anh",
    "Thiết kế đồ họa"
];

$lop = [
    "CNTT01",
    "CNTT02",
    "CNTT03",
    "QTKD01",
    "KT01"
];

$gioitinh = [
    "Nam",
    "Nữ",
    "Khác"
];

$sothich = [
    "Đọc sách",
    "Nghe nhạc",
    "Du lịch",
    "Chơi thể thao",
    "Xem phim",
    "Lập trình"
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<nav>
    <ul>
        <?php foreach ($menus as $menu) { ?>
            <li>
                <a href="#"><?= $menu ?></a>
            </li>
        <?php } ?>
    </ul>
</nav>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    nav {
        background: rgb(4, 40, 94);
    }

    nav a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        display: block;
        padding: 15px;
        text-align: center;
    }

    nav ul {
        list-style: none;
        display: flex;
    }

    nav ul li:hover: {
        background: #084298;
    }

    nav li {
        flex: 1;
    }

    body {
        padding: 20px;
    }

    .s1 {
        max-width: 500px;
        margin: auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
    }

    .s1 h3 {
        text-align: center;
        color: #0d6efd;
        margin-bottom: 20px;
    }

    .s1 ul {
        list-style: none;
    }

    .s1 li {
        padding: 12px;
        margin-bottom: 10px;
        background: #e7f1ff;
        border-left: 5px solid #0d6efd;
        border-radius: 5px;
        transition: .3s;
    }

    .s1 li:hover {
        background: #cfe2ff;
        transform: translateX(5px);
    }
</style>
<section class="s1">
    <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
    <ul>
        <!-- Hiển thị dữ liệu -->
        <?php
        foreach ($subjects as $subject) {
            echo "<li>$subject</li>";
        }
        ?>
    </ul>
</section>
<section class="s2">
    <h3>Danh sách sinh viên </h3>
    <table>
        <tr>
            <th>STT</th>
            <th>Mã sinh viên</th>
            <th>Họ và tên</th>
            <th>Giới tính</th>
            <th>Lớp</th>
        </tr>
        <?php foreach ($students as $index => $student) { ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $student["id"] ?></td>
                <td><?= $student["name"] ?></td>
                <td><?= $student["gender"] ?></td>
                <td><?= $student["class"] ?></td>
            </tr>
        <?php } ?>

    </table>
</section>
<style>
.s2 {
    width: 100%;
    max-width: 100%;
    min-width: 0;
    box-sizing: border-box;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    overflow-x: auto;
}

.s2 h3 {
    margin: 0 0 20px 0;
    font-size: 18px;
    font-weight: bold;
    color: #000;
}

.s2 table {
    width: 100%;
    border-collapse: collapse;
    table-layout: auto;
}

.s2 th {
    background-color: #0860df;
    color: white;
    padding: 12px 10px;
    text-align: center;
    border: 3px solid white;
    white-space: nowrap;
}

.s2 td {
    padding: 12px 10px;
    text-align: left;
    border: 3px solid white;
    white-space: nowrap;
}

.s2 tr:hover td {
    background-color: #f2f6ff;
}
</style>
<section class="s3">

    <h2>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h2>

    <form action="" method="POST">

        <!-- Họ và tên -->
        <div class="form-group">
            <label>Họ và tên:</label>
            <input type="text"
                   name="hoten"
                   placeholder="Nhập họ và tên"
                   required>
        </div>

        <!-- Chọn khoa -->
        <div class="form-group">
            <label>Khoa:</label>
            <select name="khoa" required>
                <option value="">-- Chọn khoa --</option>

                <?php
                foreach ($khoa as $item) {
                    echo "<option value='$item'>$item</option>";
                }
                ?>

            </select>
        </div>

        <!-- Chọn lớp -->
        <div class="form-group">
            <label>Lớp:</label>
            <select name="lop" required>
                <option value="">-- Chọn lớp --</option>

                <?php
                foreach ($lop as $item) {
                    echo "<option value='$item'>$item</option>";
                }
                ?>

            </select>
        </div>

        <!-- Giới tính -->
        <div class="form-group">
            <label>Giới tính:</label>

            <div class="radio-group">
                <?php
                foreach ($gioitinh as $item) {
                    echo "
                    <label>
                        <input type='radio'
                               name='gioitinh'
                               value='$item'
                               required>
                        $item
                    </label>
                    ";
                }
                ?>
            </div>
        </div>

        <!-- Sở thích -->
        <div class="form-group">
            <label>Sở thích:</label>

            <div class="checkbox-group">
                <?php
                foreach ($sothich as $item) {
                    echo "
                    <label>
                        <input type='checkbox'
                               name='sothich[]'
                               value='$item'>
                        $item
                    </label>
                    ";
                }
                ?>
            </div>
        </div>

        <!-- Nút chức năng -->
        <div class="buttons">
            <button type="submit" class="btn-submit">
                Đăng ký
            </button>

            <button type="reset" class="btn-reset">
                Làm mới
            </button>
        </div>

    </form>

</body>

</html>