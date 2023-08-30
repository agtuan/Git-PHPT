<?php
function ngay_thang($thang, $nam) {
    switch($thang) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 11: {
            echo "Thang $thang co 31 ngay";
            break;
        }
        case 2: {
            if ($nam % 4 == 0) {
                echo "Thang $thang co 29 ngay";
                break;
            } else {
                echo "Thang $thang co 28 ngay";
                break;
            }
        }
        case 4:
        case 6:
        case 9:
        case 11: {
            echo "Thang $thang co 30 ngay";
            break;
        }
    }
}
$thang = 4;
$nam = 2020;
ngay_thang($thang, $nam);
echo '</br>';
?>

<?php
function giai_phuong_trinh($a, $b, $c) {
    if ($a === 0) {
        (float)$x = -$c / $b;
    } else {
        $denta = $b * $b - 4 * $a * $c;
        if ($denta < 0) {
            echo 'Phuong trinh vo nghiem';
        } elseif ($denta == 0) {
            $x = -$b / (2 * $a);
            echo "Phuong trinh co 1 nghiem duy nhat: $x";
        } else {
            $x1 = (-$b + sqrt($denta)) / (2 * $a);
            $x2 = (-$b - sqrt($denta)) / (2 * $a);
            echo 'Phuong trinh co 2 nghiem: </br>';
            echo "x1 = $x1</br>";
            echo "x2 = $x2</br>";
        }
    }
}
$a = 4;
$b = -2;
$c = -6;
giai_phuong_trinh($a, $b, $c);
echo '</br>';
?>

<?php
function tinh_ngay($ngay) {
    switch($ngay) {
        case 2 : {
            echo 'Thu 2';
            break;
        }
        case 3 : {
            echo 'Thu 3';
            break;
        }
        case 4 : {
            echo 'Thu 4';
            break;
        }
        case 5 : {
            echo 'Thu 5';
            break;
        }
        case 6 : {
            echo 'Thu 6';
            break;
        }
        case 7 : {
            echo 'Thu 7';
            break;
        }
        case 1 : {
            echo 'Chu nhat';
            break;
        }
    }
}
$ngay = 2;
tinh_ngay($ngay);
echo '</br>';
?>

<?php
$thang = 4;
$nam = 2020;
switch($thang) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 11: {
        echo "Thang $thang co 31 ngay";
        break;
    }
    case 2: {
        if ($nam % 4 == 0) {
            echo "Thang $thang co 29 ngay";
            break;
        } else {
            echo "Thang $thang co 28 ngay";
            break;
        }
    }
    case 4:
    case 6:
    case 9:
    case 11: {
        echo "Thang $thang co 30 ngay";
        break;
    }
}
echo '</br>';
?>

<?php
function phuong_trinh_bac_1($a, $b) {
    $a = 3;
    $b = 4;
    if ($a === 0) {
        (float)$x = $b;
    } else {
        (float)$x = -$b / $a;
    }
    return $x;
}
echo phuong_trinh_bac_1($a, $b);
?>