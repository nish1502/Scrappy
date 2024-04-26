<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mainsignupform";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if(isset($_POST['submit'])){
    // Retrieve form data
    $email = $_POST['Email'];
    $userPassword = $_POST['Password'];
    $confirmPassword = $_POST['Confirm_Password'];

    // Output received form data for debugging
    echo "Received Email: " . $email . "<br>";
    echo "Received Password: " . $userPassword . "<br>";
    echo "Received Confirmed Password: " . $confirmPassword . "<br>";

    // Construct SQL query
    $query = "INSERT INTO signup (email, userPassword, confirmPassword) VALUES ('$email', '$userPassword', '$confirmPassword')";
    echo "Query: " . $query . "<br>"; // Display the query for debugging

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
var_dump($email, $userPassword, $confirmPassword);

$conn->close();
?>
