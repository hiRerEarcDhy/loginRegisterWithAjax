<?php

//The code below demonstrates a PDO connection to a database and a try catch block that will display errors about the connection if an exception is thrown. You will need to add your own database name, user and password for this PDO to work on your own project.


$dsn = 'mysql:host=localhost;dbname=blogs';
$username = 'root';
$password = '';

try {

    //create an instance of the PDO class with the required parameters
    $db = new PDO($dsn, $username, $password);
    echo "";

    //set error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
} catch (PDOException $ex) {
    $error_message = $ex->getMessage();
    echo "An error occured while connecting to the database: $error_message";
}
?>