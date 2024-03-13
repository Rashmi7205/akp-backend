<?php

    class Enquiry{
        private $conn = false;

        private function isValidEmail($email)
        {
            // Define the regular expression for a valid email address
            $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    
            // Use preg_match to perform the validation
            return preg_match($pattern, $email);
        }
        // connecting database
        public function __construct()
        {
            if (!$this->conn) {
                $this->conn = new mysqli("localhost", "root", "","akp") or die("Something went wrong!");
            } else {
                echo "Connection Failed!";
                exit(1);
            }
        }
        // show messages to the user
        public function get_message($message)
        {
            if (!empty($message)) {
                echo "<script>
                              window.alert('$message');
                          </script>";
            }
        }
        // create enquiry
        public function create_inquiry($user_name,$user_contact,$message){
            if (empty($user_name)) {
                $this->get_message("Username  is required!");
                return false;
            }
            if(empty($user_contact)){
                $this->get_message("Contact details is required!");
                return false;
            }
        
            $sql =  "INSERT INTO tbl_user (user_name,user_contact) VALUES ('$user_name','$user_contact');";
            $userInserted = $this->conn->query( $sql );
            if($userInserted){
                $user_id = $this->conn->insert_id;
                $sql1 = "INSERT INTO tbl_enquire (user_id,status,message) VALUES ('$user_id','pending','$message');";
                $enquireCreated = $this->conn->query($sql1);
                if(!$enquireCreated){
                    $this->get_message("Failed to create enquiry!");
                    return false;
                }
            $this->get_message("Enquiry Created successfully");
            return true;
            }else{
                $this->get_message("Failed to create User !");
                return false;
            }

        }
        // update enquiry status
        public function upadte_status($id,$status){
            if(empty($status)){
                $this->get_message("Status cant be empty");
                return;
            }
            $sql = "UPDATE tbl_enquire SET status='$status' WHERE enquire_id=$id";
            $updated = $this->conn->query($sql);
            
            if($updated){
                $this->get_message("Status updated successfully");
                return true;
            }
            else{
                $this->get_message("Cannot update status");
                return false;
            }

        } 

        //get all enquiry
        public function get_All_enquire($skip=1){

            if($skip <=1){
                $skip = 0;
            }
            else{
                $skip = $skip*6 - 6;
            }

            $sql = "SELECT * FROM tbl_enquire INNER JOIN tbl_user ON tbl_enquire.user_id=tbl_user.user_id ORDER BY tbl_enquire.date DESC LIMIT 6 OFFSET $skip";
            
            $res = $this->conn->query( $sql );
            if($res->num_rows > 0){
                $row = $res->fetch_all();
                return $row;
            }
            else{
                $this->get_message("No Data Found!");
                return false;
            }
        }
        // close the connection
        public function __destruct()
        {
            if (!$this->conn) {
                $this->conn = null;
            }
        } 
    }
    // $e = new Enquiry();
    // $e->create_inquiry("Biswanath","biswa@gmail.com","kici bi");
?>