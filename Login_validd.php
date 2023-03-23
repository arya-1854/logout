<?php 

session_start();
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"demo");
    if(isset($_POST['login']))
{
    $Username=$_POST["Username"];
    $Password=$_POST["Password"];
    $sql = mysqli_query($con,"SELECT * FROM clnt WHERE Username='".$Username."' AND Password='".$Password."' limit 1");

//    $result = mysqli_query($con,$sql);
//    $user = mysqli_fetch_array($result);

    $check_user=mysqli_num_rows($sql);  
        if($check_user>0)
        {
            if ($check_user) {
                $userdata = mysqli_fetch_array($sql);
                // $firstname = $userdata['firstname'];
                $token = $userdata['token'];
                $row = mysqli_fetch_assoc($sql);
                $_SESSION['USER_LOGIN']=true;
                $_SESSION['Username']=$row['Username'];
                // $_SESSION['Password']=$row['Password'];

        // Set the message you want to display in the alert box
  // Use the echo function to display the JavaScript code for the alert message
//   echo '<script>alert("Log-in Successful");
//   window.location.href="home_nav.php?token=$token";
//   </script>';
  header("Location: home_nav.php?token=$token");
    }
    }
    else
    {
        $message = "Invalid Username or Password";
        echo "<script>alert('$message');</script>";
    }
}
?>