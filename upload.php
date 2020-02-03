<!-- Aakash patel task5 -->
<!-- 8622564 -->



<?php
$dbc = mysqli_connect('name', 'profile', 'images') OR die('Could not connect to
MySQL: ' . mysqli_connect_error() );
if ($_SERVER['REQUEST_METHOD'] == 'POST')

{
    if (isset($_FILES['upload'])|| (!empty($_POST['username']))|| (!empty($_POST['profile'])))
    {
        $name = mysqli_real_escape_string($dbc,trim($_POST['username']));
        $profile = mysqli_real_escape_string($dbc,trim($_POST['profile']));    
        $image = $_FILES['upload']['name'];
    }
    else{
        echo "Error file not accepted";

    }
    mkdir(“uploads/” . $name);
    if (move_uploaded_file($_FILES['upload']['tmp_name'],"../uploads/$_FILES['upload']
    ['username']}"))
    {
        echo "file has uploaded";
        $query = "instert into users(name,profile,images) values ("'.$name' ,'.$profile','.$images'")";
        mysqli_query( $dbc, $query);
        move_uploaded_file($_FILES['dbc']['tmp_name'],$dbc.$users
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
