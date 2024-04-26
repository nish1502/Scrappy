<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sellform";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if(isset($_POST['submit'])){
    // Retrieve form data
   $first_name = $_POST['First_Name'];
   $last_name = $_POST['Last_Name'];
   $age = $_POST['Age'];
   $gender = $_POST['Gender'];
   $phone_number = $_POST['Phone_Number'];
   $email_address = $_POST['Email_Address'];
   $username = $_POST['Username'];
   $password = $_POST['Password'];
   $product_name = $_POST['Product_Name'];
   $product_material = $_POST['Product_Material'];
   $product_size = $_POST['Product_Size'];
   $product_price = $_POST['Product_Price'];
   $any_specification = $_POST['Any_Specification'];
    

    // Output received form data for debugging
    echo "Received : first_name" . $first_name . "<br>";
    echo "Received : last_name" . $last_name . "<br>";
    echo "Received : age" . $age . "<br>";
    echo "Received : gender" . $gender . "<br>";
    echo "Received : phone_number" . $phone_number . "<br>";
    echo "Received : email_address" . $email_address . "<br>";
    echo "Received : username" . $username. "<br>";
    echo "Received : password" . $password . "<br>";
    echo "Received : product_name" . $product_name . "<br>";
    echo "Received : product_material" . $product_material . "<br>";
    echo "Received : product_size" . $product_size . "<br>";
    echo "Received : product_price" . $product_price . "<br>";
    echo "Received : any_specification" . $any_specification . "<br>";
    // Construct SQL query
    $query ="INSERT INTO sell (first_name, last_name, age, gender, phone_number, email_address, username, password, product_name, product_material, product_size, product_price, any_specification) VALUES ('$first_name', '$last_name', '$age', '$gender', '$phone_number', '$email_address', '$username', '$password', '$product_name', '$product_material', '$product_size', '$product_price', '$any_specification')";

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
//var_dump();

$conn->close();
?>
