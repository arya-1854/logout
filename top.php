<?php
session_start();
?>

<html lang="en">
  <head>
    <script src="https://kit.fontawesome.com/184bf0ce5d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="home_nav.css">
  </head>
<body>
  
  <nav class="navbar">
    <div class ="logo">
      <img src="lv.png" height="95px">
    </div>
    <div id="trapezoid">
      
      
      <div class="subnav">
        <form action="home_nav.php">
          <button  class="subnavbtn">Home</button>
          <div class="subnav-content">
            <div class="subnav-trapezoid"> 
              </div>
            </div>
        </form> 
          </div> 
          
          <div class="subnav">
            <!-- <button class=Products<i class="fa fa-caret-down"></i>  -->
            <select id="myList" class="subnavbtn">
              <option value="">Products</option>
              <option value="auto_c.php">Auto Products</option></a>
              <option value="avi_c.php">Audio Products</option>
              <option value="solar_c.php">Solar Products</option>
              <option value="security_c.php">Security Products</option>
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
                <form action="slid.php">
                  <button class="subnavbtn">Recent Project</button>
                  <div class="subnav-content">
                   <div class="subnav-trapezoid">                     
                     </div>
                    </div>
                  </form>
                 </div> 
              
              <div class="subnav">
                <form action="ser_o.php">
                  <button class="subnavbtn">Services</button>
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
            
            <?php
             
            
if(isset($_SESSION['Username']))

{
    // if(isset($_SESSION['Password']))

    //  echo"<div class='subnav'>"
    echo "<a href='login.php'>Login</a>"; 
            //  <form action="login.html">
            //     <button class="subnavbtn">Log-in</button>
            //       <div class="subnav-content">
            //        <div class="subnav-trapezoid">  
            //         </div>
            //       </div>
            //     </form>
            //      </div>
          }
          
          else
          {
            // <div class="subnav">
            // <form action="Logout.php">
            echo "<a href='Logout.php' >Logout</a>";
    //    <button class="subnavbtn">Log-out</button>
    //      <div class="subnav-content">
    //       <div class="subnav-trapezoid">  
    //        </div>
    //      </div>
    //    </form>
    //     </div>
}

?>
      </nav> 
</body>
</html>