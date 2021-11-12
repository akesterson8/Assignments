<?php 
$output="";
if(count($_POST)>0){
  require_once 'fileUpload.php';
  $addFolder = new folderCreate();
  $output = $addFolder->submit(); 

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>File Upload</title>
</head>
<body>
    <h1>File Upload </h1>

<form>
    <p> <?php echo $output ?> <br> </p>
  <div class="mb-3">
    <label for="fileName" class="form-label">File Name</label>
    <input type="FileName" class="form-control" id="fileName" name="fileName">  
    <input type="File" class="form-text" id="chooseFile" name="file">
    
  </div>
  <button type="uploadFile" class="btn btn-primary" name="upload">Upload File</button>
</form>

</body>
</html>