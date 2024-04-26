<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactform";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['Submit'])){
    $personname = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $message = $_POST['Message'];
    
    // Construct SQL query
    $query = "INSERT INTO form (personname, email, phone, message) VALUES ('$personname', '$email', '$phone', '$message')";
    echo "Query: " . $query; // Add this line

    // Execute query
    $result = $conn->query($query);
    
    if($result === TRUE) {
        echo "Data inserted into database successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
if(isset($_POST['submit'])){
    echo "Form submitted"; // Add this line
    // Rest of your code...
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn->close();
?>