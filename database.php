<?php
    session_start();
    $SERVER_NAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DATABASE = "wordpress";

    $CONNECTION = mysqli_connect($SERVER_NAME, $USERNAME, $PASSWORD, $DATABASE);
?>