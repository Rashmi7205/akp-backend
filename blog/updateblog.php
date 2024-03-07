<?php
include("./blog.php");
$id=null;
if (isset($_GET['id'])) {
    $blog  = new Blog();
    $id = $_GET['id'];
    $blogDetails = $blog->get_blog_by_id($_GET['id']);
    $targetFile = null;
    if (isset($_FILES['image'])&& $_FILES['image']['error']<=0){
        $image = $_FILES['image']['tmp_name'];

        $targetDirectory = './uploads/';
        $targetFile = $targetDirectory . basename($_FILES['image']['name']);
        move_uploaded_file($image, $targetFile);
       
    }else{
        $targetFile = $blogDetails['blog_image'];
    }
    $content=$_POST['editor'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
        
    $updated = $blog->update_blog_by_id($id,$title,$desc,$targetFile,$content);
    if($updated){
        echo "
        <script>
            window.location.href='/pr-1/blog/';
        </script>
        ";
        exit();
    }else{
        // header("Location: /pr-1/blog/updatepage.php?id=".$id);
        exit();
    }
}
?>