<!DOCTYPE html>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="gasstyles.css">
        <meta http-equiv="X-UA-Compatible " content="ie=edge">
        <title>Gas Rewards</title>
</head>
    
<h1 class="Title2">
        Gas Rewards <img id="MPI" src="https://moneymorning.com/wp-content/blogs.dir/1/files/2013/06/Natural-Gas-Q.jpg">
        Program
</h1>
    

    
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Order History</title>
        <style media="screen">
        .flexbox{
            display: flex;
            width: 500px;
            border:1px solid black;
        }
            .v1{
                flex:1;
            }
        </style>
    </head>
    <body>
        <?php
        //Login Information
        //DO NOT UPLOAD PASS TO GITHUB
        $usr = 'mrflemin_charlie';
        $pw = 'dF3,66%GgEcf';
        $db = 'mrflemin_charlieDB';
        //create and check connection
        $conn = new mysqli('localhost', $usr, $pw, $db);
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM history JOIN items ON (history.item_id = items.id) ORDER BY history.date , history.user_id";
        $result = $conn->query($sql);
        echo "<br>";
        echo "<article class=\"flexbox\">";
        echo "<div class=\"v1\"><strong>Date</strong></div>";
        echo "<div class=\"v1\"><strong>User</strong></div>";
        echo "<div class=\"v1\"><strong>Item</strong></div>";
        echo "<div class=\"v1\"><strong>Amount of Item</strong></div>";
        echo "</article>";
        if ($result->num_rows > 0) {
            while($row = $result-> fetch_assoc()){
                echo "<article class=\"flexbox\">";
                echo "<div class=\"v1\">#".$row['date']."</div>";
                echo "<div class=\"v1\">".$row['user_id']."</div>";
                echo "<div class=\"v1\">".$row['item_id']."</div>";
                echo "<div class=\"v1\">".$row['quantity']."</div>";
                echo "</article>";
            }
        } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
            echo "<br>";
            echo "Result: ". $result;
        }
        echo "<a href=\"MainPage.html\" onclick=\"location.reload()\">Go back to home page</a>";
        $conn->close();
         ?>
</body>
</html>



</html>