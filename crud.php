
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo("Connection Successful");

 if(isset($_POST['create'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address']; 

    $sql = "INSERT INTO students (name, age, email, gender, address) VALUES ('$name', '$age', '$email', '$gender', '$address')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record entry successfully";
    } else {
        echo "404 Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>