 <?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "product";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$pn= $_GET['pName'];
$pr= $_GET['price'];
$c= $_GET['quantity'];
$q= $_GET['category'];
$pd= $_GET['pDate'];
$ed= $_GET['eDate'];

$sql = "INSERT INTO products (pName,Price,Category,quantity,pDate,eDate)
VALUES ('$pn','$Pr','$c','$q','$pd','$ed')";

if ($conn->query($sql) ==TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 