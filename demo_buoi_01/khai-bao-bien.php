<?php /** @noinspection ALL */
// 1. Khai báo biến
// Cấu trúc khai báo biến:
// 3 phần" Ký tự $ | Tên biến | Giá trị của biến
// $email = "ledaian22@gmail.com";


// 2. Cách đặt tên biến
// $hovaten --> Không nên dùng
// $HoVaTen --> Không nên dùng (Tên biến không viết hoa chữ cái đầu)
// $ho_va_ten
// $hoVaTen

$hoVaTen = "Lê Đại An";
$soDienThoai = "0334920373";
$namSinh = 2002;
$hienThi = true;


// Hiển thị giá trị của biến ra màn hình
// 1. Dùng echo (Nếu in một biến bolean thì nó sẽ in ra 1 nếu là true và không in ra gì nếu là false)
echo $hoVaTen;
echo "<br>";
echo $soDienThoai;
echo "<br>";
echo $namSinh;
echo "<br>";

//  2. Dùng var_dump (Dùng để debug ngoài việc hiển thị giá trị của biến ra màn hình còn hiển thị kiểu dữ liệu của biến)
var_dump($hoVaTen);
echo "<br>";
var_dump($soDienThoai);
