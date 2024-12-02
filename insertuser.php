<?php
// الاتصال بقاعدة البيانات
$con = mysqli_connect("localhost", "root", "", "booking");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// بيانات المستخدم للإدخال
$name = "Chaimaa";
$email = "chaimaa@example.com";

// استعلام الإدخال
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

// تنفيذ الاستعلام
if (mysqli_query($con, $sql)) {
    echo "User added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// إغلاق الاتصال بقاعدة البيانات
mysqli_close($con);
?>
