<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    echo "The Request method is POST"."<br/>";
    echo $_POST["name"]."<br/>";
    echo $_POST["password"];
    }elseif($_SERVER['REQUEST_METHOD'] === 'GET'){
    echo "The Method used is GET"."<br/>";
    echo $_GET["name"]."<br/>";
    echo $_GET["password"];
}

    ?>
</body>
</html>