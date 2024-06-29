<!--
    # Bài 02: Ôn tập vòng lặp lv2
- Cho 2 số nguyên dương x, y bất kỳ (x nhỏ hơn y)
- Sử dụng vòng lặp "for" để in ra các số chẵn trong khoảng từ x đến y theo thứ tự tăng dần
- Sử dụng vòng lặp "for" để in ra các số chẵn trong khoảng từ x đến y theo thứ tự giảm dần
- Sử dụng vòng lặp "for" để in ra số chẵn lớn nhất trong khoảng từ x đến y
- Sử dụng vòng lặp "for" để in ra số chẵn nhỏ nhất trong khoảng từ x đến y
-->

<?php
$x = 1;
$y = 20;

// In ra các số chẵn trong khoảng từ x đến y theo thứ tự tăng dần
for ($i = $x; $i <= $y; $i++) {
  if ($i % 2 == 0) {
    echo $i . " ";
  }
}

// In ra các số chẵn trong khoảng từ x đến y theo thứ tự giảm dần
for ($i = $y; $i >= $x; $i--) {
  if ($i % 2 == 0) {
    echo $i . " ";
  }
}

// In ra số chẵn lớn nhất trong khoảng từ x đến y
$max_even = -1;
for ($i = $x; $i <= $y; $i++) {
  if ($i % 2 == 0) {
    $max_even = max($max_even, $i);
  }
}
echo "Số chẵn lớn nhất trong khoảng từ $x đến $y là: " . $max_even;

//  In ra số chẵn nhỏ nhất trong khoảng từ x đến y
$min_even = PHP_INT_MAX; // Initialize with a large value
for ($i = $x; $i <= $y; $i++) {
  if ($i % 2 == 0) {
    $min_even = min($min_even, $i);
  }
}
echo "Số chẵn nhỏ nhất trong khoảng từ $x đến $y là: " . $min_even;