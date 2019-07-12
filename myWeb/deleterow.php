<?php
session_start();
require_once('connection.php');
require_once('loginrestrict.php');

$id = $_SESSION['id'];


// sql to delete a record
$sql = "DELETE FROM post WHERE id='$id' ";

if ($conn->query($sql) === TRUE) {
    header("location:http://localhost/Tutorial/myWeb/postDeletedSuccess.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>