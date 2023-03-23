 <!DOCTYPE html>
<html lang="en">

<head>
    <title>DEMO</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="log.css">
    <script src="https://kit.fontawesome.com/184bf0ce5d.js" crossorigin="anonymous"></script>

</head>

<script language="javascript" type="text/javascript">
    window.history.forward();

</script>
<body>

  
  <nav class="navbar">
    <div class ="logo">
      <img src="lv.png" height="95px">
    </div>
    <div id="trapezoid">
      
      <div class="subnav">
      <form action="client_registration.php">
          <button class="subnavbtn">Registration</button>
            <div class="subnav-content">
             <div class="subnav-trapezoid">                     
              </div>
            </div>
    </form>
           </div>
          
            <!-- <div class="subnav">
                <form action="home_nav.php">
                <button  class="subnavbtn">Home</button>
                  <div class="subnav-content">
                   <div class="subnav-trapezoid"> 
                    </div>
                  </div>
                </form>
                 </div> -->

           <!-- <div class="subnav">
            <form action="slid.php">
           <button type="submit" class="subnavbtn">Recent Projects</button>
             <div class="subnav-content">
              <div id="subnav-trapezoid">
                 <a href="#slid.html"></a>  
              </div>
             </div>
            </form>
          </div> -->
        
           <!-- <div class="subnav">
             <button class=>Products<i class="fa fa-caret-down"></i>  
           <select id="myList" class="subnavbtn">
									<option value="">Products</option>
									
									<option value="auto.php">Auto Products</option>
									<option value="AVI.php">Audio Products</option>
									<option value="Solar.php">Solar Products</option>
									<option value="Security.php">Security Products</option>
									<option value="AC.php">Access Controls Products</option>
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
            </div> -->

          

        <!-- <div class="subnav">
        <form action="contact.php">
            <button class="subnavbtn">Contact us</i></button>
              <div class="subnav-content">
               <div class="subnav-trapezoid">  
                </div>
              </div>
        </form>      
             </div> -->

             <!-- <div class="subnav">
             <form action="login.html">
                <button class="subnavbtn">Log-in</button>
                  <div class="subnav-content">
                   <div class="subnav-trapezoid">  
                    </div>
                  </div>
                </form>
                 </div>  -->


      </nav> 
        
        <form method="post" action="Login_validd.php">
            <div class="form">
                <div class="usrname">
                    <input type="text" name="Username" placeholder="Username" id="contact-name" onkeyup="validateUserName( )" required >
                    <span id="username-error"></span>
                </div>
                <input type="password" name="Password" placeholder="Password">
                <br>
                <button class="btn" name="login" value="login" onClick="user_login()"><a>Login </a> </button>
                <p class="link"> Don't Have An Account
                    <a href="client_registration.php">Sign Up</a> Here
                </p>
            </div>
        </form>
        <!-- <div class="back">
            <video autoplay loop muted>
                <source src="VID-20220825-WA0026.mp4" type="video/mp4">
            </source>
        </video>
        </div> -->

<!-- <script src="script.js"></script> -->
</body>

</html> 
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Automation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@400;700&family=Poppins:wght@200&family=Prompt:wght@300;400&family=Saira:wght@300;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="home_nav.css">
</head>
<body>

    
    <div class="card">
        <div class="imageContainer flexCenter">
            <h3>Login</h3>
        </div>
        <form  method="post" action="login_valid.php">
        <div class="content">
            <input class="textField" type="text" placeholder="Username" name="Username" />
            <input class="textField" type="password" placeholder="Password" name="Password" />
            <button class="primaryBtn"  name="login">Login</button>
            <a href="client_registration.html">Dont Have an Account Sign In</a>
        </div>
        </form>
    </div>
</body>
</html> -->