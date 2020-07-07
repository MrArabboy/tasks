<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all tasks</title>
</head>
<body>
    <h2>All tasks here !</h2>
    <?php
    $taskname=$_POST['taskName'];
    $taskdesc=$_POST['taskDesc'];
    $createdtime=$_POST['createdTime'];
    $deadline=$_POST['deadline'];

    echo "<h2>Task name : $taskname </h2>";
    ?>
</body>
</html>