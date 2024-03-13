<?php
class Blog
{
    private $conn = false;
    // create connection
    public function __construct()
    {
        if (!$this->conn) {
            $this->conn = new mysqli("localhost","root", "", "akp") or die("Something went wrong!");
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
    // create blog post
    public function addPost($title,$desc, $image,$content){
        if(!$this->conn){
            $this->get_message("Connection Lost!");
            return false;
        }
        if(empty($title)){
            $this->get_message("Title is empty");
            return false;
        }
        if(empty($desc)){
            $this->get_message("Description is empty");
            return false;
        }
        if(empty($content)){
            $this->get_message("Content is empty.");
            return false;
        }
        if(empty($image)){
            $this->get_message("Image is required!");
            return false;
        }
        $title = $this->conn->real_escape_string($title);
        $desc = $this->conn->real_escape_string($desc);
        $content = $this->conn->real_escape_string($content);
        session_start();
        if(isset( $_SESSION["USER_CRED"])){
            if($_SESSION["USER_CRED"]["role"] == "ADMIN" || $_SESSION["USER_CRED"]["role"] == "MANAGER"){
                $id = $_SESSION['USER_CRED']["admin_id"];
                $sql = "INSERT INTO `tbl_blog` (`blog_title`, `blog_image`, `blog_content`, `admin_id`, `blog_desc`) VALUES ('$title','$image','$content',$id,'$desc');";
                $res = $this->conn->query($sql);
                if($res){
                    $this->get_message("Blog created successfully");
                    return true;
                }else{
                    echo $this->conn->error;
                    $this->get_message("Failed to create blog");
                    return  false;
                }
            }else{
                $this->get_message("You are not authorized for this action.");
                // header("Location: index.php");
                exit();
            }   
        }else{
            $this->get_message("Unauthorized user!");
            return false;
        }
    }
    // delete  blog post
    public function delete_blog($bid) {
        // check for the blog id
        if(!$bid){
            $this->get_message("Provide blog id");
            return false;
        }
        // chreck for the connection
        if(!$this->conn){
            $this->get_message("Connection failed");
            exit();
        }
        // check for the authorization
        session_start();
        if (!isset($_SESSION['USER_CRED'])) {
            $this->get_message("You are not an admin");
            exit();
        }
        $qry="SELECT * FROM tbl_blog WHERE blog_id=$bid";
        $blog_exist = $this->conn->query($qry);
        if($blog_exist->num_rows > 0){
            $blog = $blog_exist->fetch_assoc();
            // deleting the image file from the server
            if ($blog && $blog['blog_image'] != '') {
                $imagePath = '../' . $blog['blog_image'];
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $sql = "DELETE FROM tbl_blog WHERE blog_id=$bid";
            $deleted  =  $this->conn->query($sql);
            if ($deleted) {
               $this->get_message("Blog deleted successfully");
               return true;
           } else {
               $this->get_message("Error deleting the blog");
               return false;
           }
        }else{
            $this->get_message("This blog doesnot exist");
            return false;
        }
    }
    // fetch all blog  posts
    public function get_all_blogs($skip=1){
        if(!$this->conn){
            $this->get_message("Connection Failed!");
            return false;   
        }
        $limit = 6;
        if($skip == 1){
            $skip = 0;
        }
        if($skip  >1){
            $skip = $skip * $limit -$limit;
        }
        $sql = "SELECT * FROM tbl_blog ORDER BY date DESC LIMIT " . $limit . " OFFSET " . $skip . ";";
        $res = $this->conn->query($sql);
        if($res-> num_rows > 0){
            $blogs  = $res->fetch_all();
            return $blogs;
        }else{
            echo $this->conn->error;
            $this->get_message("There is no blogs");
            return false;
        }
    }
    // get blog by id
    public function get_blog_by_title($title) {
        if(!$this->conn){
            $this->get_message("Connection faliled");
            exit();
        }
        if(!$title){
            $this->get_message("Provide blog title");
        }
        $qry = "SELECT * FROM tbl_blog WHERE blog_title = '$title'";
        $res = $this->conn->query( $qry );
        if( $res->num_rows > 0 ) {
            $blog = $res->fetch_assoc();
            if($blog){
                return $blog;
            }
            else{
                return false;
            }
        }else{
            $this->get_message("Cannot get the blog");
            return false;
        }
    }

    // get blog by id 
    public function get_blog_by_id($id) {
        if(!$this->conn){
            $this->get_message("Connection faliled");
            exit();
        }
        if(!$id){
            $this->get_message("Provide blog id");
        }
        $qry = "SELECT * FROM tbl_blog WHERE blog_id = $id";
        $res = $this->conn->query( $qry );
        if( $res->num_rows > 0 ) {
            $blog = $res->fetch_assoc();
            if($blog){
                return $blog;
            }
            else{
                return false;
            }
        }else{
            $this->get_message("Cannot get the blog");
            return false;
        }
    }
    // update blog by id
    public function update_blog_by_id($id,$title,$desc,$image,$content) {
        if(!$this->conn){
            $this->get_message("Connection failed!");
            return false;
        }
        if(empty($id)){
            $this->get_message("Provide an id");
            return false;
        }
        if(empty($title)){
            $this->get_message("Title is empty");
            return false;
        }
        if(empty($desc)){
            $this->get_message("Description is empty");
            return false;
        }
        if(empty($content)){
            $this->get_message("Content is empty.");
            return false;
        }
        if(empty($image)){
            $this->get_message("Image is required!");
            return false;
        }
        $title = $this->conn->real_escape_string($title);
        $desc = $this->conn->real_escape_string($desc);
        $content = $this->conn->real_escape_string($content);
        $sql = "UPDATE tbl_blog SET blog_title='$title',blog_image='$image',blog_content='$content',blog_desc='$desc' WHERE blog_id=$id";

        $updated = $this->conn->query($sql);
        if($updated){
            $this->get_message("This  blog has been updated successfully");
            return true;
        }
        else{
            echo $this->conn->error;
            $this->get_message("Cannot update the blog ");
            return false;
        }
        
    }

    // close the connection
     public function __destruct()
     {
         if (!$this->conn) {
             $this->conn->close();    
         }
     }    
}
// $add = new Blog();
// $blog = $add->get_all_blogs(1);
// echo "<pre>";
// print_r($blog);
// echo "</pre>";

?>