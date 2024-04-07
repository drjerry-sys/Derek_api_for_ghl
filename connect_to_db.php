<?php
    $serverName = "lifeinsuranceguides.ca";
    $db_user = "ugxuwtb2yvehb";
    $db_password = "fwh2NXU.pdy2emq0xrf";
    $db_name = "db3hgh5rlwgnm2";
    $db_port = "3306";
    $conn = new mysqli($serverName, $db_user, $db_password, $db_name, $db_port);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connection success!";
    $result = $conn->query("SHOW TABLES");
    print_r($result);
    echo "Connected successfully";
?>