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
	 $result = mysqli_fetch_all($record_set);
	 return $result;
	 }
	
   public function find_all_social_link(){
     $sql = "SELECT * FROM social_links";
     $link_set = mysqli_query($this->connection, $sql);
	 $result = mysqli_fetch_all($link_set);
     return $result; 	 
	 }
	 
   public function find_all_study_material(){
     $sql = "SELECT * FROM study_material";
     $study_set = mysqli_query($this->connection, $sql);
	 $result = mysqli_fetch_all($study_set);
     return $result; 	 
	 }
	 
   
   public function find_all_images(){
     $sql = "SELECT * FROM images";
	 $image_set = mysqli_query($this->connection, $sql);
	 $result = mysqli_fetch_all($image_set);
	 return $result;
	 }
	 
	 
   public function form_entry(){
    $query = "INSERT INTO enquiry(First_Name, Last_Name, Email, Phone_num, Course) VALUES ('{$firstname}','{$lastname}','{$email}','{$phone}','{$course}')";
    $query_result = $database->query($query);
	return $query_result;
	 }
   	 
}	 
$database = new MySQLDatabase();

?>	
