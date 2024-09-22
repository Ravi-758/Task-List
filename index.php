<?php
include 'db.php';

// Fetch tasks
$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>
    
    <form action="add_task.php" method="POST">
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit">Add Task</button>
    </form>
<form action="add_name.php" method="POST" >
    <input type="text" name="name" placeholder="enter name" required >
    <button type="submit">add name</button>
 
</form>
    <h2>Tasks:</h2>
    <ul>
        <?php while($row = $result->fetch_assoc()): ?>
            <li>
               <p><?php echo $row['name']; ?></p>
            <p><?php  echo $row['task']; ?></p>
                <a href="delete_task.php?id=<?php echo $row['id']; ?>">Delete</a>
                <?php if($row['status'] == 'incomplete'): ?>
                    <a href="complete_task.php?id=<?php echo $row['id']; ?>">Complete</a>
                <?php else: ?>
                    <span>Completed</span>
                <?php endif; ?>
            </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
