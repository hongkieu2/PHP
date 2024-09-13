<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// SLIDE 6
// Kết nối với MySQL Server
$dbh = mysqli_connect('localhost', 'root','', 'melody');
    // Thông báo lỗi nếu kết nối thất bại 
    if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_connect_error()); 
// thêm dữ liệu vào bảng
    $sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
    $sql_stmt .= "VALUES('Poseidon','Mail','541',' poseidon@sea.oc ','Troy','Ithaca')"; 
    $result = mysqli_query($dbh, $sql_stmt);
    if (!$result) {
        die("Adding record failed: " . mysqli_connect_error()); 
    } else {
        echo "Poseidon has been successfully added to your contacts list";
    }

// cập nhật dữ liệu vào bảng
    $sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '785',`email` = 'poseidon@ocean.oc'";
    $sql_stmt .= "WHERE `id` = 5";
    $result = mysqli_query($dbh,$sql_stmt);
    if (!$result) {
        die("Deleting record failed: " . mysqli_connect_error());
    } else {
        echo "ID number 5 has been successfully updated";
    }

// xóa dữ liệu
    $id = 4; // ID của Venus trong CSQL
    $sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id";   
    $result = mysqli_query($dbh,$sql_stmt); 
    if (!$result) {
        die("Deleting record failed: " . mysqli_connect_error());
    } else {
        echo "ID number $id has been successfully deleted";
    }

// hiển thị dữ liệu
    $sql_stmt = "SELECT * FROM my_contacts"; 
    $result = mysqli_query($dbh,$sql_stmt);
    if (!$result)     
        die("Database access failed: " . mysqli_connect_error()); 
        $rows = mysqli_num_rows($result); // Lấy số hàng trả về
    if ($rows) {
        while ($row = mysqli_fetch_array($result)) {         
            echo 'ID: ' . $row['id'] . '<br>';         
            echo 'Full Names: ' . $row['full_names'] . '<br>';        
            echo 'Gender: ' . $row['gender'] . '<br>';         
            echo 'Contact No: ' . $row['contact_no'] . '<br>';         
            echo 'Email: ' . $row['email'] . '<br>';         
            echo 'City: ' . $row['city'] . '<br>';         
            echo 'Country: ' . $row['country'] . '<br><br>';     
        } 
    } 
mysqli_close($dbh);
// SLIDE 14
// kết nối với csdl
try {
    $dbh = new PDO('mysql:host=localhost;dbname=melody', 'root', '');
    // Thiết lập chế độ báo cáo lỗi PDO
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// thêm dữ liệu vào bảng
$sql = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) 
        VALUES (:full_names, :gender, :contact_no, :email, :city, :country)";
        
$stmt = $dbh->prepare($sql);
$data = [
    ':full_names' => 'Poseidon',
    ':gender' => 'Male',
    ':contact_no' => '541',
    ':email' => 'poseidon@sea.oc',
    ':city' => 'Troy',
    ':country' => 'Ithaca'
];
if ($stmt->execute($data)) {
    echo "Record added successfully.";
} else {
    echo "Error adding record.";
}

//cập nhật dữ liệu vào bảng
$sql = "UPDATE my_contacts 
        SET full_names = :full_names, email = :email 
        WHERE id = :id";   
$stmt = $dbh->prepare($sql);
$data = [
    ':full_names' => 'Zeus',
    ':email' => 'zeus@olympus.com',
    ':id' => 1
];
if ($stmt->execute($data)) {
    echo "Record updated successfully.";
} else {
    echo "Error updating record.";
}

// xóa dữ liệu
$sql = "DELETE FROM my_contacts WHERE id = :id";
$stmt = $dbh->prepare($sql);
$data = [':id' => 1];
if ($stmt->execute($data)) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record.";
}

// hiển thị dữ liệu
$sql = "SELECT * FROM my_contacts";
$stmt = $dbh->query($sql);
if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Full Names: ' . $row['full_names'] . '<br>';
        echo 'Gender: ' . $row['gender'] . '<br>';
        echo 'Contact No: ' . $row['contact_no'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'City: ' . $row['city'] . '<br>';
        echo 'Country: ' . $row['country'] . '<br><br>';
    }
} else {
    echo "No records found.";
}
?>
</body>
</html>



