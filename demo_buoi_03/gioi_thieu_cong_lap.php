<?php
echo "Gới thiệu vòng lặp <br/>";


echo "1. Gới thiệu về for <br/>";
// In ra màn hình các số từ đến 10
// Giá trị bắt đầu chạy từ đâu, biểu thức so sánh(Nếu biểu thức so sánh đúng chạy tiếp), i++ mỗi lần chạy + lên 1
for ($i = 0; $i <= 10; $i++) {
  echo $i;
  echo "<br/>";
}

echo '2. Giới thiệu về while <br/>';
// In ra màn hình các số từ đến 10
// Check trước xong mới chạy, cần có 1 biến làm giá trị khởi tạo, điều kiện lặp viết trong while, tăng giá trị biến viết ở cuối cùng
$i = 0;
while ($i <= 10) {
  // code logic
  echo $i;
  echo "<br/>";

  $i++;
}

echo '3. Giới thiệu do while <br/>';
// In ra màn hình các số từ đến 10
// Thực hiện logic trước rồi kiểm tra điều kiện sau, cần có 1 biến làm giá trị khởi tạo, điều kiện lặp viết trong while, tăng giá trị biến viết ở cuối cùng
$i = 0;
do {
// code logic
  echo $i;
  echo "<br/>";

  $i++;
} while ($i <= 10);