<?php
    $serverName = "lifeinsuranceguides.ca";
    $db_user = "ugxuwtb2yvehb";
    $db_password = "fwh2NXU.pdy2emq0xrf";
    $db_name = "db3hgh5rlwgnm2";
    $db_port = "3306";
    try {
        $pdo = new PDO(
            'mysql:host=lifeinsuranceguides.ca;port=3306;dbname=db3hgh5rlwgnm2',
            'ugxuwtb2yvehb',
            'fwh2NXU.pdy2emq0xrf'
        );
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>