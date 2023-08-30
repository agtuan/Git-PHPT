<?php
//B1
     function giaiPhuongTrinhBacNhat($a, $b) {
            if ($a == 0) {
                if ($b == 0) {
                    return "Ptcvsn";
                } else {
                    return "Ptvn";
                }
            } else {
                $x = -$b / $a;
                return "Nghiệm của phương trình là x = $x";
            }
        }
        
        $a = 4;
        $b = -5;
        $ketQua = giaiPhuongTrinhBacNhat($a, $b);
        echo $ketQua;

        //B2
        function giaiPhuongTrinhBacHai ($a,$b,$c){
            $delta = ($b*$b) - (4*$a*$c);
            echo "delta = $delta";
            
            
            if($delta > 0){
                $x1 = ((-$b + sqrt($delta))/2*$a);
                $x2 = ((-$b - sqrt($delta))/2*$a);
                return " phương trình có 2 nghiệm phân biệt x1 = $x1, x2 = $x2 ";
                if($delta == 0){
                     $X1 = $x2 = (-$b/2*$a);
                    return "ptcnkep x1 = x2 = $X1 = $x2 ";
        
                }
                
            }else {
                return"ptvn";
            }
        
                
        }   
            $a = -3;
            $b = 4;
            $c = 9;
            $ketqua = giaiPhuongTrinhBacHai ($a,$b,$c);
            echo $ketqua;

            
            //b3
            function convertDayOfWeek($dayNumber) {
                $days = array(
                    1 => "Chủ nhật",
                    2 => "Thứ hai",
                    3 => "Thứ ba",
                    4 => "Thứ tư",
                    5 => "Thứ năm",
                    6 => "Thứ sáu",
                    7 => "Thứ bảy"
                );
            
                return isset($days[$dayNumber]) ? $days[$dayNumber] : "Không hợp lệ";
            }
            
            $ngay = 1;
            $ngayChu = convertDayOfWeek($ngay);
            echo "Ngày $ngay là $ngayChu.";
            
            //bai4 
            function getDaysInMonth($month, $year) {
                $daysInMonth = array(
                    1 => 31,
                    2 => ($year % 4 == 0) ? 29 : 28,
                    3 => 31,
                    4 => 30,
                    5 => 31,
                    6 => 30,
                    7 => 31,
                    8 => 31,
                    9 => 30,
                    10 => 31,
                    11 => 30,
                    12 => 31
                );
            
                return isset($daysInMonth[$month]) ? $daysInMonth[$month] : 0;
            }
            
            $thang = 3;
            $nam = 2023;
            
            $soNgay = getDaysInMonth($thang, $nam);
            echo "Tháng $thang năm $nam có $soNgay ngày.";
            ?>

            //b4

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