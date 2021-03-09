<!DOCTYPE html>
<html>
<body>
<p> nhập phép tính<br>
    1.cộng<br>
    2. trừ<br>
    3.nhân<br>
    4.chia<br>
    5.chia lấy dư
</p>
<?php
$math= "1";
$a = 2;
$b = 3;
$cong= $a + $b;
$tru= $a - $b;
$nhan= $a * $b;
$chia= $a % $b;
$chiadu= $a / $b;

switch($math)
{
    case 1:
        echo 'kết quả =' . $cong;
        break;
    case 2:
        echo $tru;
        break;
    case 3:
        echo $nhan;
        break;
    case 4:
        echo $chia;
        break;
    case 5:
        echo $chiadu;
        break;
    default:
        echo "Vui lòng nhập lại !";
}

?>

</body>
</html>
