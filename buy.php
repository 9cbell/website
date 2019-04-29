<?php
//Grabs information from the previous html form
//When you hit submit.
$user = 1;
$candy = (int)$_POST['candy'];
$candycount = (int)$_POST['c_count'];
$soda = (int)$_POST['soda'];
$sodacount = (int)$_POST['s_count'];

//Login Information
//DO NOT UPLOAD PASS TO GITHUB
$usr = 'mrflemin_charlie';
$pw = 'dF3,66%GgEcf';
$db = 'mrflemin_charlieDB';

// Create connection
if ($candycount > 0 or $sodacount > 0) {
    $conn = new mysqli('localhost', $usr, $pw, $db);
}
// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "INSERT INTO history (date, user_id, item_id, quantity ) VALUES  (CURDATE(), {$user}, {$soda}, {$sodacount})";

if ($conn->query($sql) === true) {
    echo "Successful Order!";
    echo "<a href=\"MainPage.html\" onclick=\"location.reload()\">Go back to home page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$sql2 = "INSERT INTO history (date, user_id, item_id, quantity ) VALUES (CURDATE(), {$user}, {$candy}, {$candycount})";

if ($conn->query($sql2) === true) {
    echo "Successful Order!";
    echo "<a href=\"MainPage.html\" onclick=\"location.reload()\">Go back to home page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}
$conn->close();

?>


