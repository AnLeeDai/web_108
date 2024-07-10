<?php
// # Bài 01: Ôn tập vòng lặp lv1
echo "# Bài 01: Ôn tập vòng lặp lv1 <br>";

// - Cho 1 số nguyên dương z bất kỳ
$z = 13;

// - Sử dụng vòng lặp "for" để in ra các số chẵn từ 0 đến z
echo "Số chẵn từ 0 đến z là: ";
for ($i = 0; $i <= $z; $i++) {
    // Tìm số chẵn
    if ($i % 2 === 0) {
        echo $i . " ";
    }
}

// - Sử dụng vòng lặp "while" để in ra các số lẻ từ 0 đến z
echo "<br>";
echo "Số lẻ từ 0 đến z là: ";
$i = 0;
while ($i <= $z) {
    // Tìm số lẻ
    if ($i % 2 === 1) {
        echo $i . " ";
    }

    $i++;
}

// - Sử dụng vòng lặp "do while" để in ra các số chia hết cho 3 từ 0 đến z
echo "<br>";
echo "Số chia hết cho 3 từ 0 đến z là: ";
$i = 0;
do {
    // Tìm số chia hết cho 3
    if ($i % 3 === 0) {
        echo $i . " ";
    }

    $i++;
} while ($i <= $z);


// # Bài 02: Ôn tập vòng lặp lv2
echo "<hr>";
echo "Bài 02: Ôn tập vòng lặp lv2 <br>";

// - Cho 2 số nguyên dương x, y bất kỳ (x nhỏ hơn y)
$x = 10;
$y = 19;

// - Sử dụng vòng lặp "for" để in ra các số chẵn trong khoảng từ x đến y theo thứ tự tăng dần
echo "Số chẵn trong khoảng từ x đến y là: ";
for ($i = $x; $i <= $y; $i++) {
    // Tìm số chẵn
    if ($i % 2 === 0) {
        echo $i . " ";
    }
}

// - Sử dụng vòng lặp "for" để in ra các số chẵn trong khoảng từ x đến y theo thứ tự giảm dần
echo "<br>";
echo "Số chẵn theo thứ tự giảm dần là: ";
for ($i = $y; $i >= $x; $i--) {
    // Tìm số chẵn
    if ($i % 2 === 0) {
        echo $i . " ";
    }
}

// - Sử dụng vòng lặp "for" để in ra số chẵn lớn nhất trong khoảng từ x đến y
echo "<br>";
echo "Số chẵn lớn nhất là: ";
for ($i = $y; $i >= $x; $i--) {
    // Tìm số chẵn
    if ($i % 2 === 0) {
        echo $i . " ";
        break;
    }
}


// - Sử dụng vòng lặp "for" để in ra số chẵn nhỏ nhất trong khoảng từ x đến y
echo "<br>";
echo "Số chẵn nhỏ nhất là: ";
for ($i = $x; $i <= $y; $i++) {
    // Tìm số chẵn, hiện thị và break để kết thúc vòng lặp
    if ($i % 2 === 0) {
        echo $i;
        break;
    }
}
