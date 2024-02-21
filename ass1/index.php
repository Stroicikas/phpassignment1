<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="styles.css">
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
    echo "<p>Denna text är genererad med utskriftskommandot i PHP</p>";
    ?>
    <?php 
    include "form.php";
    ?>
    <?php
    if (isset($_POST["send"]))
    {
        if (trim($_POST["name"]) == "") {
            $name = "nameundefined";
        }
        else {
            $name = $_POST["name"];
        }
        echo  "Welcome, ".$name."<br>";
        echo  "Your name reverse: ".strrev($name)."<br>";
        echo  "Your name in lower case: ".strtolower($name)."<br>";
        echo  "Your name in UPPER case: ".strtoupper($name)."<br>";
        echo  "Your name character lenght: ".strlen($name)."<br>";
    }
    ?>
    <?php
    include "footer.php";
    ?>
</body>
</html>