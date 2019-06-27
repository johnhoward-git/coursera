<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>John Howard PHP</title>
</head>
<body>
    <h1>John Howard PHP
    </h1>

    <div>
        <pre>
    **********
    **********
         **
         **
         **
    **   **
     ** **
      ***
        </pre>
    </div>
    <div>
    <?php
        $txt = 'The SHA256 computation of "John Howard" is ';
        echo $txt . hash('sha256', 'John Howard');
    ?>
    </div>

</body>
</html>