<?php
echo "Giới thiệu hàm <br>";
// Hàm được sinh ra là để tối ưu source code. Giúp gộp các đoạn code lặp đi lặp lại thành 1 khối và đặt tên cho nó. Khi nào cần dùng. thì gọi tên hàm ra là xong.


// Các loại hàm
// Hàm không có giá trị trả về
// VD: Viết hàm tính tuổi của sinh viên sinh năm 2006, và in ra màn hình kết quả
// 1. Khai báo hàm
function ham_khong_co_gttv()
{
    $tuoi = 2024 - 2006;
    echo "Tuổi của sinh viên là: " . $tuoi . "<br>";
}

// 2. Sử dụng hàm, gọi hàm
ham_khong_co_gttv();


// Hàm có tham số
function ham_co_ts($ts_nam_sinh)
{
    $tuoi = 2024 - $ts_nam_sinh;
    echo "Tuổi của sinh viên là: " . $tuoi . "<br>";
}

ham_co_ts(2007);
ham_co_ts(2006);

$nam_sinh = 2005;
ham_co_ts($nam_sinh);


// Hàm có giá trị trả về
function ham_co_gttv($ts_nam_sinh)
{
    $tuoi = 2024 - $ts_nam_sinh;
    return $tuoi;
}

$ket_qua = ham_co_gttv(2005);
echo "Tuổi là: $ket_qua <br>";
if ($ket_qua >= 18) {
    echo "Chúc mừng bạn đã đạt tuổi đi bar <br>";
}

// Ôn Tập:
// Cho 2 biến $chieu_dai $chieu_rong là số nguyên dương bất kỳ
$chieu_dai = 20;
$chieu_rong = 5;

// 1. Viết hàm có tham số, không có giá trị trả về, để in ra diện tích hình chữ nhật
function hien_thi_dien_tich($ts_chieu_dai, $ts_chieu_rong)
{
    // Tính diện tích
    $dien_tich = $ts_chieu_dai * $ts_chieu_rong;

    // Hiển thị kết quả
    echo "Diện tích là: " . $dien_tich . "<br>";
}

hien_thi_dien_tich($chieu_dai, $chieu_rong);
hien_thi_dien_tich(5, 3);

// 2. Viết hàm có tham số, có giá trị trả về, để in ra chu vi hình chữ nhật
function tinh_chu_vi($ts_cd, $ts_cr)
{
    // Tính chu vi
    $chu_vi = ($ts_cd + $ts_cr) * 2;

    // Return kết quả
    return $chu_vi;
}

$ket_qua = tinh_chu_vi(5, 3);
echo "Chu vi là: " . $ket_qua . "<br>";


// Giới thiệu một số hàm có sẵn của PHP
echo "<hr>";
echo "Giới thiệu một số hàm có sẵn <br>";

$string01 = "  Toi duoc chin diem mon php co ban   ";

// Hàm tính độ dài của 1 chuỗi, 1 string
echo "Độ dài chuổi là: " . strlen($string01) . "<br>";

// Hàm loại bỏ khoảng trắng đầu và cuối của 1 chuỗi
// trim()
$string02 = trim($string01); // Toi duoc chin diem mon php co ban
echo $string02 . "<br>";
echo "Độ dài chuỗi string02 là: " . strlen($string02) . "<br>";


// Hàm thay thế 1 đoạn string nhỏ thành string khác
$string03 = str_replace("chin", "muoi", $string01);
echo $string03 . "<br>";

// Hàm tìm kiếm ký tự xuất hiện trong chuỗi
// strpos
// Tìm xem trong chuỗi string01 có từ chin không?
$vi_tri = strpos($string01, "chin");
echo "Vị trí từ 'muoi' trong chuỗi là: " . $vi_tri . "<br>";
var_dump($vi_tri);
