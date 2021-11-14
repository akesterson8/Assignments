<?php 
$output="";
$mylink = '<a href="http://russet.wccnet.edu/~akesterson/Assignment7Redo/List.php"> Show File List </a>';
if(count($_POST)>0){
  require_once 'UploadCode.php';
  $addFolder = new folderCreate();
  $output = $addFolder->upload(); 
  //$chooseFile = !empty($_REQUEST['chooseFile']) ? $_REQUEST['chooseFile'] : '';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>File Upload</title>
</head>
<body>
    <h1>File Upload </h1>

<form action="Upload.php" enctype="multipart/form-data" method="post">
    <p> <?php echo $mylink ?> <br> </p>
    <p> <?php echo $output ?> <br> </p>
  <div class="mb-3">
    <label for="fileName" class="form-label">File Name</label>
    <input type="FileName" class="form-control" id="fileName" name="fileName">  
    <input type="File" class="form-text" id="chooseFile" name="chooseFile">
    
  </div>
  <button type="uploadFile" class="btn btn-primary" id="upload" name="upload">Upload File</button>
</form>

</body>
</html>