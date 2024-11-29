// update_task.php

<?php
require_once 'config.php';

if ($_GET['task_id'] != "") {
    $task_id = $_GET['task_id'];
    $status = $_GET['status'];

    $updatingtasks = 
          mysqli_query($db, 
            "UPDATE `task` SET `status` = '$status' WHERE `task_id` = $task_id")
        or
        die(mysqli_error($db));
    header('location: index.php');
}
?>