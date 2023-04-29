<?php 
include 'functions.php';
    $title="login";
    $error='';
    if(isset($_POST['signin'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $error='';
        $result = signin($conn, $email, $password);
        if($result == 0) {
            $error = "User is not found";
        } else if($result == 1) {
            $error = "Password is incorrect";
        } else if($result == 2) {
            $error = "You are logged in";
        } else {
            $error = "Something went wrong";
        }
}
if(isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error='';
    $result= signup($conn,$username, $email, $password);
    if($result == 2) {
        $error = "Account created successfully";
    } else if($result == 0) {
        $error = "There is user with that email";

    } else {
        $error = "Something went wrong";
    }
    exit();
}
?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<title> Responsive Login and Signup Form </title>-->


        <!-- CSS -->
        <link rel="stylesheet" href="../public/css/logout.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="#">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>
                        <?php if(isset($error)): ?>
                    <p><?php echo $error; ?></p>
                        <?php endif; ?>



                        <div class="field button-field">
                            <button type="submit" name="signin">Login</button>
                        </div>
                    </form>


                    <div class="form-link">
                        <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                    </div>
                </div>


                <div class="line"></div>


                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>



            </div>


            <!-- Signup Form -->


            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form action="#">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>


                        <div class="field input-field">
                            <input type="text" placeholder="Username" class="password">
                        </div>


                        <div class="field input-field">
                            <input type="password" placeholder="password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>


                        <div class="field button-field">
                            <button type="submit" name="signup">Signup</button>
                            <?php echo $error; ?>
                        </div>
                    </form>


                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>


                <div class="line"></div>


                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>





            </div>
        </section>


        <!-- JavaScript -->
        <script src="../public/js/logout.js">


        </script>
    </body>
</html>
