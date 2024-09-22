<?php
 $host = 'localhost';
 $user = 'root';
 $pass ='';
 $db_name ='todo_list';

 $conn = new mysqli($host,$user,$pass,$db_name);

if($conn->connect_error){
    die('failed'. $conn->connect_error);
}

?>