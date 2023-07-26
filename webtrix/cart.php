<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script type="text/javascript">
       function back(){
         window.location.href ='dishes.php';
       }
       
function myFunction() {
  var x = document.getElementById("mySelect").value;
  var y=document.getElementById("a12").value;
  document.getElementById("demo").innerHTML = " " + x*y;
  document.getElementById("pr").value=x*y;
}
     </script>
     <?php
       $abc=$_COOKIE['id'];
       $prc=$_COOKIE['price'];
       session_start();
       $email=$_SESSION['email'];
        $errmsg="";
        $sucmsg="";
         $fname="";
         $lname="";
         $fname1="";
         $lname1="";
         
     if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit"]))
     {
    
     $conn = mysqli_connect('localhost', 'root', 'root', 'choco') or die("Connection failed: " . mysqli_connect_error());
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
     if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['lname1']) && isset($_POST['fname1'])) {
     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $fname1=$_POST['fname1'];
     $lname1=$_POST['lname1'];
    
   

   $sql="INSERT INTO `ord` (`qty`,`email`,`price`,`product`)VALUES ('$lname','$fname','$fname1','$lname1')";
   $query=mysqli_query($conn,$sql);
   if($query){
   $sucmsg= '*Order successful';

   }
   else{
   $errmsg= "*Error occoured";
   }

    }
  }
      ?>
 

   </head>
  <link rel="stylesheet" href="resgistration.css">
<body >
  <div class="container" >
    <div class="title">CART</div>
    <div class="content">
      <form  method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">  Email</span>
            <input type="email" placeholder="Enter your Firstname" name="fname" value="<?php echo " $email"; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Quantity</span>
            <input type="text" placeholder="QTY" id="mySelect" onchange="myFunction()" name="lname"  value=" "required>
            <input type="hidden" name="prc" id="a12" value="<?php echo" $prc";?>">
          </div>
          <div class="input-box">
            <span class="details">Product</span>
            <input type="text" placeholder="QTY" name="lname1"  value="<?php echo " $abc";?> "required>
          </div>
          <div class="input-box">
            <span class="details">Price</span>
            <input type="hidden" id="pr" name="fname1" value="">
            <p id="demo"></p>
          </div>
        </div>
        <div class="button">
          <input type="button" value="Go Back" onclick="back()">
          <input type="submit" value="Order" name="submit" style="margin-left:85px;">
        </div>
        <span style="color:red"><?php echo $errmsg; ?></span>
        <span style="color:Green"><?php echo $sucmsg; ?></span>
      </form>
    </div>
  </div>
</body>
</html>