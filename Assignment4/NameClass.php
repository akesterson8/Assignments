<?php 
class AddNamesProc {
    private $names;
    private $namelist;
    private $arrName;
    public function addNames(){
        $this->names = $_POST["nameInput"];
        $this->namelist = $_POST["namelist"];
        $arrlist = array();
    
    
    $this->arrName = explode (" ", $this->names);
    $reverse = array_reverse($this->arrName);
    $togetheragain = implode(", ",$reverse);
    $arrlist = explode ("\n", $this->namelist);
    array_push($arrlist,$togetheragain);
    asort($arrlist);
    $output = implode("\n", $arrlist);
    return $output;

   
   }
   public function addClearNames(){
       if (isset($_POST['add'])){
           return $this->addNames();
       }
       elseif (isset($_POST['clear'])){
            //call clear method.
            return $this->clearNames();
       }
   }
   public function clearNames(){
    $arrlist=[];
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