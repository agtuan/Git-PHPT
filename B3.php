<?php
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
