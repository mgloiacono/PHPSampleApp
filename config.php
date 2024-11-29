<?php

$db = mysqli_connect("mysqldbinstance.cb4g68q4ydzq.us-east-2.rds.amazonaws.com", "admin", "admin1234", "todo")
    or
    die("Connection failed: " . mysqli_connect_error());

?>