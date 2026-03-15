<?php
@session_start();
include "db_conn.php";
if(isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
     //   $data = htmlspecialchars($data);
        return  $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    

    if(empty($uname)){
        header("Location: login.php?error=Username is required");
        exit();

    }else if(empty($pass)){
        header("Location: login.php?error=Password is required");
        exit();

    }else{
        $pass = md5($pass);
        $sql = "SELECT * FROM USERS WHERE UNAME='$uname' AND PASS='$pass'";
        $result = mysqli_query($conn, $sql);
    

        
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['UNAME'] === $uname && $row['PASS'] === $pass) {
            $_SESSION['UNAME'] = $row['UNAME'];
            $_SESSION['NAME'] = $row['NAME'];
            $_SESSION['user_id'] = $row['ID'];
            $_SESSION['ADDRESS'] = $row['ADDRESS'];
            $_SESSION['EMAIL'] = $row['EMAIL'];
            $_SESSION['CONTACTS'] = $row['CONTACTS'];    
            header("Location: profile.php");
            exit();
        }
    }else{
        header("Location: login.php?error=Incorrect Credentials");
        exit();

    }


    }
    
}else{
    header("Location: Login.php?error");
    exit();
}