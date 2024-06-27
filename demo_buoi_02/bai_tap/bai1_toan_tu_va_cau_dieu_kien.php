<?php

// Khai báo biến
$numberX = 10;
$numberY = 20;
$numberZ = 15;

// Step 1: In ra tổng 3 số
$tong = $numberX + $numberY + $numberZ;
echo "Tổng 3 số là: $tong <br/>";

// Step 2: In ra trung bình cộng 3 số
$trungBinhCong = ($numberX + $numberY + $numberZ) / 3;
echo "Trung bình cộng 3 số là: $trungBinhCong <br/>";

// Step 3: In ra số lớn nhất trong 3 số
$numberMax = $numberX;

if ($numberMax < $numberY) {
  $numberMax = $numberY;
}

if ($numberMax < $numberZ) {
  $numberMax = $numberZ;
}

echo 'Số lớn nhất là: ' . $numberMax;


