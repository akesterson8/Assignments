<?php

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
      <ul> <?php for ($b =1; $b < 5; $b++)
                { ?>
          <li> <?php echo $b. "<br>"; ?>
            <ul> <?php for ($k = 1; $k < 6; $k++)
                    { ?>
               <li> 
                    <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".$k."<br>"; ?>
               </li> 
             <?php  } ?>
            </ul>
          </li>
        <?php   } ?>
      </ul>

</body>
</html>