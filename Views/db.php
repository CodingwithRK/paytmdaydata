<?php

    $servername = 'localhost';
    $username ='root';
    $password = '';
    $database = 'paytm';

    mysqli_report(MYSQLI_REPORT_STRICT);

    try {
        $con = new mysqli($servername, $username, $password, $database);
        echo "Connection Success";
        exit();
    } catch (Exception $ex) {
        echo "Connection Failed";
        exit();
    }

?>