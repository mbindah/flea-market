<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['username'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Flea Market System - User Homepage</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.jpeg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

</head>

 <style type="text/css">
        
          table{
    border: solid 1px black;
    align-items: center;
  }

   th, tr, td{
    border: solid 1px black;
    padding: 0px 0px;
  }
    </style>

             <script type="text/javascript">
        
                function myFunction() {
          var x =
          document.getElementById('pass');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }
  
      </script>

                   <script type="text/javascript">
        
                function myFunction1() {
          var x =
          document.getElementById1('pass1');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }
  
      </script>

                   <script type="text/javascript">
        
                function myFunction2() {
          var x =
          document.getElementById2('pass2');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }
  
      </script>

                   <script type="text/javascript">
        
                function myFunction3() {
          var x =
          document.getElementById('pass3');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }
  
      </script>

                   <script type="text/javascript">
        
                function myFunction4() {
          var x =
          document.getElementById('pass4');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }
  
      </script>      

                      <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

                <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

                <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
                <script type="text/javascript">
function printData3()
{
   var divToPrint=document.getElementById("printTable3");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
<body class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
            <div id="loader"></div>  
        </div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div class="topbar text-center hidden-xs">
        <p style="color: red;">....</p>
    </div>

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index2.php"><img src="images/logos/logo.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-scroll-nav="0" href="#main-banner" class="active">Home</a></li>
                        <li><a data-scroll-nav="1" href="#about">About Us</a></li>
                        <li><a data-scroll-nav="2" href="#data">Database</a></li>
                        <li><a data-scroll-nav="3" href="#module">My Module</a></li>
                        <li><a data-scroll-nav="4" href="#contact">Contact Us</a></li>
                        <li><a href="logout.php">Logout</a></li>                                                
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <div id="main-banner" class="banner-one" data-scroll-index="0">
        <div data-src="uploads/slide-3.jpg">
            <div class="camera_caption">
                <div class="container">
                    <h1 class="wow fadeInUp animated">Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>!  </h1>
                    <p class="wow fadeInUp animated" data-wow-delay="0.2s">Made by Strathmore for Strathmore.</p>
                    <a data-scroll href="mailto:#" class="btn btn-light btn-radius btn-brd grd1">EMAIL</a>
                </div> <!-- /.container -->
            </div> <!-- /.camera_caption -->
        </div>
        <div data-src="uploads/slide-2.jpeg">
            <div class="camera_caption">
                <div class="container">
                    <h1 class="wow fadeInUp animated">Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>! </h1>
                    <p class="wow fadeInUp animated" data-wow-delay="0.2s">A place to get more information and knowledge on the vendors at the Strathmore Flea Market.</p>
                    <a data-scroll href="#module" class="btn btn-light btn-radius btn-brd grd1">MY MODULE</a>
                </div> 
            </div> 
        </div>
        <div data-src="uploads/slide-1.jpeg">
            <div class="camera_caption">
                <div class="container">
                    <h1 class="wow fadeInUp animated">Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>! </h1>
                    <p class="wow fadeInUp animated" data-wow-delay="0.2s">Air your views and thoughts on your favourite items and products.</p>
                    <a data-scroll href="#data" class="btn btn-light btn-radius btn-brd grd1">MY DATABASE</a>
                </div> 
            </div> 
        </div>
    </div> <!-- /#theme-main-banner -->


    <div id="about" data-scroll-index="1" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>About Us</h4>
                        <h2>At the Flea Market System</h2>
                        <blockquote class="lead">We make it easier for vendors to advertise by upgrading their advertising strategies and allowing students to be notified on the platform when the flea market is taking place.</blockquote>
                        <p> We allow vendors to understand more about their performance and get detailed data on how their products are performing. For the products, market research can help you choose the best plan or combination of tactics, and precise performance measures will show you which is most profitable for you. In this age of Digital and E-Marketing it is essential that all businesses take part in these tactics to ensure success and better understanding of their markets.</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="uploads/about_05.jpg" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1"> 

            <div class="row text-center">
                <div class="col-md-6 col-sm-6 col-xs-12">
                   <div class="service-widget">
                        <div class="post-media_pp wow fadeIn">
                            <a href="uploads/politic_01.jpg" class="hoverbutton global-radius"></a>
                            <img src="uploads/politic_01.jpg" alt="" class="img-responsive">
                        </div>
                        
                    </div><!-- end service -->
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media_pp wow fadeIn">
                            <a href="uploads/politic_02.jpeg" class="hoverbutton global-radius"></a>
                            <img src="uploads/politic_02.jpeg" alt="" class="img-responsive">
                        </div>
                        
                    </div><!-- end service -->
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media_pp wow fadeIn">
                            <a href="uploads/politic_03.jpeg" class="hoverbutton global-radius"></a>
                            <img src="uploads/politic_03.jpeg" alt="" class="img-responsive">
                        </div>
                        
                    </div><!-- end service -->
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media_pp wow fadeIn">
                            <a href="uploads/politic_04.png" class="hoverbutton global-radius"></a>
                            <img src="uploads/politic_04.png" alt="" class="img-responsive">
                        </div>
                    </div><!-- end service -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

<!--     <div class="section nopad">
        <img src="uploads/" alt="" class="img-responsive">
    </div> -->

     <div id="data" data-scroll-index="2" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Database</h3>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="participate-wrap">
                        <small>My Details</small>
                        <div class="event_dit">
                         <table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">User ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
 <th style="text-align: left;
  padding: 8px;">Phone Number</th>
  <th style="text-align: left;
  padding: 8px;">User Type</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "flea_market");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `User_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `User_Type` FROM `users` WHERE `User_ID` = '$filter'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["User_ID"]); ?></td>
<td><?php echo($row["Fullname"]); ?></td>
<td><?php echo($row["Email_Address"]); ?></td>
<td><?php echo($row["Phone_Number"]); ?></td>
<td><?php echo($row["User_Type"]); ?></td>
</tr>
<?php
}
} else { echo "No results"; }
$conn->close();
?>

