<?php

include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    if(!empty($name)){
        $sql = "INSERT INTO tasks (name) VALUES ('$name')";
        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
