<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>John Howard - Logout</title>
</head>
<body>
<?php 

session_start();
unset($_SESSION['name']);
unset($_SESSION['user_id']);
header('Location: index.php');

?>
    
</body>
</html>