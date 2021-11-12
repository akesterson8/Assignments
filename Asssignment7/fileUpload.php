<?php 

class folderCreate{
    private $nameFolder;
    public function submit(){
       // $this->nameFolder = $_POST["file"];
       // $allowed = '.pdf';
        //$fileName = $_FILES["file"]["size"];
        //$ext = pathinfo($this->$nameFolder, PATHINFO_EXTENSION);
        
        if(isset($_POST["upload"])){
            $output = "testing";
            return $output;
        }
        // if(isset($_POST['upload'])){
        //     if($_FILES["file"]["size"] > 100000){
        //         $output = "File is too big";
        //         return $output;
        //     }else{
        //         $output = "testing";
        //     }
            // }else if ($ext != $allowed){
            //     $output = "File is not PDF";
            //     return $output;
            // }
            // }else{
            //     ("/home/a/k/akesterson/public_html/AssignmentsCPS276/Assignment7/$this->nameFolder")
            //     CREATE TABLE table(
            //         id int NOT NULL AUTO_INCREMENT,
            //         name Char(50) NULL,
            //         path Char(255) NULL
            //     )ENGINE = InnoDB;
            //     INSERT INTO table (name, path) VALUES ($this->nameFolder, "/home/a/k/akesterson/public_html/AssignmentsCPS276/Assignment7/$this->nameFolder");
            // }
        }
    }
}



?>