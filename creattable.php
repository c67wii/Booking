<?php

include 'conn.php';


$sql = "CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    destination VARCHAR(255) NOT NULL,
    departure_date DATE NOT NULL,
    return_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


if (mysqli_query($con, $sql)) {
    echo "Table 'bookings' created successfully!";
} else {
    echo "Error creating table: " . mysqli_error($con);
}


mysqli_close($con);
?>
