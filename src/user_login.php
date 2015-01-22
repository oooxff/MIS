
<?php

    include("utils.php");

    $user_name = $_POST["user_name"];
    $user_password = $_POST["user_password"];

    println("!!! This is only for test !!!");
    println("Welcome " . $user_name . ". Your input password is: " . $user_password . ".");
?>