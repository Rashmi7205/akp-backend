<?php
    require_once('./admin.php');
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $admin = new Admin();
        $isLoggedIn = $admin->login($email,$password);
        if($isLoggedIn){
            echo "
                <script>
                    window.location.href='/pr-1/'
                </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/loginpage.css" />

    <link rel="shortcut icon"
        href="https://akp-sanitary-demo.netlify.app/AKP%20Sanitary/Sanitary_House-removebg-preview.png"
        type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>AKP : Login </title>
</head>

<body>
    <div class="login-container">
    <div id="toast-container">
            <p>Some text</p>
            <button onclick="hideToast()">X</button>
        </div>
        <div class="login-box">
            <h2>Login</h2>
            <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="post">
                <label for="email">
                    <i class="fa-solid fa-envelope "></i>
                    Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">
                    <i class="fa-solid fa-lock "></i>
                    Password:</label>
                <div class="password-input">
                    <input type="password" id="password" name="password" required>
                    <i class="fa-solid fa-eye" id="pass-toggle"></i>
                </div>
                <button type="submit" name="submit" id="submit">Login</button>
                <p>Not an Account yet? <a href="./signup.php">Create one</a></p>
            </form>
        </div>
    </div>
</body>

<!-- js files -->
<script src="./js/script.js">
   
</script>

</html>