<?php
// database connection code
if(isset($_POST['cName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','restaurent');

// get the post records

$cName = $_POST['cName'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$persons = $_POST['persons'];
$food_item = $_POST['food_item'];
$table_number = $_POST['table_number'];
$Comes_Time = $_POST['Comes_Time'];


// database insert SQL code
$sql = "INSERT INTO `booking` (`sl`, `cName`, `phone`,`mail`,`persons`,`food_item`,`table_number`,`Comes_Time`) VALUES ('0', '$cName', '$phone','$mail','$persons','$food_item','$table_number','$Comes_Time')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo"Order Confirmed ";
}
}
else
{
	echo "database not connected";
	
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/IMG_20220322_125733-removebg-preview.png" type="">

  <title>খাঁDoK Mela</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

 
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
   <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />

  <!-- Custom styles  -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
<!-- offer section -->

  <center><section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container ">
        <div class="row">
          <div class="col-md-9  ">
            <div class="box ">
             
              <div class="detail-box">
                <h2>
                  ✅✅Thanks for your Booking....................! <a href="book.php">
                  Book Another
                </a>
                </h2>
              
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
</center>
  <!-- end offer section -->

    <!-- header section strats -->
    <header class="header_section" style="background-color: black">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
             খাঁDoK Mela Restrurent..!
            </span>
          </a>

   

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item ">
                <a target="_blank" class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a target="_blank" class="nav-link" href="menu.php">Menu</a>
              </li>
              <li class="nav-item ">
                <a target="_blank" class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a target="_blank" class="nav-link" href="https://aktaruzzamansagor.github.io/sagor/">Contact Us</a>
              </li>
            </ul>
            <div class="user_option">

              <a target="_blank" href="book.php"tar  class="order_online">
                Book Table
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section Alhamdulillah -->


 <section class="about_section layout_padding" style="background-color: white">
    <div class="container  ">

      <div class="row">
      
          <div class="col-md-12 ">
          <div class="img-box">
            <img src="images/Cover.png" alt="">
          </div>

        </div>
      </div>
    </div>
  </section>



 <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a target="_blank" href="https://www.google.com/maps?q=hstu&rlz=1C1PRFI_enBD766BD766&um=1&ie=UTF-8&sa=X&sqi=2&ved=2ahUKEwjNvvjBqOX2AhXDlosKHQDqB5kQ_AUoAXoECAIQAw">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="#">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +8801926781439
                </span>
              </a>
              <a href="#">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  sagoraktaruzzaman7@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              খাঁDoK Mela Restrurent..!
            </a>
            <p>
             There are many variations of food in our restrurent.We will provide all kind of bangali Traditional Food ,Combo Package,Burger,Pasta,Student Platter,Coffee & Others Variations Only for you!..We ensure best quality vojon for you & your Family!!
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -11.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> This Website Made By
          <a target="_blank" href="https://aktaruzzamansagor.github.io/sagor/">Md. Aktaruzzaman Sagor</a><br><br>
        <span id="displayYear"></span> Student_ID: 1702132
          
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>
</body>
</html>