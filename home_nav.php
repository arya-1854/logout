<!DOCTYPE html>
<!--Code by Divinector (www.divinectorweb.com)-->
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/184bf0ce5d.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Homepage design with Bootstrap and Animate css</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="new1.css"> 
    <link rel="stylesheet" type="text/css" href="home_nav.css">   

</head>
<script language="javascript" type="text/javascript">
    window.history.forward();
</script>
<body>
    
    <?php
    require('top.php');
    echo $_SESSION['USER_LOGIN'];
    if(!$_SESSION['USER_LOGIN'])
    {
        header("Location: login.php");
        exit();
    }
    ?> 
     <!-- <nav class="navbar">
        <div class ="logo">
            <img src="lv.png" height="95px">
        </div>
        <div id="trapezoid">
      
          
             <div class="subnav">
                <button  class="subnavbtn">Home</button>
                  <div class="subnav-content">
                   <div class="subnav-trapezoid"> 
                    </div>
                  </div>
                 </div> 

           <div class="subnav">
            <form action="slid.php">
           <button type="submit" class="subnavbtn">Recent Projects</button>
             <div class="subnav-content">
              <div id="subnav-trapezoid">
                  <a href="#slid.html"></a>  
              </div>
             </div>
            </form>
          </div>

          
        
            <div class="subnav">
            <button class=>Products<i class="fa fa-caret-down"></i> 
           <select id="myList" class="subnavbtn">
									<option value="">Products</option>
									<option value="auto.php">Auto Products</option></a>
									<option value="avi_c.php">Audio Products</option>
									<option value="Solar.php">Solar Products</option>
									<option value="Security.php">Security Products</option>
									<option value="ac_c.php">Access Controls Products</option>
								  </select>
                                  <script>
								 function redirectToSelectedPage() {
									var selectedValue = document.getElementById("myList").value;
									window.location.href = selectedValue;
								  }
								  document.getElementById("myList").addEventListener("change", redirectToSelectedPage);
								  </script>
        </button>
             <div class="subnav-content">
              <div class="subnav-trapezoid">                
               </div>
             </div>
            </div> 

            <div class="subnav">
            <form action="client_registration.php">
                <button class="subnavbtn">Registration</button>
                  <div class="subnav-content">
                   <div class="subnav-trapezoid">                     
                    </div>
                  </div>
</form>
                 </div>
          

        <div class="subnav">
        <form action="contact.php">
            <button class="subnavbtn">Contact us</i></button>
              <div class="subnav-content">
               <div class="subnav-trapezoid">  
                </div>
              </div>
        </form>      
             </div>

                   
             
// session_start();
// if(isset($_SESSION['Username']))
// { 


            //  echo"<div class='subnav'>"
            // echo"<a href='Logout.php'>Logout</a>"; 
            //  <form action="login.html">
            //     <button class="subnavbtn">Log-in</button>
            //       <div class="subnav-content">
            //        <div class="subnav-trapezoid">  
            //         </div>
            //       </div>
            //     </form>
            //      </div>
        // }
        // else
        // {
        //     echo"<a href='login.php'>Login</a>";    
    // <div class="subnav">
    // <form action="Logout.php">
    //    <button class="subnavbtn">Log-out</button>
    //      <div class="subnav-content">
    //       <div class="subnav-trapezoid">  
    //        </div>
    //      </div>
    //    </form>
    //     </div>
// }

// ?>
      </nav>  -->
              
      
    <header>
        <div class="wrapper">
            
        <!-- <nav class="navbar navbar-default navbar-fixed-top navbar-inverse"> -->
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#">SMART AUTOMATION</a> -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->

                    <!-- <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Recent Projects</a></li>
                        <li><a href="#">services</a></li>
                        <li><a href="#">contact</a></li>
                    </ul> -->
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        <!-- </nav> -->


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="banner" style="background-image:url();"></div>
                    <div class="carousel-caption">
                        <h2 class="animated bounceInRight" style="animation-delay: 1s">We Provide <span>Office</span></h2>
                        <h2 class="animated bounceInLeft" style="animation-delay: 2s">Automation</h2>
                        <p class="animated bounceInRight" style="animation-delay: 3s"><a href="contact.php">Contact us</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner" style="background-image: url();"></div>
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown" style="animation-delay: 1s">We provide <span>Security</span></h2>
                        <h2 class="animated fadeInUp" style="animation-delay: 2s">And Services</h2>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="contact.php">Contact us</a></p>
                    </div>
                </div>

<div class="item">
                    <div class="banner" style="background-image:url();"></div>
                    <div class="carousel-caption">
                        <h2 class="animated zoomIn" style="animation-delay: 1s">We Provide <span>SmartHome</span></h2>
                        <h2 class="animated fadeInLeft" style="animation-delay: 2s"> Automation</h2>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="contact.php">Contact us</a></p>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </header>
    
       <script src=“main.js”> </script>
       <script src="nav.js"  > </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
    require('blog.php');
    ?>
    <?php
    require('bs.html');
    ?>
<!-- <a href="#top" class="to-top"> 
        <button onclick="topFunction()" id="myBtn" title="Go to top" >   </button>
        <i class="fa fa-angle-up" aria-hidden="true"></i>
       </a> -->
</body>
</html>
<?php
    require('foot1.html');
?>

