<?php
echo "1. Giới thiệu toán tử<hr/>";

// Khai báo hai biến cần thiết
$number_x = 10;
$number_y = 5;
$tong = $number_x + $number_y;
$hieu = $number_x - $number_y;

// In ra màn hình
var_dump($tong);
echo '<br/>';
echo '<br/>';

// Cách in dữ liệu ra màn hình kết hợp string và giá trị biến
// Cách 1: ()
echo "Tổng là Cách 1: $tong <br/>";
echo "Hiệu là Cách 1: $hieu <br/>";
echo '<br/>';

// Cách 2: (Nối chuỗi bằng dấu chấm)
echo 'Tổng là Cách 2: ' . $tong . '<br/>';
echo 'Hiệu là Cách 2: ' . $hieu . '<br/>';
echo "Tích là: " . ($number_x * $number_y) . "<br/>";
echo "Thương là: " . ($number_x / $number_y) . "<br/>";
echo "Số dư " . ($number_x % $number_y) . "<br/>";
