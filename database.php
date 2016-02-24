<?php
require_once("config.php");

class MySQLDatabase {

   private $connection;

   function __construct(){
     $this->open_connection();
	}

   public function open_connection() {
     $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
      }  
   public function close_connection() {
     if(isset($this->connection)) {
        mysqli_close($this->connection);
        unset($this->connection);
     }
    }
   public function query($sql) {
     $result = mysqli_query($this->connection, $sql);
	 $this->confirm_query($result);
	 return $result;
   } 
   private function confirm_query($result) {
     if(!$result) {
       die("Database query failed. ");
    }
   }
   public function mysqli_prep($string) {
     $escaped_string = mysqli_real_escape_string($this->connection, $string);
     return $escaped_string;
    }
   public function find_all_record(){
     $sql = "SELECT * FROM record";
     $record_set = mysqli_query($this->connection, $sql);
     return $record_set; 	 
	 }
	
   public function find_all_social_link(){
     $sql = "SELECT * FROM social_links";
     $link_set = mysqli_query($this->connection, $sql);
     return $link_set; 	 
	 }
	 
   public function find_all_study_material(){
     $sql = "SELECT * FROM study_material";
     $record_set = mysqli_query($this->connection, $sql);
     return $record_set; 	 
	 }
	 
   public function find_selected_record(){
     global $selected_record_id;
	 if(isset($_GET["record"])){
	 $selected_record_id = $_GET["record"];
	 } else {
	 $selected_record_id = null;
   }
  }
   public function redirect_to($new_location){
    header("Location: ".$new_location);
	exit;
   }
}	 
$database = new MySQLDatabase();
$db =& $database;

?>	