</table>
<br>
<br> 
<br>
</div>
<div class="row">
                <div class="col-lg-12">
<button class="btn btn-common" onclick="printData()">Print the Users</button> 
                </div>
            </div>
                        </div>
                    </div><!-- end participate -->
                </div><!-- end col -->
            <div class="row">
                <div class="col-md-12">
                    <div class="participate-wrap">
                        <small>Announcements</small>
                        <div class="event_dit">
                         <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Announcement ID</th>
<th style="text-align: left;
  padding: 8px;">Name</th>
  <th style="text-align: left;
  padding: 8px;">Details</th>
 <th style="text-align: left;
  padding: 8px;">Date</th>
  <th style="text-align: left;
  padding: 8px;">Created At</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "flea_market");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Announcement_ID`, `Name`, `Details`, `Market_Date`, `Created_At` FROM `announcements`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Announcement_ID"]); ?></td>
<td><?php echo($row["Name"]); ?></td>
<td><?php echo($row["Details"]); ?></td>
<td><?php echo($row["Market_Date"]); ?></td>
<td><?php echo($row["Created_At"]); ?></td>
</tr>
<?php
}
} else { echo "No results"; }
$conn->close();
?>

</table>
<br>
<br> 
<br>
</div>
<div class="row">
                <div class="col-lg-12">
<button class="btn btn-common" onclick="printData1()">Print the Announcements</button> 
                </div>
            </div>
                        </div>
                    </div><!-- end participate -->
                </div><!-- end col -->
                            <div class="row">
                <div class="col-md-12">
                    <div class="participate-wrap">
                        <small>Available Products</small>
                        <div class="event_dit">
                         <table id="printTable2">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Product ID</th>
