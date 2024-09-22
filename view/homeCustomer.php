<?php
require_once('../model/database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    $res = showCarDetails();
    echo '<table border="1">';
    echo "<tr>";
    echo "<th>Car Model</th>";
    echo "<th>Type of Vehicle</th>";
    echo "<th>Sit No.</th>";
    echo "<th>Rental Rate (per day)</th>";
    echo "</tr>";
    while ($r = $res->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$r['Car Model']}</td>";
        echo "<td>{$r['Type of Vehicle']}</td>";
        echo "<td>{$r['Sit No.']}</td>";
        echo "<td>{$r['Rental Rate (per day)']}</td>";
        echo "</tr>";
    }
    ?>

    <form action="./login.php">
        <button>Back</button>
    </form>


</body>

</html>