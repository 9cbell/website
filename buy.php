<?php

$candy = $_POST['candy'];
$candycount = $_POST['candy'];
$soda = $_POST['soda'];
$sodacount = $_POST['soda'];

//Login Information
$usr = 'mrflemin_****';
$pw = '***********';
$db = 'mrflemin_****';

// Create connection
if (strlen($candy) > 0 or strlen($soda) > 0) {
    $conn = new mysqli('localhost', $usr, $pw, $db);
}
// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "INSERT INTO tablename (candy, candycount, sodacount, soda) VALUES ('" . $candy . "', '" . $candycount . "', '" . $soda . "', '" . $sodacount . "')";

?>
