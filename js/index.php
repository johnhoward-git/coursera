<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>John Howard - Javascript Week 1</title>
</head>
<body>

<div class="container">
<H1>Welcome to the Resume DB</H1>
<p><a href="login.php">Click here to log in</a></p>
<p>
<b>Note to self:</b> Your implementation should retain data across multiple
logout/login sessions.  This sample implementation clears all its
data periodically - which you should not do in your implementation.
</p>
</div>

<!--?php
$user = 'db_user';
$pass = '7r8ZXfBuDv2a8TA9';
$dbh = new PDO('mysql:host=localhost;dbname=coursera_resume', $user, $pass);

try {
    $dbh = new PDO('mysql:host=localhost;dbname=coursera_resume', $user, $pass);
    foreach($dbh->query('SELECT * from users') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$dbh = null;
$user = null;
$pass = null;
?-->
</body>
</html>