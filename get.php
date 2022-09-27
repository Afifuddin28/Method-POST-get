<?php
    error_reporting(0);
    $name = $_GET['name'];
    echo "<h1>My name is <b>$name</b></h1> ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afif coder</title>
    <style>
        html {
    margin: auto;
    text-align: center;
    align-items: center;
}
h1 {
    color: blue;
    font-size: 200%;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
    </style>
</head>
<body>
        <form action="" method="GET">
            <label> What's your name :</label>
            <input type="text" name="name" placeholder="Type in this box!">
            <button type="submit">Send</button>
        </form>
</body>
</html>