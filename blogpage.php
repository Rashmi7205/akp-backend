<?php
    require_once('./blog.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $blog = new Blog();
        $data = $blog->get_blog_by_id($id);
       
    }
    else{
        header("Location: /");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(count($data) > 0){
     ?>
     <img src="<?php echo $data['blog_image'];?>" alt="image"/>
     <h1><?php echo $data['blog_title']; ?></h1>
     <p><?php echo $data['blog_content']; ?></p>
     <?php       
        }
    ?>
</body>
</html>