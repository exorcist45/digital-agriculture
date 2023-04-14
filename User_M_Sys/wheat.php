<?php 
include('class/User.php');
$user = new User();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Wheat</title>

  <link rel="stylesheet" href="../wheat.css">
  <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="../images/favicon_io/site.webmanifest">
</head>
<body>
 
  <div id="google_translate_element"></div> 
      
  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoodleTranslate"></script>
  <script>
    function loadGoodleTranslate(){
      new google.translate.TranslateElement(
        "google_translate_element"
      )
    }
  </script>
<br>
   

<header> 
<div class="navbar">
  <ul>
   <li><a href="../index.html"><b>Home</b></a></li>

    <li><b>About Us</b>
      <ul class="dropdown">
        <li><a href="../About.html"><b>About</b></a></li>
        <li><a href="../team.html"><b>Team</b></a></li>
        <li><a href="../contact/contact.html"><b>Contact</b></a></li>
      </ul>
    </li>
    <li><b>Learn Crops</b>
      <ul class="dropdown2">
        <li><a href="wheat.php"><b>Wheat</b></a></li>
        <li><a href="../corn.html"><b>Corn</b></a></li>
        <li><a href="../Rice.html"><b>Rice</b></a></li>
         <li><a href="../More2.html"><b>More...</b></a></li>
      </ul>
    </li>
    <li><a href="../Farming.html"><b>Farming</b></a>
      <ul class="dropdown3">
        <li><a href="../Agriculture.html"><b>Agriculture</b></a>
          <li><a href="../SubF.html"><b>Subsistence Farming</b></a></li>
 
        <li><a href="../shiftingagri.html"><b>Shifting Agriculture</b></a></li>
          <li><a href="../Plantingagri.html"><b>Plantation Agriculture</b></a></li>
          <li><a href="../Intensive.html"><b>Intensive Farming</b></a></li>

          <li><a href="../OF.html"><b>Organic Farming</b></a></li>

        <li><a href="../More3.html"><b>More...</b></a></li>
      </ul>
    </li>
    <li><a href="../facilities.html"> <b>Facilities</b></a></li>
    <?php if (empty($_SESSION['name'])): ?>
   <li class="sign-in" id="signin"><a href="signin.php"><b>Sign in</b></button></a></li>
   <?php else:?>
    <li><a href="#"><b><?php echo ucwords($_SESSION['name']); ?> </b></a>
	   <ul class="dropdown3">
            <li><a href="account.php"><b>My Profile</b></a></li>						
            <li><a href="logout.php"><b>Logout</b></a></li>
	   </ul>
	</li> 
    <?php endif;?>
  </ul>
  </header>

 <style>
  .first-button:hover{
    background-color: rgb(147, 255, 147);
    color: black;
   }
  .first-button {
border-radius: 10px;
border: none;
position: absolute;
width: fit-content;
top: 55%;
left: 110%;
color: white;
font-size: 18px;
font-family: 'Baloo Bhaina 2', cursive;  word-spacing: 5px;
font-weight: 500;
padding: 2px 5px;
transform: translate(-50%, -50%);
background: green;
/* box-shadow:  18px 18px 25px #1e1e1e, 
             -15px -15px 25px #1e1e1e; */
/* transition: box-shadow .35s ease !important; */
outline: none;
}

.first-button:active {  
background: linear-gradient(145deg, green, green);
/* box-shadow:  5px 5px 10px green, 
             -5px -5px 10px green; */
border: none;
}
/* Popup active */
.popup.active .content {
transition: all 300ms ease-in-out;
transform: translate(-50%,-50%) scale(1);
}
</style>
 

</li>
</ul>
</div>

    
 
<div class="headingcontainer">
    <h1>Wheat Cultivation</h1>
</div>

<div class="container">
  <br>
    <h2>These are the following steps you should follow :</h2>
    <br>
 <p id="land">Land Selection</p>

    <li><a href="../wheatland.html"><img src="../images/meadow.png" alt="location" width="18%"><br></a></li>
 <img src="../images/down-arrow.png" id="down-arrow" alt="" width="40px">

    <p id="soil">Soil Preperation</p>
       <li><a href="../wheatsoil.html"><img src="../images/soil.png" alt="location" width="18%"><br></a></li>

 
 <img src="../images/down-arrow.png" id="down-arrow" alt="" width="40px">

 <p id="weather">Weather</p>
 <li><a href="../wheatweather.html"><img src="../images/weather.png" alt="location" width="18%"><br></a></li>

 
 <img src="../images/down-arrow.png" id="down-arrow" alt="" width="40px">

 <p id="variety">Pick Variety</p>
 <li><a href="../wheatvariety.html"><img  src="../images/variety.png" alt="location" width="18%"><br></a></li>
 
 <img src="../images/down-arrow.png" id="down-arrow" alt="" width="40px">

 <p id="seeding">Seeding</p>
 <li><a href="../wheatseeding.html"><img  src="../images/seeds.png" alt="location" width="18%"><br></a></li>

 <img src="../images/down-arrow.png" id="down-arrow" alt="" width="40px">

 <p id="planting">Planting</p>
 <li><a href="../wheatplanting.html"><img  src="../images/planting.png" alt="location" width="18%"><br></a></li>

 <img src="../images/down-arrow.png" id="down-arrow" alt="" width="40px">

 <p id="caring">Caring</p>
 <li><a href="../wheatcaring.html"><img  src="../images/care.png" alt="location" width="18%"><br></a></li>

 <img src="../images/down-arrow.png" id="down-arrow" alt="" width="40px">

 <p id="pest">Pest Control</p>
 <li><a href="../wheatpest.html"><img  src="../images/insecticide.png" alt="location" width="18%"><br></a></li>

 <img src="../images/down-arrow.png" id="down-arrow" alt="" width="40px">

 <p id="harvest">Harvesting</p>
 <li><a href="../Wheatharvest.html"><img  src="../images/harvesting.png" alt="location" width="18%"><br></a></li>

  


</div>
<section class="footer">
  <div class="social" id="social-icons">
    <a href=""><i class="fab fa-mail"><img src="../images/email.png" alt="loading..." width="25px"></i></a>
    <a href=""><i class="fab fa-instagram"><img src="../images/instagram.png" alt="loading..." width="25px"></i></a>
    <a href=""><i class="fab fa-twitter"><img src="../images/twitter.png" alt="loading..." width="25px"></i></a>
    <a href=""><i class="fab fa-facebook-f"><img src="../images/facebook2.png" alt="loading..." width="25px"></i></a>
  </div>

  <ul class="footer-list">
    <li>
      <a href="../Home.html" id="">Home</a>
    </li>
     <li>  <a href="../About.html">About</a>
     </li>
     <li> <a href="../contact/contact.html">Contact Us</a>
     </li> 
     <li>  <a href=" ">Terms And Conditions</a>
     </li>
     <li> <a href=" ">Privacy Policy </a>
    </li>
  </ul>
  <p class="copyright" id="copyright-text">
<br>
   Copyright &copy;	2021 Digital Agriculture
  </p>


  <style>
    .footer{
      margin-top: -38px;
      padding: 20px;
      text-align: center;
      background-color: rgb(205, 205, 205);
      border-top: 1px solid black;
      border-bottom: 1px solid black;



       
    }
    .footer-list li{
      list-style: none;
      display: inline-block;
      padding: 15px;
 
    }
  .footer-list li a{
    text-decoration: none;
    color: black;
    }
  .social a{

    padding: 15px;

  }
  
  </style>
 
 
</section>
</body>
</html>
