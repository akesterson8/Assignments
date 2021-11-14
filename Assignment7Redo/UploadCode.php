<?php 

//require_once 'crud.php';
require_once 'pdo_methods.php';
class folderCreate{
    
   // private $file;
    public function upload(){
        // $file = $_POST['chooseFile'];
        if(isset($_POST['upload'])){
            $fileName = $_POST['fileName'];

          $ext = $_FILES['chooseFile']['type'];
          $size = $_FILES['chooseFile']['size'];

             if($ext !="application/pdf"){
             $output = "This file is not a PDF Type.";
             
             }
             elseif($size>100000){
                  $output = "this file is too big";
              }
             else{
                   $output = "File has been added";
                 }  
                 $this->addFile();
                 return $output;
        }
     
    }
    public function addFile(){
        echo "inside of addFile";
		$pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO files (file_name, file_path) VALUES (:fname, :fpath)";

			 
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
            [':fname', $_POST["fileName"], 'str'],
            [':fpath', "pdf_files/" . $_FILES["chooseFile"]["name"], 'str'],
			
		];

		/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
		$result = $pdo->otherBinded($sql, $bindings);

		/* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
		if($result === 'error'){
			return 'There was an error';
		}
		else {
			return 'file data has been added';
		}
	}
	}
    




?>