<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    /* David Kislyak
     * 1/6/20
     * 328/pp1/index.php
     * Pair Program 1
     */

    $numbers = array(7, 9, 8, 9, 8, 8, 6);

    function printArr($arr) {
        foreach($arr as $x) {
            echo "<br><p>$x</p>";
        }
    }

    printArr($numbers);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>
</body>
</html>
