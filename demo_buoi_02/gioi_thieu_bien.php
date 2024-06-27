<?php
echo "1. Giới thiệu biến <hr/>";

// String
echo '1. Biến string <br/>';
// Khai báo biến string
$hoVaTen = 'Lê Đại An';
$tenTruong = 'Cao đẳng FPT';

// In ra màn hình (var_dump dùng để in ra kiểu dữ liệu của biến)
var_dump($hoVaTen);
echo '<br/>';
var_dump($tenTruong);


// Number
echo '<br/>';
echo '<br/>';

echo "2. Biến number <br/>";
// Khai báo biến number
$namSinh = 2002;
$diemCuoiKy = 9.5;
// In ra màn hình (var_dump dùng để in ra kiểu dữ liệu của biến)
var_dump($namSinh);
echo '<br/>';
var_dump($diemCuoiKy);

// Hằng số (Dùng khi khai báo giá trị không thay đổi trong suốt quá trình chạy chương trình)
echo '<br/>';
echo '<br/>';

echo '3. Hằng số (Lưu ý: Hằng số không thể thay đổi giá trị) <br/>';
// Khai báo (Tên hằng số viết hoa)
define('SERVER_PORT', 8080);
// In ra màn hình (Hằng số không cần dấu $)
var_dump(SERVER_PORT);
