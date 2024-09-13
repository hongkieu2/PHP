<html>
<head>
<body>
<?php

//8 Viết function giải phương trình bậc 2
function PTB2($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                return "Phương trình có vô số nghiệm";
            } else {
                return "Phương trình vô nghiệm";
            }
        } else {
            return "Phương trình có 1 nghiệm: x = " .(-$c / $b);
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
echo PTB2(5, 3, -2)."<br>";

//9 Viết function in ra màn hình chữ nhật rỗng có kích thước 5x7 sử dụng dấu sao (dùng vòng lặp)
function HCN($chieuDai, $chieuRong) {
    for ($i = 1; $i <= $chieuDai; $i++) {
        for ($j = 1; $j <= $chieuRong; $j++) {
            if ($i == 1 || $i == $chieuDai || $j == 1 || $j == $chieuRong) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
}
echo HCN(5, 7);

//10 Viết function tính trung bình cộng của mảng
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
?>
</body>
</head>
</html>