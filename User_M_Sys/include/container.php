
</head>
<body>
<div class="language_translator" id="google_translate_element">
<p id="change_lang">Change language </p>
    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoodleTranslate"></script>
    <script>
      function loadGoodleTranslate(){
        new google.translate.TranslateElement(
          "google_translate_element"
        )
      }
     </script>

     <style>
       #google_translate_element{
         width: 160px;
         margin-left: 5px;
         margin-top: 5px;
         text-align: center;
         border-radius: 5px;
         background-color: green;
       }
       #change_lang{
         color: white;
         font-size: 12px;
         font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
       }
     </style>
   </div> 
      
    
    
   
 <div class="logo">
  <a href="index.html"><img src="../images/29221592-removebg-preview.png " width="120px" height="120px"></a>
  <a href="index.html"><h1><b>Digital Agriculture</b></h1></a>
 </div>

 <br>
 <br>
 <br>
 <hr> 

<header> 
<div class="navbar">
  <ul>
   <li><a href="index.php"><b>Home</b></a></li>

    <li><b>About Us</b>
      <ul class="dropdown">
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
        <li><a href="../Agriculture.html"><b>Agriculture</b></a></li>
          <li><a href="../SubF.html"><b>Subsistence Farming</b></a></li>
 
        <li><a href="../shiftingagri.html"><b>Shifting Agriculture</b></a></li>
          <li><a href="../Plantingagri.html"><b>Plantation Agriculture</b></a></li>
          <li><a href="../Intensive.html"><b>Intensive Farming</b></a></li>

          <li><a href="../OF.html"><b>Organic Farming</b></a></li>

        <li><a href="../More3.html"><b>More...</b></a></li>
      </ul>
    </li>
    <li><a href="#"><b><?php echo ucwords($_SESSION['name']); ?> </b></a>
	   <ul class="dropdown3">
            <li><a href="account.php"><b>My Profile</b></a></li>						
            <li><a href="logout.php"><b>Logout</b></a></li>
	   </ul>
	</li> 
    <li><a href="edit_account.php"><b>Edit Account</b></a></li>

    
   </header>
	
	<div class="container" style="min-height:500px;">
	<div class=''>
	</div>