<th style="text-align: left;
  padding: 8px;">Name</th>
  <th style="text-align: left;
  padding: 8px;">Details</th>
 <th style="text-align: left;
  padding: 8px;">Image</th>
  <th style="text-align: left;
  padding: 8px;">Market Name</th>
 <th style="text-align: left;
  padding: 8px;">Created At</th>
  <th style="text-align: left;
  padding: 8px;">Updated At</th>
     <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "flea_market");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Product_ID`, `Name`, `Details`, `Image`, `Market_Name`, `Created_At`, `Updated_At`, `Status` FROM `products` WHERE `Status` = 'Available'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Product_ID"]); ?></td>
<td><?php echo($row["Name"]); ?></td>
<td><?php echo($row["Details"]); ?></td>
<td><img src="images/<?php echo($row["Image"]); ?>" title="<?php echo($row["Name"]); ?>"></td>
<td><?php echo($row["Market_Name"]); ?></td>
<td><?php echo($row["Created_At"]); ?></td>
<td><?php echo($row["Updated_At"]); ?></td>
</tr>
<?php
}
} else { echo "No results"; }
$conn->close();
?>

</table>
<br>
<br> 
<br>
</div>
<div class="row">
                <div class="col-lg-12">
<button class="btn btn-common" onclick="printData2()">Print My Products</button> 
                </div>
            </div>
                        </div>
                    </div><!-- end participate -->
                </div><!-- end col -->
                            <div class="row">
                <div class="col-md-12">
                    <div class="participate-wrap">
                        <small>Comments on My Products</small>
                        <div class="event_dit">
                         <table id="printTable3">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Comment ID</th>
<th style="text-align: left;
  padding: 8px;">Product ID</th>
  <th style="text-align: left;
  padding: 8px;">Comment</th>
 <th style="text-align: left;
  padding: 8px;">Posted On</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "flea_market");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Comment_ID`, `Product_ID`, `Content`, `Created_At`  FROM `comments` WHERE `User_ID` = '$filter'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Comment_ID"]); ?></td>
<td><?php echo($row["Product_ID"]); ?></td>
<td><?php echo($row["Content"]); ?></td>
<td><?php echo($row["Created_At"]); ?></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure you want to delete this comment?')?window.location.href='insertion.inc.php?action=deleteC&id=<?php echo($row["Comment_ID"]); ?>':true;" title='Delete Comment'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }
$conn->close();
?>

</table>
<br>
<br> 
<br>
</div>
<div class="row">
                <div class="col-lg-12">
<button class="btn btn-common" onclick="printData3()">Print the Comments</button> 
                </div>
            </div>
                        </div>
                    </div><!-- end participate -->
                </div><!-- end col -->
            </div>
        </div>

        <div id="module" data-scroll-index="3" class="section db">
                <div class="container">
            <div class="section-title text-center">
                <h3>Add A Comment</h3>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12" id="register">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form class="row" action="insertion.inc.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" required name="pid">
                                        <option value="" disabled selected>Select A Product</option>
                                     <?php
                                      $con = mysqli_connect("localhost","root","","flea_market");
                                      $sql = "SELECT * FROM `products` WHERE `Status` = 'Available'";
                                      $all_categories = mysqli_query($con,$sql);
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                  <option value="<?php echo $category["Product_ID"];?>"><?php echo $category["Name"];?></option>
                                  <?php
                                      endwhile;
                                  ?>
                                </select>
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                     <textarea required name="cont" class="form-control" placeholder="My Comment is..."></textarea>
                                </div>
                                <br>
                                <div class="col-lg-3 col-md-6 col-sm-3 col-xs-12 text-center">
                                <button type="submit" name="addc" id="" class="btn btn-light btn-radius btn-brd grd1 btn-block">Add</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
        <br>
        <br>
                <div class="container">
            <div class="section-title text-center">
                <h3>Update My Details</h3>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12" id="register">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form class="row" action="insertion.inc.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" required name="fname" id="" class="form-control" placeholder="Your Fullname">
                                    <input type="hidden" value="3" name="mod" required>
                                    <input type="hidden" value="<?php echo $filter; ?>" name="uid" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" required name="phone" id="" class="form-control" placeholder="Your Phone Number">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" required name="email" id="" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" required name="password" id="pass3" class="form-control" placeholder="Your Password">
                                     <input type="checkbox" onclick="myFunction3()"> Show Password
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" required name="cpassword" id="pass4" class="form-control" placeholder="Confirm Your Password">
                                     <input type="checkbox" onclick="myFunction4()"> Show Password
                                </div>                                
                                <br>
                                <div class="col-lg-3 col-md-6 col-sm-3 col-xs-12 text-center">
                                    <button type="submit" name="upu" id="" class="btn btn-light btn-radius btn-brd grd1 btn-block">Update</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="contact" data-scroll-index="4" class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="index2.php">Home</a>
                        <a href="#">Call Us: +254 707 855073</a>
                        <a href="#">Email Us: info@strathmore.edu</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2023. Design By : 145583 & 134122.</p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- Camera Slider -->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script> 
    <script src="js/camera.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>

</body>
</html>