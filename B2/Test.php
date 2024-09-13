<html>
<head>
<body>
<?php

#8 Viết function giải phương trình bậc 2
function ptb2($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                return "Phương trình có vô số nghiệm";
            } else {
                return "Phương trình vô nghiệm";
            }
        } else {
            return "Phương trình có một nghiệm: x = " . (-$c / $b);
        }
    }

    $delta = $b * $b - 4 * $a * $c;
    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Phương trình có hai nghiệm phân biệt:" ."</br>" ."x1 = $x1"."</br>"." x2 = $x2";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Phương trình có nghiệm kép:" ."</br>" ." x = $x";
    } else {
        return "Phương trình vô nghiệm";
    }
}

echo ptb2(5, 3, -2)."<br>";

#9 Viết function in ra màn hình chữ nhật rỗng có kích thước 5x7 sử dụng dấu sao (dùng vòng lặp)
function HinhChuNhatRong($chieuCao, $chieuRong) {
    for ($i = 1; $i <= $chieuCao; $i++) {
        for ($j = 1; $j <= $chieuRong; $j++) {
            if ($i == 1 || $i == $chieuCao || $j == 1 || $j == $chieuRong) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;"; // In 4 khoảng trắng
            }
        }
        echo "<br>";
    }
}

// Gọi hàm để vẽ hình chữ nhật có kích thước 5x7
echo "Hình chữ nhật rỗng có kích thước 5x7 sử dụng dấu sao: " ."<br>";
HinhChuNhatRong(5, 7);

#10 Viết function tính trung bình cộng của mảng
$mang = [8,4,6,3];
function TBC($arr) {
    if (empty($arr)) {  
        return 0;
    }
    $tong = array_sum($arr);
    $soPhanTu = count($arr);
    return $tong / $soPhanTu;
}
echo TBC($mang);  

#BTVN buoi 4

#Bai1
echo "<br>";
// Nhập số cần kiểm tra từ người dùng
$so = 10;
// Kiểm tra số đó có phải là số chẵn hay không
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
#test
echo "<br>";
echo "<br>";
function func_name ($number)
{
if ($number <= 1) {
return false;
}
if ($number == 2) {
return true;
}

if ($number % 2 == 0) {
return false;
}
for ($i = 3; $i <= sqrt($number); $i += 2) {
if ($number % $i == 0) {
return false;
}
}
return true;
}
// Vi du su dung:
$numbers = range(1, 20);
foreach ($numbers as $number) {
if (func_name ($number)) {
echo $number."";
}
}
?>
</body>
</head>
</html>