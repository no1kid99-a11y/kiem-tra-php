<?php
/*
BÀI 3: Kiểm tra năm nay là năm chẵn hay năm lẻ
*/

$nam = date("Y");

if ($nam % 2 == 0) {
    echo "Năm $nam là năm chẵn";
} else {
    echo "Năm $nam là năm lẻ";
}
?>
