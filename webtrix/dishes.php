<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TABLETS</title>
    <link rel="stylesheet" href="pricing.css">
    <script type="text/javascript">
      function change(){
        window.location.href ="index.php";
      }
      function change1(){
        window.location.href ="PHARM.php";
      }
      function rtohome(){
        window.location.href ="PHARM.php";
      }
     
    </script>
  </head>
  <?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['item'])) {
      setcookie('id', $_POST['item'], time() + (86400 * 30), "/");
      setcookie('price', $_POST['prc'], time() + (86400 * 30), "/");
      header('Location: cart.php');
      exit();
    }
  }
  
  ?><style>
 #i {
         cursor: pointer;
  }</style>
  <body>

    <div class="Nav" id="Nav1">
      <div class="NavbarContainer">
        <img src="download.png" alt="logo" class="NavLogo" style="border-radius: 60%;  " onclick="rtohome()">
        <div class="MobileIcon">
        <i class="fa fa-bars"></i>
        </div>
        <ul class="NavMenu ">
          <li class="NavItem"><a id="linkcolor" onclick="rtohome()" class="NavLinks" href="index.php#about" style="color:black">About</a></li>
          <li class="NavItem"><a id="linkcolor2"onclick="rtohome()" class="NavLinks" href="index.php#contact" style="color:black">Contact Us</a></li>
        </ul>
        <div class="NavBtn">
          <button type="button" name="button" class="NavBtnLink" onclick="change()">log out</button>
          <button type="button" name="button" class="NavBtnLink" onclick="change1()" style="margin-left: 8%;">Go Back</button>
        </div>
      </div>
    </div>
    

    <form method="post">
    <div class="pricingcontainer" style="font-family: ALGERIAN; ">
      <div class="pricingwrapper">
        <div class="columns">
  <ul class="price" >
    <li class="header"  >PARACETAMOL</li>
    <div class="imagewrapper">
    <img style="height:150px; width:150px;" src="pills-out-from-bottle.jpg"  alt="">
    </div>

    <li class="grey">150 RS</li>
    <li style="font-family: Meiryo; font-size: 17px">Paracetamol is a commonly used medicine that can help treat pain and reduce a high temperature. Relieve mild or moderate pain, such as headaches, toothache or sprains</li>
    <input type="hidden" name="item" value="PARACETAMOL">
    <input type="hidden" name="prc" value="150">
    <input type="submit" class="button" id="i" value="BUY" style="margin-left: 40%; margin-bottom:2%;margin-top:3%" >
  </ul>
</div>
      </div>
</div>
</form>
<form method="post">
    <div class="pricingcontainer" style="font-family: ALGERIAN;">
      <div class="pricingwrapper">
<div class="columns">
<ul class="price">
<li class="header" name="1">DIGINE</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="download.jpeg" alt="">
</div>

<li class="grey">200 RS</li>
    <li style="font-family: Meiryo; font-size: 17px">Digene is an antacid that is known to provide effective relief from acidity and its symptoms such as heartburn, stomach discomfort, and abdominal pain</li>
    <input type="hidden" name="item" value="DIGINE">
    <input type="hidden" name="prc" value="200">
    <input type="submit" class="button" id="i" value="BUY" style="margin-left: 40%; margin-bottom:2%;margin-top:3%" >
</ul>
</div>
</form>
<form method="post">
<div class="columns">
<ul class="price">
<li class="header" name="1">DIGINE TABLETS</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="download (1).jpeg" alt="">
</div>

<li class="grey"  >150 RS</li>
    <li style="font-family: Meiryo; font-size: 17px">provide effective relief from acidity and its symptoms such as heartburn,<br> stomach discomfort, and abdominal pain</li>
    <input type="hidden" name="item" value="DIGINE TABLETS">
    <input type="hidden" name="prc" value="150">
    <input type="submit" class="button" value="BUY" id="i" style="margin-left: 40%; margin-bottom:2%;margin-top:3%" >
</ul>
</div>
</form>
<form method="post">
<div class="columns">
<ul class="price">
<li class="header" name="1" >METAPHARMIN HYPOCHLORIDE</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="download (2).jpeg" alt="">
</div>

<li class="grey">650 RS</li>
    <li style="font-family: Meiryo; font-size: 17px">Metformin hydrochloride is a biguanide with antihyperglycaemic effects, lowering both basal and postprandial plasma glucose!!PRESCRIPTION REQUIRED!!</li>
    <input type="hidden" name="item" value="METAPHARMIN HYPOCHLORIDE">
    <input type="hidden" name="prc" value="650">
    <input type="submit" class="button" value="BUY" id="i" style="margin-left: 40%; margin-bottom:2%;margin-top:3%" >
</ul>
</div>
</form>
<form method="post">
<div class="columns">
<ul class="price">
<li class="header" name="1">CETZINE</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="download (3).jpeg" alt="">
</div>

<li class="grey" >150 RS</li>
    <li style="font-family: Meiryo; font-size: 17px">Cetzine Tablet is a Tablet manufactured by GLAXO SMITHKLINE PHARMA. It is commonly used for the diagnosis or treatment of allergy symptoms, itching , cold</li>
    <input type="hidden" name="item" value="CETZINE">
    <input type="hidden" name="prc" value="150">
    <input type="submit" class="button" value="BUY" id="i" style="margin-left: 40%; margin-bottom:2%;margin-top:3%" >
</ul>
</div>
</form>
<form method="post">
<div class="columns">
<ul class="price">
<li class="header" name="1">cough syrup</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images (1).jpeg" alt="">
</div>

<li class="grey">250 RS</li>
    <li style="font-family: Meiryo; font-size: 17px">This combination medication is used to temporarily treat cough, chest congestion, and stuffy nose symptoms caused by the common cold, flu, ETC</li>
    <input type="hidden" name="item" value="COUGH SYRUP">
    <input type="hidden" name="prc" value="250">
    <input type="submit" class="button" value="BUY" id="i" style="margin-left: 40%; margin-bottom:2%;margin-top:3%" >
</ul>
</div>
</form>
      </div>
    </div>
    
  </body>
</html>
