<?php

    function connect()
    {
    $conn = new mysqli("localhost","nodi","1234","mysql");
    if($conn->connect_errno)
    {
        die("Connection failed due to ".$conn->connect_error);
    }
    return $conn;
    }

?>
