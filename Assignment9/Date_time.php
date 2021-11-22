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
            $this->addData();
        }
        
    }
    public function addData(){
        echo "inside of addFile ";
		$pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO dateNotes (note, dates) VALUES (:note, :dates)";

        //convert date to date format
        //mktime or strtotime
      //  date_default_timezone_set('America/Detroit');
       // $datePHP = date_create_from_format('Y-m-d\TH:i',$_POST['dateTime']);
       // $dateMySql = $datePHP->format('Y-m-d H:i:00');
        //$dated = mktime($dateMySql);
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
            [':note', $_POST["noteText"], 'str'],
            [':dates', $_POST["dateTime"], 'str'],
            
			
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
       
        $pdo = new PdoMethods();
        if(isset($_POST['getNotes'])){
          $sql = "SELECT note, dates FROM dateNotes WHERE dates BETWEEN :begDate AND :endDate ORDER BY dates DESC";
          //$sql = "SELECT * FROM dateNotes";
        $bindings = [   //change bindings
            [':begDate', $_POST["begDate"], 'str'],
            [':endDate', $_POST["endDate"], 'str'],
            
        ];
           $resultSet = $pdo->selectBinded($sql,$bindings);
           
           //$resultSet = $pdo->otherBinded($sql,$bindings);
           //$resultSet = $pdo->selectNotBinded($sql);
        
        //if(resultSet = error) or count of result set is less than 0 than nothing found, if its greater than print table
        if($resultSet === 'error'){
            echo "inside error getDate()";
            return "Error found";
        }elseif(count($resultSet) <= 0){
            echo "inside lessthan 0";
            return "nothing found";
        }elseif(count($resultSet) >= 0){
            echo "inside greaterthan 0";
        $table = '<table class="table table-striped table-bordered">';
        $table .= '<thead><tr><th>Date and Time</th><th>Note</th></tr></thead>';
        $table .= '<tbody>';
        foreach($resultSet as $row){
        $table .= '<tr>';
        $table .= '<td>' . $row["note"];
        $table .= '<td>' . $row["dates"] . '</td>';
        $table .= '</tr>';
        $table .= '</tbody>';
        $table .= '</table>';
        return $table;
        } 
        } 
          
        }
		
	}
}


?>