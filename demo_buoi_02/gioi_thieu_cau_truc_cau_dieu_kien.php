<?php
echo "1. Giới thiệu toán tử<hr/>";

// Khai báo hai biến cần thiết
$gioi_tinh = 1;
/**
 * 1: Nam
 * 2: Nữ
 * 3: Không xác định
 */

//  Nếu chỉ sử dụng if ảnh hưởng đến hiệu suất của chương trình
echo "Biểu thức if <hr/>";
echo "<br/>";
if ($gioi_tinh === 1) echo "Xin chào anh";

if ($gioi_tinh === 2) echo "Xin chào chị";

if ($gioi_tinh === 3) echo "Xin chào đằng ấy";

echo "<br/>";
echo "<hr/>";

// Sử dụng if else để cải thiện hiệu suất
echo "Biểu thức if else <hr/>";
if ($gioi_tinh === 1) {
    echo "Xin chào anh";
} else {
    if ($gioi_tinh === 2) {
        echo "Xin chào chị";
    } else {
        echo "Xin chào đằng ấy";
    }
}

echo "<br/>";
echo "<hr/>";

// Giống if else nhưng ngắn gọn hơn
echo "Biểu thức if else if<hr/>";
if ($gioi_tinh === 1) {
    echo "Xin chào anh";
} elseif ($gioi_tinh === 2) {
    echo "Xin chào chị";
} else {
    echo "Xin chào đằng ấy";
}
