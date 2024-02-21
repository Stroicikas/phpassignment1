<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="inputstyles.css">
</head>
<body>
    <?php
    include "navbar.php"
    ?>
    <?php
    echo "<h1>Welcome to DK basement</h1>";
    echo "<p>This is where you now belong</p>";
    echo "<p>you will meet your end in here</p>";
    ?>
    <form action="#" method="post">
        <p>Write down your animals, make sure you put SPACE in between them <br></p>
        Input: <input type="text" name="animals">
        <input type="submit" name="send" value="send">
    </form>
    <?php 
    if(isset($_POST["send"])) {
    $data = $_POST["animals"];
    $array = explode(" ", $data);
    print_r($array);
    echo "<br>";
    $array[2] = "Struts";
    print_r($array);
    echo "<br>";
    $array[] = "Alpacka";
    print_r($array);
    echo "<br>";
    array_splice($array, 0, 1);
    print_r($array);
    echo "<br>";
    echo $array[1];
    }
    ?>
    <?php 
    include "footer.php";
    ?>
    <style>
    </style>
</body>
</html>