<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2 style="color: navy">Calculate Sum of Column in Array2D</h2>
<form method="post">
    <label>Enter number of row: </label>
    <br>
    <input type="text" name="row">
    <br><br>
    <label>Enter number of column: </label>
    <br>
    <input type="text" name="column">
    <br><br>
    <label>Enter position column need calculate: </label>
    <br>
    <input type="text" name="positionColumn">
    <br><br>
    <button type="submit">Print</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $row = $_REQUEST["row"];
    $column = $_REQUEST["column"];
    $positionColumn = $_REQUEST["positionColumn"];

    $array2D = [];
    echo "Array 2D is: <br>";
    for ($i = 0; $i < $row; $i++) {
        $array2D[$i] = [];
        for ($j = 0; $j < $column; $j++) {
            $array2D[$i][$j] = rand(0, 9);
            echo $array2D[$i][$j] . " ";
        }
        echo "<br>";
    }
    echo "Sum of column $positionColumn is: ";
    $sum = 0;
    for ($i = 0; $i < $row; $i++) {
        $sum += $array2D[$i][$positionColumn - 1];
    }
    echo $sum;
}
?>
