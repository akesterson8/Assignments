<?php  
require_once("db_conn.php");
require_once("pdo_methods.php");

$sql = "SELECT file_name, file_path FROM files";
$resultSet = createBinding($sql);

$list = '';
foreach($resultSet as $row){
    $fileName = $row['file_name'];
    $relPath = $row['file_path'];
    $list .= "<li> <a target='_blank' href='relPath'>$fileName</a></li>";
}

foreach ($resultSet as $rowVal){
    $relPath = explode("/", $rowVal['file_path']);
    $relPath = array_slice($relPath, -2);
    $relPath = implode("/", $relPath);
    $rowVal['file_path'] = $relPath;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PDO list files</title>
  </head>
  <body>
        <div class="container"> 

        <div class="form-group col-md-">
        <h2><b>List Files</b></h2>

        <?=$list?>

  </body>
</html>