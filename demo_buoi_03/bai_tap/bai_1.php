<!--
    # Bài 01: Ôn tập vòng lặp lv1
- Cho 2 số nguyên dương z bất kỳ
    - Sử dụng vòng lặp "for" để in ra các số chẵn từ 0 đến z
    - Sử dụng vòng lặp "while" để in ra các số lẻ từ 0 đến z
    - Sử dụng vòng lặp "do while" để in ra các số chia hết cho 3 từ 0 đến z
-->


<?php
// Sử dụng vòng lặp "for" để in ra các số chẵn từ 0 đến z
$z = 20;

for ($i = 0; $i <= $z; $i++) {
  if ($i % 2 === 0) {
    echo 'Số chẵn là: ' . $i . '<br>';
  }
}

// Sử dụng vòng lặp "while" để in ra các số lẻ từ 0 đến z
$i = 0;
while ($i <= $z) {
  if ($i % 2 === 1) {
    echo 'Số lẻ: ' . $i . '<br>';
  }

  $i++;
}

// Sử dụng vòng lặp "do while" để in ra các số chia hết cho 3 từ 0 đến z
$i = 0;
do {
  if ($i % 3 === 0) {
    echo "\n";
    echo 'Số chia hết cho 3: ' . $i . '<br/>';
  }

  $i++;
} while ($i < $z);