<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Pharmeasy</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&display=swap" rel="stylesheet">
 <style>
  #about
{
  background-color: azure;
}
  </style>
  </head>
  <body  id="h1">

    <script type="text/javascript">
    function rtohome(){
      window.location.href ="signin.php";
    }
    function change(){
      window.location.href ="signin.php";
    }
    function abc()
    {
      window.location.href="signin.php";
    }
    function ab()
    {
      window.location.href="signin.php";
    }
    window.onscroll=function(){
      var top=window.scrollY;
      if(top>=50){
        document.getElementById("Nav1").style.backgroundColor = "#9ffcff";
        document.getElementById("linkcolor").style.color = "black";
        document.getElementById("linkcolor1").style.color = "black";
        document.getElementById("linkcolor2").style.color = "black";
        document.getElementById("linkcolor3").style.color = "black";
      }
      else{
        document.getElementById("Nav1").style.backgroundColor = "transparent";
        document.getElementById("linkcolor").style.color = "white";
        document.getElementById("linkcolor1").style.color = "white";
        document.getElementById("linkcolor2").style.color = "white";
        document.getElementById("linkcolor3").style.color = "white";
      }
    }
    </script>
<div class="Nav" id="Nav1">
  <div class="NavbarContainer" >
    <img src="videos\college1.mp4" alt="" class="NavLogo" onclick="rtohome()">
    <div class="MobileIcon">
    <i class="fa fa-bars"></i>
    </div>
    <ul class="NavMenu ">
      <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="#about">About</a></li>
            <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="registration.php">Signup</a></li>
    </ul>
    <div class="NavBtn">
      <button type="button" name="button" class="NavBtnLink"  onclick="change()">Log In</button>
    </div>
  </div>
</div>
 <div class="HeroContainer">
  <div class="HeroBg">
    <video muted autoplay="autoplay" loop class="VideoBg">
  <source src="video.mp4" type="video/mp4">
 </video>
</div>
<div class="HeroContent">
  <marquee><h1 class="HeroH1">Pharmeasy</h1></marquee>
  <p class="HeroP">'Your health partner'</p>
  <div class="HeroBtnWrapper">
<button type="button" name="button" class="NavBtnLink"  onclick="return change()">Get Started</button>
  </div>
</div>
</div>
<div class="InfoContainer" id="about">
<div class="InfoWrapper">
<div class="InfoRow">
<div class="Column1">
<div class="TextWrapper">
<p class="TopLine" style="color:black">MEDICINES!!!</p>
<h1 class="Heading"style="color:black">TRACK YOUR HEALTH</h1>
<div class="BtnWrap">
<button type="button" name="button" class="NavBtnLink" onclick="return abc()">ORDER NOW</button>
</div>
</div>
</div>

<div class="Column2">
<div class="ImgWrap">
<img class="Img" src="high-angle-pill-foils-plastic-containers.jpg" alt="IMAGE" style="border-radius:40px">
</div>
</div>
</div>
</div>

</div>





<div class="InfoContainer">
<div class="InfoWrapper">

<div class="InfoRow" style="grid-template-areas:'col1 col2' ;">
<div class="Column1">
<div class="TextWrapper">
<p class="TopLine">GET YOUR CART</p>
<h1 class="Heading">BE HEALTHIER ALWAYS</h1>
<p class="Subtitle">ALL IS WELL</p>
<div class="BtnWrap">
<button type="button" name="button" class="NavBtnLink" onclick="return ab()">Get Started</button>
</div>
</div>
</div>

<div class="Column2">
<div class="ImgWrap">
<img class="Img" src="flat-lay-time-medicine.jpg"  style="border-radius:40%"alt="MEDICINES">
</div>
</div>
</div>
</div>
</div>

<!-- footer -->
<div class="FooterContainer" id="contact">
<div class="FooterWrap">
  <div class="FooterLinksContainer">
    <div class="FooterLinksWrapper">
        <div class="FooterLinkItems">
            <h1 class="FooterLinkTitle" style="margin-bottom: 10%;">About Us</h1>
          
            <a href="#about" class="FooterLink"  style="margin-bottom: 8%;">Services</a>
        
        </div>
    </div>
  </div>

  <div class="SocialMedia">
    <div class="SocialMediaWrap">
      <a href="#" class="SocialLogo">Pharmeasy</a>
      <p class="WebsiteRights">Pharmeasy © 2023</p>
      <div class="SocialIcons">
        <a href="https://www.facebook.com/kec.erode/" class="SocialIconLink"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="https://twitter.com/konguofficial?lang=en" class="SocialIconLink"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/konguengineeringcollege/?hl=en" class="SocialIconLink"><i class="fa fa-instagram" aria-hidden="true"></i></a>
     </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
