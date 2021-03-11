<?php
$sotunhien = array(3, 5, 9, 10, 13);
$clength = count($sotunhien);

for($x = 0; $x < $clength; $x++) {
    $max=$sotunhien[$x];
    for($y = 0; $y < ($clength); $y++) {
        if ($max < $sotunhien[$y]) {
            $max = $sotunhien[$y];}}}
echo "max: " .$max ."<br>";

for ($m = 0; $m < $clength; $m++) {
    for($x = 0; $x < $clength; $x++) {
        $min=$sotunhien[$x];
        for($y = 0; $y < ($clength); $y++) {
            if ($min > $sotunhien[$y]) {
                $min = $sotunhien[$y];}}}}
echo "min: ".$min."<br>";
echo "trung bình cộng của mảng là : ".array_sum($sotunhien)/count($sotunhien);
//Tổng của các số = 3 + 5 + 9 + 10 + 13 = 40
//Dãy trên có tất cả 5 số hạng
//=> Trung bình cộng các số = Tổng : Số các số hạng = 40 : 5 = 8