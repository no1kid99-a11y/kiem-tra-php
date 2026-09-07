<?php
/*
BÀI 2: Xếp hạng học lực
*/

// Điểm giữa kỳ và cuối kỳ
$giuaKy = 8;
$cuoiKy = 9;

// Tính điểm trung bình
$diemTB = ($giuaKy * 0.3) + ($cuoiKy * 0.7);

echo "Điểm trung bình: " . $diemTB . "<br>";

if ($diemTB >= 9.0) {
    echo "Xếp hạng: Xuất sắc";
} elseif ($diemTB >= 7.0) {
    echo "Xếp hạng: Giỏi";
} elseif ($diemTB >= 5.0) {
    echo "Xếp hạng: Khá";
} else {
    echo "Xếp hạng: Trung bình - Yếu";
}
?>
