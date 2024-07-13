<?php
### Bài 2: Ứng dụng mảng
// - Khai báo mảng chứa các phần tử sau: “Xử Nữ”, “Thiên Yết”, “Nhân Mã”, “Ma Kết”

$arr = ['Xử Nữ', 'Thiên Yết', 'Nhân Mã', 'Ma Kết'];

function Arrs($arrs)
{
    foreach ($arrs as $item) {
        echo $item . '<br>';
    }

}

// - Thêm phần từ “LAST” vào cuối mảng
echo 'Thêm phần từ “LAST” vào cuối mảng' . '<br>';
echo '<br>';

array_push($arr, 'LAST');

echo Arrs($arr) . '<br>';

echo '<hr>';

// - Xóa phần tử “Thiên Yết” khỏi mảng
echo 'Xóa phần tử “Thiên Yết” khỏi mảng' . '<br>';
echo '<br>';

unset($arr[1]);

echo Arrs($arr) . '<br>';

echo '<hr>';

//  - In ra màn hình các phần tử chứa ký tự “M”
echo 'In ra màn hình các phần tử chứa ký tự “M”' . '<br>';

function inRaPhanTuChuaKyTu($arrs)
{
    foreach ($arrs as $item) {
        if (strpos($item, 'M') !== false) {
            echo $item . '<br>';
        }
    }
}

inRaPhanTuChuaKyTu($arr);

echo '<br>';