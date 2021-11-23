<?php 
 $mylink = '<a href="http://russet.wccnet.edu/~akesterson/Assignment9/DisplayNotes.php"> Display Notes </a>';
 $message ="";
 
    require_once 'Date_time.php';  
    $dt = new Date_time();
    $message = $dt->add();
 

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add Note</title>
</head>
<body>
    <div class="container">
    <h1>Add Note</h1>
    <form action="form.php" method="post">
    <p> <?php echo $message ?> </p>
    <p> <?php echo $mylink ?> </p>
    <div class="mb-3">
        <label for="dateAndTime" class="form-label">Date and Time</label>
        <input type="datetime-local" class="form-control" id="dateTime" name="dateTime">
    </div>
    <div class="mb-3">
        <label for="notes" class="form-label">Notes</label>
        <textarea class="form-control" id="notes" rows="15" name="noteText"></textarea>
    </div>
    <button type="addNote" class="btn btn-primary" id="addNote" name="addNote">Add Note</button>
</form>
</div>
</body>
</html>