<?php
$error="";
function check(){
  require_once('classes/Pdo_methods.php');
if(isset($_POST['submit'])){
  if($_POST['email'] === "you@email.com" && $_POST['password'] === "password"){
    session_start();
    $_SESSION['access'] = "accessGranted";
    header('location: index.php?page=welcome');
  }else{
    $error = "Incorrect email or password";
    return $error;
  }

  // $pdo = new PdoMethods();

  //   /* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
  //   echo $sql = "SELECT * FROM admins"; 
  //   $records = $pdo->selectNotBinded($sql);
  //   if($_POST['email'] === "email" && $_POST['password'] === "password"){

  //     session_start();
  //     $_SESSION['access'] = "accessGranted";
  
  //     header('location:pages/welcome.php');
  //   }
  //   else {
  //     return "Incorrect username or password";
  //   }
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Session Index page</title>
		
	<!--below is a script which allows IE 8 to understand HTML 5 elements.-->
	<!--[if lt IE 9]>
    	<script>
    		var elementsArray = ['abbr', 'article', 'aside', 'audio', 'bdi', 'canvas', 'data', 'datalist', 'details', 'figcaption', 'figure', 'footer', 'header', 'main', 'mark', 'meter', 'nav', 'output', 'progress', 'section', 'summary', 'template', 'time', 'video'];
    		var len = elementsArray.length;
    		for(i = 0; i < len; i++){
    			document.createElement(elementsArray[i]);
    		}
    	</script>
	<![endif]-->

	<!--CSS style sheet goes here-->
 
  </head>
  <body>
    <div class="container">
	<div id="wrapper">
    <header>
      <h1>Login</h1>
    </header>
    <main>
      
      <!-- <p>Username is "admin" password is "password"</p> -->
      <form action="index.php" method="post">
        <div class="form-group">
          <p> <?php echo $error ?></p>
          <label>Email </label>
          <input type="text" name="fname" class="form-control">
          <label>Password: </label>
          <input type="password" name="password" class="form-control">
          <button type="submit" id="submit" name="submit" class="btn btn-primary">Login</button>
        </div>
      </div>
        
        
      </form> 
    </main>
    
  </div>
  </body>
</html>