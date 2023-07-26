<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <title>Signin</title>
    <link rel="stylesheet" href="signin.css">
    <script type="text/javascript">
      function back(){
        window.location.href ="index.php";
      }
    </script>
  <?php
    $errmsg="";
  if ($_SERVER['REQUEST_METHOD']=='POST'){
       $errmsg="";
       session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  $conn= mysqli_connect('localhost','root','root','choco') or die("Connection failed:" .mysqli_connect_error());
  $sql= "SELECT * FROM user WHERE email = '$username' AND password = '$password' ";
  $result = mysqli_query($conn,$sql);
  $check = mysqli_fetch_array($result);
  if(isset($check)){
        $_SESSION['email'] = $username;
    header('Location: PHARM.php');
  }
  else{
  $errmsg="*Email or password is wrong";
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
  }
}
    </script>

  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" >
        <div class="txt_field">
          <input name="username" type="text"  required>
          <span></span>
          <label>Mail</label>
        </div>
        <div class="txt_field">
          <input name="password" type="password" id="myInput" required>
          <span></span>
          <label>Password</label>
        </div>
        <div>
        <input type="checkbox" onclick="myFunction()" class=txt_field  ><label style="color:grey;margin-left:5%">show</label>
</div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="registration.php">Signup</a>
        </div>
        <span style="color:red "><?php echo "$errmsg"; ?></span>
      </form>
    </div>

  </body>
</html>
