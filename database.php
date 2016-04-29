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
	 
	public function find_all_record_discrip($action){
     $sql = "SELECT discrip FROM record WHERE name='$action'";
     $record_set = mysqli_query($this->connection, $sql);
	 return $record_set;
	 } 
	
   public function find_all_social_link($action){
     $sql = "SELECT discrip FROM social_links WHERE record_name='$action'";
     $link_set = mysqli_query($this->connection, $sql);
     return $link_set; 	 
	 }
	 
   public function find_all_study_material($action){
     $sql = "SELECT discrip FROM study_material WHERE record_name='$action'";
     $study_set = mysqli_query($this->connection, $sql);
     return $study_set; 	 
	 }
	 
   
   public function find_images($action){
     $sql = "SELECT image_name FROM images WHERE image_name='$action.png'";
	 $image_set = mysqli_query($this->connection, $sql);
	 return $image_set;
	 }
	 
	 
   public function form_entry(){
    $query = "INSERT INTO enquiry(First_Name, Last_Name, Email, Phone_num, Course) VALUES ('{$firstname}','{$lastname}','{$email}','{$phone}','{$course}')";
    $query_result = $database->query($query);
	return $query_result;
	 }
   	 
}	 
$database = new MySQLDatabase();
?>	
