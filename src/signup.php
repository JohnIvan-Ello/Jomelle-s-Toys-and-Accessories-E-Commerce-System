<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Sign up</title>
    
</head> 

<style>
    .ca{
    float: left;
    padding: 10px 15px;
    border-radius: 15px;
    color: black;
    margin-right: 10px;
    font-size: 14px;
    text-decoration: underline;
    }

    .ca:hover{
        opacity: 0.7;
    }
    .cont-s{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 50px;
    
    }
    .cont-s form{
    width: 500px;
    border: 2px solid #ccc;
    padding: 30px;
    background: radial-gradient(#fff, #ffd6d6);;
    border-radius: 15px;
    }
    .cont-s input{
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px;
    border-radius: 5px;
    }
    .cont-s label{
    color: #ff523b;
    padding: 10px;
    font-weight: 200px;
    }

    .cont-s button{
    float: right;
    padding: 10px 15px;
    border-radius: 15px;
    background: #ff523b;
    color: white;
    margin-right: 10px;
    border: none;
    }
    .cont-s button:hover{
    opacity: 0.7;
    }
    .error {
    background: #ff523b;
    color: rgb(255, 255, 255);
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
    }
    .success {
    background: #40754C;
    color: rgb(255, 255, 255);
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
    opacity: 1;
    }
</style>


<body>
    
        <div class="container">
        <div class="navbar">
            <div class="logo">
            <a href="index.php"><img src="assets/HOOK.png" alt=""></a>            </div>
        </div>
        </div>


<div class="cont-s">
    <form action="signup-check.php" method="post">
        <h2> Create Account </h2><br>

    <?php if(isset($_GET['error'])) { ?>
        <p class="error"> <?php echo $_GET['error'];  ?></p>
    <?php } ?>

    <?php if(isset($_GET['success'])) { ?>
        <p class="success"> <?php echo $_GET['success'];  ?></p>
    <?php } ?>



    <label> Full Name:</label>
    <?php if(isset($_GET['NAME'])) { ?>
        <input type="text" 
               name="NAME" 
               placeholder=""
               value="<?php echo $_GET['NAME'];  ?>"> </p>
    <?php }else{ ?>
        <input type="text" 
               name="NAME" 
               placeholder="">
    <?php }?>



    <label> Home Address:</label>
    <?php if(isset($_GET['ADDRESS'])) { ?>
        <input type="text" 
               name="ADDRESS" 
               placeholder=""
               value="<?php echo $_GET['ADDRESS'];  ?>"> </p>
    <?php }else{ ?>
        <input type="text" 
               name="ADDRESS" 
               placeholder="">
    <?php }?>



    <label> Phone Number:</label>
    <?php if(isset($_GET['CONTACTS'])) { ?>
        <input type="text" 
               name="CONTACTS" 
               placeholder=""
               value="<?php echo $_GET['CONTACTS'];  ?>"> </p>
    <?php }else{ ?>
        <input type="text" 
               name="CONTACTS" 
               placeholder="">
    <?php }?>



    <label> Desired User Name:</label>   
    <?php if(isset($_GET['UNAME'])) { ?>
        <input type="text" 
               name="UNAME" 
               placeholder=""
               value="<?php echo $_GET['UNAME'];  ?>"> </p>
    <?php }else{ ?>
        <input type="text" 
               name="UNAME" 
               placeholder="">
    <?php }?>
    


    <label> Password:</label>
        <input type="password" 
               name="PASS" 
               placeholder="">

    <label> Confirm Password</label>
    <input type="password" 
           name="confirm"
           placeholder=""><br>










    <button type="submit">Sign up</button>
    <a href="Login.php" class="ca">Already have an Account?</a>   

    </form>

</div>


<!-----js for toggle menu------->
<script>
    var menuitems = document.getElementById("menuitems");

    menuitems.style.maxHeight="0px";

    function menutoggle(){
        if( menuitems.style.maxHeight == "0px")
        {
            menuitems.style.maxHeight = "200px";
        }
        else{
            menuitems.style.maxHeight = "0px";
        }
    }
</script>

</body>
</html>