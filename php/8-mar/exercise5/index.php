<?php
$kw = 1000;
$t = 0;
$vat=0;
if($kw <= 100){
    echo 'số tiền phải trả trước là: ' . $t = $kw  * 450  .  "</br>";
}elseif ($kw>100 || $kw<=200 ){
    echo 'số tiền phải trả trước là: ' . $t = $kw  * 600 . "</br>";
}
elseif ($kw>200 || $kw<=300 ){
    echo 'số tiền phải trả trước là: ' . $t = $kw  * 750 . "</br>";
}elseif ($kw>301 || $kw<=500 ){
    echo 'số tiền phải trả trước là: ' . $t = $kw  * 900 . "</br>";
}elseif ($kw>501 || $kw<=1000 ){
    echo 'số tiền phải trả trước là: ' . $t = $kw  * 1000 . "</br>";
}elseif ($kw>=1000) {
    echo 'số tiền phải trả trước là: ' . $t = $kw * 1200 . "</br>";
}
echo "sau khi tính thuế VAT(10%): " . $vat = $t * 10/100;
?>
