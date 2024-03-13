<?php
include("./enquire.php");
$page = 1;
$enquireList = null;
$enq = new Enquiry();
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if($page<=1){
        $page=1;
    }
    $enquireList = $enq->get_All_enquire($page);
} else {
    $enquireList = $enq->get_All_enquire();
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
    <style>
 select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    text-indent: 1px;
    text-overflow: '';
    padding: 8px;
    border-radius: 19px;
    font-weight: 300;
    }

    /* Custom select styles */
    .custom-select {
        position: relative;
        display: inline-block;
        width: 200px; /* Adjust the width as needed */
    }

    .custom-select select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        background: linear-gradient(to right, #FFD700, #FF6347); /* Adjust colors as needed */
        color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        cursor: pointer;
    }

    .custom-select::before {
        content: '\25BC';
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        pointer-events: none;
        color: #fff; /* Adjust arrow color */
    }
    .success{
        border:1px solid green;
        background-color: #81ef81a6;
    }
    .pending{
        border: 1px solid red;
        background-color: #e516167d;
    }
    .canceled{
        border: 1px solid red;
        background-color: #e516168a;
    }
    </style>
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
            <li><a class="w-full" href="./"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="#"><i class="fa-solid fa-users"></i>Customers</a></li>
            <li class="w-full active"><a href="#"><i class="fa-regular fa-envelope"></i>Enquiries</a></li>
            <li><a href="./blogdetails.php"><i class="fa-solid fa-newspaper"></i>Blogs</a></li>
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
                        <th>Enq. ID</th>
                        <th>Customer Name</th>
                        <th>Contact</th>
                        <th>Date</th>
                        <th>Action</th>
                        <th>message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($enquireList); $i++) {
                        ?>
                        <tr style="border-bottom:1px solid grey;">
                            <td>
                                <?php echo $enquireList[$i][0]; ?>
                            </td>
                            <td>
                                <?php echo $enquireList[$i][6]; ?>
                            </td>
                            <td>
                                <?php echo $enquireList[$i][8]; ?>
                            </td>
                            <td>
                                <?php
                                $date = new DateTime($enquireList[$i][7]);
                                echo $date->format('M d, Y');
                                ?>
                            </td>
                            <td class="action-buttons">
                                <form class="statusForm" action="./editstatus.php?id=<?php echo $enquireList[$i][0]; ?>"
                                    method="post">
                                    <select name="status"  class="statusSelect <?php echo $enquireList[$i][3]; ?>">
                                        <option ">
                                            <?php echo $enquireList[$i][3]; ?>
                                        </option>
                                        <option class="pending" value="pending">Pending</option>
                                        <option  class="success" value="success">Success</option>
                                        <option  class="canceled" value="canceled">Canceled</option>
                                    </select>
                                </form>
                            </td>
                            <td>
                                <?php echo $enquireList[$i][4]; ?>
                            </td>
                        </tr>
                    <?php } ?>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            <div class="pagination flex">
                <a href="./enquirypage.php?page=<?php echo ($page - 1); ?>"><i class="fa-solid fa-angle-left"></i></a>
                <a href="./enquirypage.php?page=<?php echo ($page + 1); ?>"><i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $('.statusSelect').on('change', function() {
            $(this).closest('form').submit();
        });
    });
</script>


</html>