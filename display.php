<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
     <p><a href="upload.php" ~&nbsp>Home</a> <a href="display.php">View files</a></p>
</body>
</html>
<?php
require('mysqli_connect.php');

 $query = "SELECT * FROM users";
$q1 = @mysqli_query($dbc,$query);
 while($row = mysqli_fetch_array($q1,MYSQLI_ASSOC)) {
    echo "<p>Userid:".$row['userid']."<br/> username: ".$row['username']. "<br/> profile: ".$row['profile']. "<br/>image:<img src=uploads/".$row['username']."/".$row['image']."></p>";
  } 
  ?>  






