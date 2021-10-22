<?php 
$output="";
  if(count($_POST)>0){
    require_once 'DirectoryCode.php';
    $addFolder = new folderCreate();
    $output = $addFolder->submit(); 

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

    <title>File and Directory Assignment</title>
  </head>
  <body>
    <div class="container"> 
    <h1>File and Directory Assignment</h1>

    <form action="Form.php" method="post">
         
         <p>Enter a folder name and the contents of a file. Folder names should contain alpha numeric characters only. <br> </p>
         <p> <?php echo $output  ?> <br> </P>
        <div class="form-group">
            <label for="folderName">Folder Name</label>
            <input type="Text" class="form-control" id="folderName" name="folderName">
    
        </div>
        <div class="form-group">
            <label for="fileContent">File Content</label>
            <textarea style="height: 200px;" class="form-control" id="fileContent" name="fileContent"></textarea>
        </div>
        <button type="addFolder" class="btn btn-primary" name="submit">Submit</button>
  
</form>
  </div>
  </body>
</html>