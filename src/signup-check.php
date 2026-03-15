<?php
session_start();
include "db_conn.php";

if(isset($_POST['UNAME']) && isset($_POST['PASS']) 
&& isset($_POST['NAME']) && isset($_POST['ADDRESS']) 
&& isset($_POST['CONTACTS']) && isset($_POST['EMAIL']) && isset($_POST['confirm'])) {
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return  $data;
    }

    $UNAME = validate($_POST['UNAME']);
    $PASS = validate($_POST['PASS']);
    $NAME = validate($_POST['NAME']);
    $ADDRESS = validate($_POST['ADDRESS']);
    $CONTACTS = validate($_POST['CONTACTS']);
    $EMAIL = validate($_POST['EMAIL']);
    $confirm = validate($_POST['confirm']); 

    $user_data = '&UNAME=' . $UNAME. '&NAME=' . $NAME . '&ADDRESS=' . $ADDRESS .
    '&CONTACTS=' . $CONTACTS . '&EMAIL=' . $EMAIL; 



    if(empty($UNAME)){
        header("Location: login.php?error=Username is required&$user_data");
        exit();

    }else if(empty($PASS)){
        header("Location: login.php?error=Password is required&$user_data");
        exit();

    }
    else if(empty($NAME)){
        header("Location: login.php?error=Name is required&$user_data");
        exit();

    }
    else if(empty($ADDRESS)){
        header("Location: login.php?error=Addresss is required&$user_data");
        exit();

    }
    else if(empty($CONTACTS)){
        header("Location: login.php?error=Phone number is required&$user_data");
        exit();

    }
    else if(empty($EMAIL)){
        header("Location: login.php?error=Email is required&$user_data");
        exit();

    }
    else if(empty($confirm)){
        header("Location: login.php?error=Confirm your password&$user_data");
        exit();

    }else if($PASS !== $confirm){
        header("Location: login.php?error=Password does not match&$user_data");
        exit();

    }else{
        $PASS = md5($PASS);
        $sql = "SELECT * FROM USERS WHERE UNAME='$UNAME' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: login.php?error=Username is already taken&$user_data");
            exit();
        }else {
            $sql2= "INSERT INTO USERS(UNAME, PASS, NAME, CONTACTS, ADDRESS, EMAIL) VALUES('$UNAME','$PASS'
            ,'$NAME', '$CONTACTS', '$ADDRESS', '$EMAIL')";
            $result2 = mysqli_query($conn, $sql2);
            if($result2){
                header("Location: login.php?success=Your account has been created successfully");
                exit();
            }else{
                header("Location: login.php?error=unknown error occured&$user_data");
                exit();
            }
        }
    }
}else{
    header("Location: login.php");
    exit();
    }
