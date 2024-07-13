<?php

// Cách viết 1 (mảng number)
$ds_nam_sinh = array(2000, 2001, 2005, 1999, 2007);

// Cách viết 2 (mảng number)
$ds_nam_sinh_kieu2 = [2000, 2001, 2005, 1999, 2007];

// Mảng string
$ds_ten = ['Array 1', 'Array 2', 'Array 3'];

// Đọc dữ liệu phần tử của mảng theo vị trí;
echo 'Đọc dữ liệu phần tử của mảng theo vị trí: ';

// lấy ra item trong mảng theo index
echo $ds_nam_sinh_kieu2[0];
echo '<br>';

echo $ds_nam_sinh_kieu2[4];
echo '<br>';

echo 'Lấy ra số lượng phần tử mảng';
echo '<br>';

// Sử dụng count();
echo 'Số lượng phần tử mảng là: ' . count($ds_nam_sinh_kieu2);
echo '<hr>';

echo 'In giá trị toàn bộ phần tử của mảng';
echo '<br>';

// Cách 1
for ($i = 0; $i <= count($ds_ten) - 1; $i++) {
    echo $ds_ten[$i] . '<br>';
}

echo '<hr>';

// Cách 2
hien_thi_mang($ds_nam_sinh);

echo '<hr>';
echo 'Thêm phần tử vào cuối mảng';
echo '<br>';

// Thêm Array 4 vào cuối mảng danh sách tên
array_push($ds_ten, 'Array 4');

hien_thi_mang($ds_ten);

// khai báo hàm tối ưu source code
function hien_thi_mang($mang)
{
    foreach ($mang as $item) {
        echo $item . '<br>';
    }
}

echo '<hr>';
// Xóa dữ liệu khỏi Array

// Xóa phần tử cuối khỏi mảng
array_pop($ds_ten);
hien_thi_mang($ds_ten);
echo '<hr>';

// Xóa theo index
unset($ds_ten[1]);
hien_thi_mang($ds_ten);
