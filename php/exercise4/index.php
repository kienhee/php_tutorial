<?php
$sanpham = "EV2009";
$tensanpham = "Tấm hợp kim nhôm ngoài trời EV2009 ";
$soluong = 500;
$dongia = 160000;
$vat = 0.05;
$a = $soluong * $dongia;
$b =  $soluong * $dongia * $vat;
echo 'sản phẩm: ' . $sanpham . "<br>";
echo 'tên sản phẩm: '. $tensanpham . "<br>";
echo 'số lượng: '. $soluong . "<br>";
echo 'đơn giá: '. $dongia . "<br>";
echo "VAT: " . $vat . "<br>" . "<br>";
echo ' sản phẩm trước khi trừ thuế VAT bằng' . $a . "<br>";
echo 'sau khi trừ thuế ' . $b;
?>