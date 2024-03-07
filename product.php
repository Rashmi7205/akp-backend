<?php
include "./constants.php";
class Product
{
    private $conn = false;
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
    //add a new product
    public function add_new_product($pr_name,$pr_desc,$pr_img,array $pr_sizes,$pr_company,$category)
    {
        session_start();
        if(!isset($_SESSION['USER_CRED'])){
            $this->get_message("You Cannot access this route!");
            header("Location:".SITE_URL);
            exit();
        }
        $pr_sizes = implode(',' , $pr_sizes);
        if (!$this->conn) {
            $this->get_message("Connection Lost");
            return false;
        }
        if(empty($pr_name) || empty($pr_desc) || empty($pr_img)|| empty($pr_company) || empty($category)) {
            $this->get_message("All fields are required!");
            return false;
        }
       
        $sql="INSERT INTO tbl_product (pr_name, pr_desc, pr_img, pr_sizes, pr_company,pr_category) VALUES ('$pr_name','$pr_desc','$pr_img','$pr_sizes','$pr_company','$category');";

        $res = $this->conn->query($sql);
        if ($res) {
            $this->get_message("Product Added Successfully!");
            return true;
        }else{
            echo $this->conn->error;
            $this->get_message("Error Adding Product!");
            return false;
        }
    }
    // update  product
    public function  update_product($pr_name,$pr_desc,$pr_img,array $pr_sizes ,$pr_company){
        if (!$this->conn) {
            $this->get_message("Connection Lost");
            return false;
        }
        session_start();
        if(!isset($_SESSION['USER_CRED'])){
            $this->get_message("You Cannot access this route!");
            header("Location:".SITE_URL);
            exit();
        }
        $pr_name = $this->conn->real_escape_string($pr_name);
        $pr_desc = $this->conn->real_escape_string($pr_desc);
        $pr_img = $this->conn->real_escape_string($pr_img);
        $pr_sizes = $this->conn->real_escape_string(implode(",",$pr_sizes));

        if(empty($pr_name) || empty($pr_desc) || empty($pr_img)|| empty($pr_company)) {
            $this->get_message("All fields are required!");
            return false;
        }
       
        $sql="INSERT INTO tbl_product (pr_name, pr_desc, pr_img, pr_sizes, pr_company) VALUES ('$pr_name','$pr_desc','$pr_img','$pr_sizes','$pr_company');";

        $res = $this->conn->query($sql);
        if ($res) {
            $this->get_message("Product Added Successfully!");
            return true;
        }else{
            $this->get_message("Error Adding Product!");
            return false;
        }
    }
    // delete product   
    public function delete_product(int $id){
        session_start();
        if(!isset($_SESSION['USER_CRED'])){
            $this->get_message("You Cannot access this route!");
            header("Location:".SITE_URL);
            exit();
        }
        if(!$this->conn){
            $this->get_message("Connection Failed! | Try again");
            return ;
        }
        $sql= "DELETE FROM tbl_products WHERE  pr_id='$id'";
        $res = $this->conn->query($sql);
        if ($res) {
            $this->get_message("Product Deleted Successfully!");
            return true;
        }else{
            $this->get_message("Cannot delete the data ");
            return false;
        }
    }   
    // get the product analytics
    


    public function __destruct()
    {
        if (!$this->conn) {
            $this->conn = null;
        }
    }
}
// $pr = new Product();
// $pr->add_new_product("product1","any desc","image_link",array("100x100","200x200"),"Company1","cat1");
?>