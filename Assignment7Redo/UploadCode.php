<?php 

class folderCreate{
   require_once("db_conn.php");
    private $file;
    

    public function upload(){
       $this->file = $_POST['chooseFile'];
        $ext = $_FILES['chooseFile']['type'];
        $size = $_FILES['chooseFile']['size'];

        if(isset($_POST['upload'])){

         if($ext !="application/pdf"){
             $output = "This file is not a PDF Type.";
             return $output;
             }
             elseif($size>100000){
                  $output = "this file is too big";
                  return $output;
              }
             else{
                   $output = "File has been added";
                   addToDB();
                   return $output;
                 }
            
        }
            // }else{
            //     ("/home/a/k/akesterson/public_html/AssignmentsCPS276/Assignment7/$this->nameFolder")
            //    
            //     INSERT INTO table (name, path) VALUES ($this->nameFolder, "/home/a/k/akesterson/public_html/AssignmentsCPS276/Assignment7/$this->nameFolder");
     
    }
    public function addToDB($fileToAdd,$newFileTab){
        $sql = "INSERT INTO files(file_name, file_path) VALUES (?, ?);"
        $args[] = $fileToAdd;
        $args[] = $newFileTab;
        execute($sql,$args);
    }

}


?>