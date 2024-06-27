<?php
echo "3. Giới thiệu phép so sánh<hr/>";

/**
 * == === (so sánh bằng) 
 * != !== (so sánh khác)
 * > >= (so sánh lớn hơn)
 * < <= (so sánh nhỏ hơn)
 */

// Khai báo hai biến cần thiết
$number_a = 10;
$number_b = 11;
$number_c = 10;
$string_a = '10';

// So sánh bằng (==) {== so sánh giá trị}
var_dump($number_a == $number_b);
echo '<br/>';

var_dump($number_a == $number_c);
echo '<br/>';

var_dump($number_a == $string_a);
echo '<br/>';

var_dump($number_a == $string_a);
echo '<br/>';


// So sánh bằng (===) {=== so sánh giá trị và kiểu dữ liệu}
var_dump($number_a === $string_a);
echo '<hr/>';
echo '<br/>';


// Ép kiểu dữ liệu
echo "Ép kiểu dữ liệu<hr/>";

// Ép kiểu dữ liệu từ string sang number
var_dump((int)$string_a);
echo '<br/>';
var_dump((string)$number_a);
