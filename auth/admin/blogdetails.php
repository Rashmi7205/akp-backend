<?php
    include("../../blog/blog.php");
    $page = 1;
    $blog = new Blog();
    $blogList =null;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        $blogList = $blog->get_all_blogs($_GET['page']);
    }
    else{
    $blogList = $blog->get_all_blogs();

    }

    if(isset($_GET['delete_id'])){
        $res=$blog->delete_blog($_GET['delete_id']);
        if($res){
            echo "<script>
                window.location.href='./blogdeatils.php?page=$page';
            </script>";
        }else{
        //     echo "<script>
        //     window.location.href=document.URL;
        // </script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
    <!-- css file -->
    <link rel="stylesheet" href="./css/customer.css" />
    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="flex">
    <!-- sidebar section -->
    <div class="sidebar flex col">
        <div class="sidebar_header flex w-full">
            <img class="company-logo"
                src="https://akp-sanitary-demo.netlify.app/AKP%20Sanitary/Sanitary_House-removebg-preview.png" alt="">
            <p class="company-name">
                A K pipes and sanitary House
            </p>
        </div>
        <ul class="section_list flex col">
            <li class="w-full"><a class="w-full" href="#"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="#"><i class="fa-solid fa-users"></i>Customers</a></li>
            <li><a href="#"><i class="fa-regular fa-envelope"></i>Enquiries</a></li>
            <li class="w-full active"><a href="#"><i class="fa-solid fa-newspaper"></i>Blogs</a></li>
            <li><a href="#"><i class="fa-solid fa-cube"></i>Product</a></li>
        </ul>
    </div>
    <!-- panel section -->
    <div class="admin_panel flex col" style="align-self:start;">
        <!-- Admin panel header -->
        <div class="admin_panel_header flex">
            <h1 class="flex"> <i class="fa-solid fa-users"></i>Customers</h1>
            <div class="admin_account flex">
                <button>
                    <i class="fa-solid fa-user"></i>
                </button>
                <a href="./logout.php">logout</a>
            </div>
        </div>
        <!-- admin user data table -->
        <div class="admin_panel_data flex col">
            <table id="data">
                <thead>
                    <tr style="border-bottom:1px solid grey;">
                        <th>Image</th>
                        <th>Blog ID</th>
                        <th>Title</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($blogList); $i++) {
                        ?>
                        <tr style="border-bottom:1px solid grey;">
                            <td>
                               <img
                               style="height:45px;width:45px; border-radius:5px;" 
                               src="../../blog<?php echo $blogList[$i][2]; ?>" alt="">
                            </td>
                            <td>
                                <?php echo $blogList[$i][0]; ?>
                            </td>
                            <td>
                            <?php echo $blogList[$i][1]; ?>
                            </td>
                            <td colspan="2" class="action-buttons">
                                <a href="../../blog/single-blog/?title=<?php echo $blogList[$i][1]; ?>">View</a>
                                <a href="../../blog/updatepage.php?id=<?php echo $blogList[$i][0]; ?>">edit</a>
                                <a href="./blogdetails.php?delete_id=<?php echo $blogList[$i][0]; ?>">delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            <div class="pagination flex">
                <a href="./blogdetails.php?page=<?php echo ($page-1); ?>"><i class="fa-solid fa-angle-left"></i></a>
                <a href="./blogdetails.php?page=<?php echo ($page+1); ?>"><i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</body>

</html>