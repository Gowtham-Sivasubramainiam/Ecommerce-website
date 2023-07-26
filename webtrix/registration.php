<html lang="en" >
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script type="text/javascript">
       function back(){
         window.location.href ="index.php";
       }
      
     </script>
     <?php
        $errmsg="";
         $fname="";
         $email="";
         $lname="";
          $phoneno="";
     if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit"])){
     $conn= mysqli_connect('localhost','root','root','choco') or die("Connection failed:" .mysqli_connect_error());
     if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword']) ){
     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $confirmpassword=$_POST['confirmpassword'];
     $passwordregex="/^(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[@$!%?&])[A-Za-z\d@$!%?&]{8,16}$/";
   $nameregex="/^[a-z A-Z]*$/";
   if(!preg_match($nameregex, $fname)){
       $errmsg="*Password should be in correct format";
   }
     else if($password!=$confirmpassword){
     $errmsg="*Password and confirm password are not same";
     }
    
     else{
     session_start();
   $sql="INSERT INTO `user` (`fname`,`lname`,`email`,`password`)VALUES ('$fname','$lname','$email','$password')";
   $query=mysqli_query($conn,$sql);
   if($query){
   $errmsg= '*Entry successful';
   $_SESSION['fname'] = $fname;
   
      header('Location: signin.php');
   }
   else{
   $errmsg= "*Error occoured";
   }

    }
     }
     else{
       $errmsg="*All fields are required";


      }
     }
    
      ?>
      <script>
       function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }}
       function myFunction1() {
  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}</script>
   </head>
  <link rel="stylesheet" href="resgistration.css">
<body >
  <div class="container" >
    <div class="title">Signup</div>
    <div class="content">
      <form    method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input name="fname" type="text" placeholder="Enter your Firstname" name="fname" value="<?php echo "$fname"; ?>" required pattern="[a-z A-Z]*">
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your Lastname" name="lname" value="<?php echo "$lname"; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" value="<?php echo "$email"; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" id="myInput" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="confirmpassword" id="myInput1" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Go Back" onclick="back()">
          <input type="submit" value="Register" name="submit" style="margin-left:85px;">
        </div>
        <span style="color:red"><?php echo $errmsg; ?></span>
      </form>
    </div>
  </div>
</body>
</html>