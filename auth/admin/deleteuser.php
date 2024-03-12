<?php
    include("./user.php");
    if(isset($_GET['id'])){
        $blog = new User();
        $uid = $_GET['id'];
        $blog->del_user($uid);    
    }else{
        header("Location:/pr-1/auth/admin");
    }
?>