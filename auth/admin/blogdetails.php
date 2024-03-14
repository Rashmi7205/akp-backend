<?php
    session_start();

    if(!isset($_SESSION['USER_CRED'])){
        echo "<script>
            window.alert('Login to access this route');
            location.href='../login.php';
        </script>";
        exit();
    }
    include("../../blog/blog.php");
    include ("../admin.php");  //include the admin class
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
    if(isset($_POST['update'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $admin_id = $_SESSION['USER_CRED']['admin_id'];
        $manager_id = $_SESSION['USER_CRED']['admin_id'];
        $admin = new Admin();
        $admin->update_admin($username,$email,$role, $admin_id ,$manager_id );
        header('Location: ./');
    }
    if(isset($_GET['logout' ])) {
        $admin->logout();
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

        <style>
            .action-buttons>a{
                padding:5px 8px;
                display: block;
                color: #fff;
                box-shadow: 1px 1px 7px #fff;
                border-radius: 8px;
                text-transform: capitalize;
            }
        </style>
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
            <li class="w-full"><a class="w-full" href="./"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="./"><i class="fa-solid fa-users"></i>Customers</a></li>
            <li><a href="./enquirypage.php"><i class="fa-regular fa-envelope"></i>Enquiries</a></li>
            <li class="w-full active"><a href="#"><i class="fa-solid fa-newspaper"></i>Blogs</a></li>
            <li><a href="#"><i class="fa-solid fa-cube"></i>Product</a></li>
        </ul>
    </div>
    <!-- panel section -->
    <div class="admin_panel flex col" style="align-self:start;">
        <!-- Admin panel header -->
        <div class="admin_panel_header flex">
            <h1 class="flex"> <i class="fa-solid fa-newspaper"></i>Blogs</h1>
            <a href="../../blog/createblog.php">+ Create </a>
            <div class="admin_account flex">
                <button id="open-edit-box">
                    <i class="fa-solid fa-user"></i>
                </button>
                <a href="./?logout=true">logout</a>
                <div class="account_edit hidden">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="flex col w-full">
                        <h4>Account Information</h4>
                        <label for="username">Username:</label><br />
                        <input type="text" id="username" name="username"
                        value="<?php echo $_SESSION['USER_CRED']['admin_name']; ?>"
                        />
                        <label for="email">email:</label><br />
                        <input type="text" id="email" name="email" value="<?php echo $_SESSION['USER_CRED']['admin_email']; ?>" />

                        <?php
                            $role = $_SESSION['USER_CRED']['role'];
                            if($role == "MANAGER"){
                          ?>    
                        <select name="role" id="admin_role">
                            <option value="<?php echo $_SESSION['USER_CRED']['role']; ?>" selected><?php echo $_SESSION['USER_CRED']['role']; ?></option>
                            <option value="manager">MANAGER</option>
                            <option value="Admin">Admin</option>
                            <option value="User">MANAGER</option>
                        </select>
                        <?php }else{
                            echo "<h3>$role</h3>";
                        } ?>
                        <button
                        type="submit"
                        name="update">
                            Update
                        </button>
                    </form>
                        <button type="button" class="close_account_edit">X</button>

                </div>
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
                                <a 
                                style="background-color:#4dc3d7"
                                href="../../blog/single-blog/?title=<?php echo $blogList[$i][1]; ?>">View</a>
                                <a 
                                style="background-color:#201030" 
                                href="../../blog/updatepage.php?id=<?php echo $blogList[$i][0]; ?>">edit</a>
                                <a 
                                style="background-color:#ff4400"   
                                href="./blogdetails.php?delete_id=<?php echo $blogList[$i][0]; ?>">delete</a>
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
    
<script src="./js/script.js"></script>
</body>

</html>