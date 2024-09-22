<?php
include 'db.php';

$id = $_GET['id'];
$sql = "UPDATE tasks SET status='complete' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error updating record: " . $conn->error;
}
?>
