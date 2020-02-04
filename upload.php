<!-- Aakash patel task5 -->
<!-- 8622564 -->



<?php
require('mysqli_connect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')

{
    if (isset($_FILES['upload']) && !empty($_POST['username']) && !empty($_POST['profile']))
    {
        $name = mysqli_real_escape_string($dbc,trim($_POST['username']));
        $profile = mysqli_real_escape_string($dbc,trim($_POST['profile']));    
        $image = $_FILES['upload']['name'];
    
    
    $dir = mkdir("uploads/".$name);
    $target_file = "uploads/".$name. "/".basename($_FILES['upload']['name']);
    if (move_uploaded_file ($_FILES['upload']['tmp_name'],$target_file))
    {
        echo "file has uploaded";
        $query = "INSERT into users (username, profile,image) VALUES ('$name' ,'$profile','$image')";
        mysqli_query( $dbc, $query);
        move_uploaded_file($_FILES['upload']['tmp_name'], $target_file);
    

}
    }
}





?>
        
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
<form action ="upload.php" method = "POST" enctype = "multipart/form-data">
<fieldset>
username <input type="text" name="username">
profile <input type="text" name="profile">
<input type ="file" name ="upload">
<input type = "submit" name = "submit" value ="submit">
</fieldset>
</form>
</body>
</html>
