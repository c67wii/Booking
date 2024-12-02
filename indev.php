
<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $destination = $_POST['destination'];
    $departure_date = $_POST['departure-date'];
    $return_date = $_POST['return-date'];



   $sql = "INSERT INTO bookings (name, email, destination, departure_date, return_date) 
    VALUES ('$name', '$email', '$destination', '$departure_date', '$return_date')";
 if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Booking successful!"); window.location.href="index.php";</script>';
} else {
    echo '<script>alert("Error: ' . mysqli_error($con) . '"); window.history.back();</script>';
}
} else {
echo '<script>alert("Invalid request."); window.history.back();</script>';
}


?>
  


