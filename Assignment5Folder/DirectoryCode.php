<?php  

class folderCreate{
    private $message;
    private $folderName;
    public function submit(){ 
        $this->message = $_POST["fileContent"];
        $this->folderName = $_POST["folderName"];
        

        if(isset($_POST['submit'])){
            if(is_dir("/var/www/html/CPS276/Assignment5Folder/Directories/$this->folderName")){
                $output = "A directory already exists with that name";
                    return $output;
               }else{
                mkdir("/var/www/html/CPS276/Assignment5Folder/Directories/$this->folderName");
                chmod("/var/www/html/CPS276/Assignment5Folder/Directories/$this->folderName", 0777);
                $myfile = fopen("/var/www/html/CPS276/Assignment5Folder/Directories/$this->folderName/readme.txt", "w+");
                fwrite($myfile, $this->message);
                fclose($myfile);
                $mylink = '<a href="http://157.230.234.151/CPS276/Assignment5Folder/Directories/' . $this->folderName . '/readme.txt"> Path where file is located  </a>';
                $output = "<p> File and directory where created <br> $mylink </p>";
                   return $output;
               }

        
        }
        
        
    }
    



}


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