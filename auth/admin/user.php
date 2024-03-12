<?php
    include "../.././constants.php";
    class User{
        // initializing connection to false
        private $conn = false;
        // connecting database
        public function __construct(){
            if(!$this->conn){
                $this->conn = new mysqli(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("Something went wrong!");
                
            }
            else{
                echo "Connection Failed!";
                exit(1);
            }
        }
        // show messages to the user
        public function get_message($message){
            if(!empty($message)){
                echo "<script>
                    window.alert('$message');
                </script>";
            }
        }

        // get user details from the user
        public function save_user_details($name,$contact){
            if(empty($name)){
                $this->get_message("Name is required!");
                return ;
            }
            if(empty($contact)){
                $this->get_message("Contact number is required!");
                return ;
            }
            if($this->conn){
                $sql = "INSERT INTO tbl_user (user_name,user_contact)  VALUES ('$name','$contact');";
                $result = $this->conn->query($sql);
                if($result){
                    $this->get_message("User saved successfully!");
                    return true;
                }
                else{
                    $this->get_message("Error in saving data.");
                    return false;
                }
            }else{
                $this->get_message("Database connection failed!");
                return false;
            }
        }
        // get all the user details
        public function get_user_details($page=1){
            if($this->conn){
                $limit= 5;
                $skip = 0;
                if($page<=1){
                    $skip = 0;
                }
                else{
                    $skip = ($page * $limit)-$limit; 
                }
                $sql = "SELECT * FROM tbl_user ORDER BY user_created DESC LIMIT $limit OFFSET $skip ;";
                $result = $this->conn->query($sql);
                if($result->num_rows > 0){
                    $row = $result->fetch_all();
                    return $row;
                }
                else{
                    echo $this->conn->error;
                    $this->get_message("Cannot fetch any record!");
                    return null;
                }
            }else{
                $this->get_message("Database connection Failled!");
                return;
            }
        }
        // delete user
        public  function del_user($id) {
            if(!$this->conn){
                $this->get_message("Connection Failed");
                return;
            }
            if(empty($id)){
                $this->get_message("Invalid User ID Provided.".$id);
                return;
            }
            session_start();
            if(!isset($_SESSION['USER_CRED'])){
                $this->get_message("Unauthorized access");
                return;
            }
            $sql = "DELETE FROM tbl_user WHERE user_id=$id";
            $res = $this->conn->query( $sql );
            if($res){
                $this->get_message("User Deleted Successfully!");
                header( 'Location: ./index.php' ) ;
            }
        }
        // close the connection
        public function __destruct(){
            if(!$this->conn){
                $this->conn = null;
                $this->conn->close();                
            }
        }   

    }  
?>