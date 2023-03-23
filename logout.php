<?php
session_start();

if(isset($_SESSION['Username']))
{
    // unset($_SESSION['Username']);
    $_SESSION['USER_LOGIN']=false;
    // $_SESSION['']
    unset($_SESSION['Username']);
    echo "<script>location.href='login.php'</script>";
    // echo "<script>location.href='login.php'</script>";
}
else{
    $_SESSION['USER_LOGIN']=false;
    echo '<script>alert("Logged-out Successful");
    window.location.href="login.php";
    </script>';
}
    // unset($_SESSION['USER_LOGIN']);
    // unset($_SESSION['Username']);
    // unset($_SESSION['Password']);
    // echo '<script>alert("Logged Out");
    // window.location.href="home_nav.php";
    // </script>';
    // die();
?>