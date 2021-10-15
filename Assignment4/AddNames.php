<?php
$output = ""; 
  if(count($_POST) > 0){
    require_once 'NameClass.php';
    $addName = new AddNamesProc();
    $output = $addName->addClearNames();
   }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add Names</title>
  </head>
  <body>
    <div class="container"> 
    <h1>Add Names</h1>

    
    <form action="AddNames.php" method="post">
         <button type="AddName" class="btn btn-primary" name="add">Add Name</button>
         <button type="ClearName" class="btn btn-primary" name="clear">Clear Names</button>
        <div class="form-group">
            <label for="nameText">Enter Name</label>
            <input type="Text" class="form-control" id="nameInput" name="nameInput">
    
        </div>
        <div class="form-group">
            <label for="nameList">List of Names</label>
            <textarea style="height: 500px;" class="form-control" id="namelist" name="namelist"><?php echo $output ?></textarea>
        </div>
  
  
</form>
  </div>
  </body>
</html>
