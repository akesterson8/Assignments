<?php
$b =1;
$k =1;

echo "<table border='1'>";
while ($b < 16){
    echo"<tr>";
    $k = 1;
    while ($k < 6){
        echo"<td> Row $b Cell $k </td>";
        $k++;
    }
    echo "</tr>";
    $b++;
}
echo"</table>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>