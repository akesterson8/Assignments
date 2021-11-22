<?php  
$mylink = '<a href="http://russet.wccnet.edu/~akesterson/Assignment9/form.php"> Add Note </a>';
require_once 'Date_time.php';
$data = new Date_time();
$table = $data->getData();
 print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Display Notes</title>
    <style> table, th, td{border:1px solid grey;} </style>
</head>
<body>
    <div class="container">
    <h1>Display Notes</h1>
        <form action="DisplayNotes.php" enctype="multipart/form-data" method="post">
            <p> <?php echo $mylink ?></p>
            <div class="mb-3">
                <label for="dateAndTime" class="form-label">Beginning Date</label>
                <input type="date" class="form-control" id="begDate" name="begDate">
            </div>
            <div class="mb-3">
                 <label for="dateAndTime" class="form-label">Ending Date</label>
                 <input type="date" class="form-control" id="endDate" name="endDate">
            </div>
            <button type="getNotes" class="btn btn-primary" id="getNotes" name="getNotes">Get Notes</button>

            <div class="form-row"> <? echo $table; ?> </div>
            
        </form>
    </div>
</body>
</html>