<?php  

class folderCreate{
    private $message;
    private $folderName;
    public function submit(){ 
        $this->message = $_POST["fileContent"];
        $this->folderName = $_POST["folderName"];
        
        if(isset($_POST['submit'])){
        mkdir("/var/www/html/CPS276/Assignment5/Directories/$this->folderName");
        chmod("$this->folderName", 0777);
        }
        
        // $myfile = fopen("$dirname/readme.txt", "w");
        // chmod("readme.txt",0777);
        // fwrite($myfile,$this->message);
        // fclose($myfile);
       
       // $directoryPath = dirname($path);
       //$this->message = fopen($path/$this->foldername/"readme.txt");
    }


    //public function check()
           // glob()
    



}



//<a href="http://157.230.234.151/CPS276/Assignment5"> Click to View file </a>


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