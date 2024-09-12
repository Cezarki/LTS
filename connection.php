<?php
function connection(){
    $localhost = 'localhost';
    $servername = 'root';
    $password = '';
    $database = 'cuyapo_municipals';

    $conn = mysqli_connect($localhost, $servername, $password, $database);

    if($conn->connect_error){
        die('Connection Failed'.$conn->connect_error);
    } else {
      //  echo 'Connection Successfully';
    }

    return $conn;
}

?>