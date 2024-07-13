<?php

// ### Bài 1: Ứng dụng mảng
//- Khai báo mảng chứa các phẩn tử sau: 11, 15, 16, 10, 4, 5, 9
$arr = [11, 15, 16, 10, 4, 5, 9];

//- In ra màn hình các số chẵn
foreach ($arr as $item) {
    if ($item % 2 === 0) echo 'Số chẵn là: ' . $item . '<br>';
}

echo '<hr>';

//- In ra màn hình các số lẻ
foreach ($arr as $item) {
    if ($item % 3 === 0) echo 'Số lẻ là: ' . $item . '<br>';
}

echo '<hr>';

//- In ra màn hình tổng các số
$tong = 0;

foreach ($arr as $item) {
    $tong += $item;
}

echo 'Tổng là: ' . $tong;

echo '<hr>';

//- In ra màn hình trung bình cộng các số
echo 'Tổng trung bình cộng: ' .$tong / count($arr);