<?php
$conn = new mysqli("localhost", "root", "123456", "contact_db");

if ($conn->connect_error) {
    die("Connection failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name, email, subject, message)
        VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Message Sent Successfully!";
} else {
    echo "❌ Error!";
}

$conn->close();
?>