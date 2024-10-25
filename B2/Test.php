<html>
<head>
<body>
<?php

#BTVN buoi 4

#Bai1
echo "<br>";
$so = 10;
if ($so % 2 == 0) {
    echo "$so là số chẵn.";
} else {
    echo "$so là số lẻ.";
}
#Bai2
echo "<br>";
$diemGiuaKy = 8.5; 
$diemCuoiKy = 6.5; 
$diemTrungBinh = ($diemGiuaKy * 0.30) + ($diemCuoiKy * 0.70);
if ($diemTrungBinh >= 9.0) {
    echo "Hạng: Xuất sắc";
} elseif ($diemTrungBinh >= 7.0) {
    echo "Hạng: Giỏi";
} elseif ($diemTrungBinh >= 5.0) {
    echo "Hạng: Khá";
} else {
    echo "Hạng: Trung bình - Yếu";
}
#Bai3
echo "<br>";
// Nhập năm cần kiểm tra
$nam = 2024; 
// Kiểm tra năm có chia hết cho 2 không
if ($nam % 2 == 0) {
    echo "$nam là năm chẵn.";
} else {
    echo "$nam là năm lẻ.";
}
#Bai4
echo "<br>";
for ($i = 1; $i <= 100; $i++) {
    echo $i . " ";
}
?>
</body>
</head>
</html>