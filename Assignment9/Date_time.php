<?php 

require_once 'Pdo_methods.php';
class Date_time{
    private $message;

    public function add(){
        if(isset($_POST['addNote'])){
            $note = $_POST['noteText'];
            $date = $_POST['dateTime'];
           // $datePHP = strtotime($date);
           // $datesql = getdate($date);
           if(empty($note) || empty($date)){
               $this->message = "You must enter a Note and Date.";
           }else{
            $this->message = "Note added";
            $this->addData();
           }return $this->message;
        }
        
    }
    public function addData(){
        
        $timeStamp = $_POST["dateTime"];
        $noteText = $_POST["noteText"];
        date_default_timezone_set('America/Detroit');
        $timeStamp = strtotime($timeStamp);
        
		$pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO dateNotes (note, dates) VALUES (:note, :dates)";

	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
            [':note', $noteText, 'str'],
            [':dates', $timeStamp, 'int'], 
		];

		/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
		$result = $pdo->otherBinded($sql, $bindings);

		/* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
		if($result === 'error'){
			return 'There was an error';
		}
		else {
			return 'data has been added';
		}
	}
    public function getData(){
        //$sql = "SELECT date_time, note FROM note WHERE date_time BETWEEN :begDate AND :endDate ORDER BY date_time DESC";
        require_once('DisplayNotes.php');
        date_default_timezone_set('America/Detroit');
       
        $pdo = new PdoMethods();
        if(isset($_POST['getNotes'])){
         $begStamp = strtotime($_POST['begDate']);
         $endStamp = strtotime($_POST['endDate']);
         $sql = "SELECT note, dates FROM dateNotes WHERE dates BETWEEN $begStamp AND $endStamp ORDER BY dates DESC";
         // $sql = "SELECT * FROM dateNotes";
          
           $records = $pdo->selectNotBinded($sql);

           if($records === 'error'){
			return 'There has been and error processing your request';
		}
		else {
			if(count($records) != 0){
				return $this->createList($records, $begStamp, $endStamp);		
			}
			else {
				return 'no notes found';
			}
		}
        }   
    }       
    public function createList($records, $begStamp, $endStamp){
		
        date_default_timezone_set('America/Detroit');
        $begStamp = strtotime($_POST['begDate']);
        $endStamp = strtotime($_POST['endDate']);

        $table = '<tr><th>Date and Time</th><th>Note</th>';
		foreach ($records as $timeValue){
            $stamp = $timeValue['dates'];
            $newstamp = date('m/d/Y h:i A',$stamp);
                
            $table.="<tr><td>". $newstamp .
            "</td><td>" . $timeValue['note'].
            "</td></tr>";
            
    }return $table;
		
	}

	
}


?>