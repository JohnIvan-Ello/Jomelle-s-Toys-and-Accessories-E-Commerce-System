<?php
@session_start();

?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="login-style.css">
         
    <title>Login & Registration Form</title> 
</head>
<body>
 
    <div class="goback">
        <a href="index.php" class="home-button">Go back to Main Page</a>
    </div>

    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="condition.php" method = "post">
                <?php if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error'];  ?></p>
                <?php } ?>
                 <?php if(isset($_GET['success'])) { ?>
                  <p class="success"> <?php echo $_GET['success'];  ?></p>
                    <?php } ?>
                    <div class="input-field">
                        <input type="text" placeholder="Input your username" name = "uname" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" name = "password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="forgotpass.html" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                    <button type="submit">submit</button>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="signup-check.php" method="post">
                <?php if(isset($_GET['error'])) { ?>
        <p class="error"> <?php echo $_GET['error'];  ?></p>
    <?php } ?>

    <?php if(isset($_GET['success'])) { ?>
        <p class="success"> <?php echo $_GET['success'];  ?></p>
    <?php } ?>
                    <div class="input-field">
                    <?php if(isset($_GET['NAME'])) { ?>
        <input type="text" 
               name="NAME" 
               placeholder=""
               value="<?php echo $_GET['NAME'];  ?>"> </p>
    <?php }else{ ?>
        <input type="text" 
               name="NAME" 
               required
               placeholder="Enter your Full Name">
    <?php }?>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                    <?php if(isset($_GET['UNAME'])) { ?>
        <input type="text" 
               name="UNAME" 
               placeholder=""
               value="<?php echo $_GET['UNAME'];  ?>"> </p>
    <?php }else{ ?>
        <input type="text" 
               name="UNAME" 
               required
               placeholder="Enter your Username">
    <?php }?>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                    <?php if(isset($_GET['EMAIL'])) { ?>
        <input type="text" 
               name="EMAIL" 
               placeholder=""
               value="<?php echo $_GET['EMAIL'];  ?>"> </p>
    <?php }else{ ?>
        <input type="text" 
               name="EMAIL" 
               placeholder="Enter your Email">
    <?php }?>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                    <?php if(isset($_GET['CONTACTS'])) { ?>
        <input type="text" 
               name="CONTACTS" 
               placeholder=""
               value="<?php echo $_GET['CONTACTS'];  ?>"> </p>
    <?php }else{ ?>
        <input type="text" 
               name="CONTACTS" 
               required
               placeholder="Enter your Contact Number">
    <?php }?>
                        <i class="uil uil-phone icon"></i>
                    </div>
                    <div class="input-field">
                    <?php if(isset($_GET['ADDRESS'])) { ?>
        <input type="text" 
               name="ADDRESS" 
               placeholder=""
               value="<?php echo $_GET['ADDRESS'];  ?>"> </p>
    <?php }else{ ?>
        <input type="text" 
               name="ADDRESS" 
               required
               placeholder="Enter your Address">
    <?php }?>
                        <i class="uil uil-location-point icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" name = "PASS" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Repeat your password" name = "confirm" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="input-field button">
                    <button type="submit">submit</button>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    
     <script src="login-script.js"></script> 
</body>
</html>