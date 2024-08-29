<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BTVN Buổi 1</title>
        <style></style>
    </head>
    <body>
        <<?php
        $x="Xin chào TMU";
        $z=" nha";
        $r="Xin";
        //1
        echo "Số ký tự là: " .strlen($x) ."<br>";
        //2
        echo "Số từ là: " .str_word_count($x) ."<br>";
        //3
        echo "Chuỗi sau khi đảo ngược: " .strrev($x) ."<br>";
        //4
        echo "Chuỗi con trong chuỗi: " .strpos($x,"chào") ."<br>";
        //5
        echo "Thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác: " .str_replace("TMU", "K60", $x) ."<br>";
        //6
        $xx=substr($x,0,1);
        $rr=substr($r,0,1);
        if($xx==$rr) {
            echo "Chuỗi $x bắt đầu bằng chuỗi con $r";
        }
        else {
            echo "Chuỗi $x không bắt đầu bằng chuỗi con $r";
        }
        echo "<br>";
        //7
        echo "Chuyển đổi một chuỗi thành chữ hoa: " .strtoupper($x) ."<br>";
        //8
        echo "Chuyển đổi một chuỗi thành chữ thường: " .strtolower($x) ."<br>";
        //9
        echo "Chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ: " .ucwords($x) ."<br>";
        //10
        echo "Loại bỏ khoảng trắng ở đầu và cuối chuỗi: " .trim($x) ."<br>";
        //11
        echo "Loại bỏ ký tự đầu tiên của chuỗi: " .ltrim($x,"x") ."<br>";
        //12
        echo "Loại bỏ ký tự cuối cùng của chuỗi: " .rtrim($x,"U") ."<br>";
        //13
        echo "Tách một chuỗi thành một mảng các phần tử: ";
        print_r(explode(' ', $x));
        echo "<br>";
        //14
        $v= array("Lập","trình","PHP");
        echo "Nối các phần tử của một mảng thành một chuỗi: " .implode(" ",$v) ."<br>";
        //15
        echo "Thêm một chuỗi vào đầu của một chuỗi: " .str_pad($x,strlen($x)+strlen($z),$z,STR_PAD_RIGHT) ."<br>";
        //16
        $str16=strrchr($x,$r[0]);
        if ($str16 !==false && strpos($str16,$r)===$r){
            echo"Chuỗi $x kết thức bằng chuỗi $r";
        } else {
            echo"Chuỗi $x không kết thúc bằng chuỗi $r";
        }
        echo "<br>";
        //17
        $result=strstr($x,$r);
        if ($result !==false){
        echo"Chuỗi $x chứa chuỗi $r";
        } else {
        echo"Chuỗi $x không chứ chuỗi $r";
        }
        echo "<br>";
        //18
        $str18 = "&sinhvien";
        echo preg_replace("/\W/","mail là ", $str18);
        echo "<br>";
        # \W được dùng để tìm các ký tự KHÔNG PHẢI là chữ, số, hoặc dấu gạch dưới _
        //19
        $y = 30.5;
        if (is_int($y)) {
        echo "Biến là kiểu số nguyên";
        }else{
            echo "Biến $y không phải số nguyên";
        };
        echo "<br/>";
        //20
        $email = "hongkieu57@gmail.com";
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("$email là địa chỉ email hơp lệ");
        } else {
		echo("$email không là địa chỉ email hơp lệ");
	    } 
        echo "<br>";
        ?>
    </body>
</html>