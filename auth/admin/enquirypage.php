<?php
include("./user.php");
$page = 1;
$user = new User();
$userList = null;

if (isset($_GET['page'])) {
  
    $page = $_GET['page'];
    echo $page;
    $userList = $user->get_user_details($page);

} else {
    $userList = $user->get_user_details();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
    <!-- css file -->
    <link rel="stylesheet" href="./css/dashboard.css" />
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
            <li class="w-full active"><a class="w-full" href="#"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="#"><i class="fa-solid fa-users"></i>Customers</a></li>
            <li><a href="#"><i class="fa-regular fa-envelope"></i>Enquiries</a></li>
            <li><a href="#"><i class="fa-solid fa-newspaper"></i>Blogs</a></li>
            <li><a href="#"><i class="fa-solid fa-cube"></i>Product</a></li>
        </ul>
    </div>
    <!-- panel section -->
    <div class="admin_panel flex col">
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
                        <th>User ID</th>
                        <th>Customer Name</th>
                        <th>Contact</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($userList); $i++) {
                        ?>
                        <tr style="border-bottom:1px solid grey;">
                            <td>
                                <?php echo $userList[$i][0]; ?>
                            </td>
                            <td>
                                <?php echo $userList[$i][1]; ?>
                            </td>
                            <td>
                            <?php echo $userList[$i][3]; ?>
                            </td>
                            <td>
                            <?php
                                // echo $userList[$i][3];
                                $date = new DateTime($userList[$i][2]);
                                echo $date->format('M d, Y');
                                ?>
                            </td>
                            <td class="action-buttons">
                               <a href="./deleteuser.php?id=<?php echo $userList[$i][0]; ?>"
                               class="delete"
                               >
                               <i class="fa-solid fa-trash"></i>
                                    Delete
                               </a>
                            </td>
                        </tr>
                    <?php } ?>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            <div class="pagination flex">
                <a href=".?page=<?php echo ($page-1); ?>"><i class="fa-solid fa-angle-left"></i></a>
                <a href=".?page=<?php echo ($page+1); ?>"><i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</body>
</script>


</html>