<?php
    include "./constants.php";
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
                $this->conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die("Something went wrong!");
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
        public function create_inquiry($user_name,$user_contact,$product_id,$quantity,$size,$message){
            if (empty($user_name)) {
                $this->get_message("Username  is required!");
                return false;
            }
            if(empty($user_contact)){
                $this->get_message("Contact details is required!");
                return false;
            }
            if(empty($product_id)){
                $this->get_message("Product id  is missing!");
                return false;
            }
            if(empty($quantity)){
                $this->get_message("Quantity is missing!");
                return false;
            }
            if(empty($size)){
                $this->get_message("Please provide size.");
                return false;
            }
            $sql =  "INSERT INTO tbl_user (user_name,user_contact) VALUES ('$user_name','$user_contact');";
            $userInserted = $this->conn->query( $sql );
            if($userInserted){
                $user_id = $this->conn->insert_id;
                $sql1 = "INSERT INTO tbl_enquire (user_id,product_id,quantity,size,status,message) VALUES ('$user_id','$product_id','$quantity','$size','Pending','$message');";
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

        //get all enquiry
        public function get_All_enquire(){
            $sql = "SELECT * FROM  tbl_enquire INNER JOIN 
            tbl_user  ON tbl_user.user_id=tbl_enquire.user_id INNER JOIN tbl_product ON tbl_product.pr_id=tbl_enquire.product_id;";
            
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
    $en = new Enquiry();
    // $en->create_inquiry("user2","user1@email.com",1,2,"100x100","message");
    $all_en = $en->get_All_enquire();
    if($all_en){
        echo "<pre>";
        print_r($all_en);
        echo "</pre>";
    }
?>