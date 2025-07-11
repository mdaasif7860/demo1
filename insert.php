<?php
// 1. Get data from HTML form
$name = $_POST['name'];
$email = $_POST['email'];

// 2. Connect to MySQL database (hostname, username, password, database)
$conn = new mysqli("localhost", "root", "", "studentdb");

// 3. Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// 4. Insert data into table
$sql = "INSERT INTO students (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE) {
  echo "Record inserted successfully!";
} else {
  echo "Error: " . $conn->error;
}

// 5. Close connection
$conn->close();
?>
