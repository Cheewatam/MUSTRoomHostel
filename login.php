<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>My client login area</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
 
<div class='container'>
  <div class='container_inner'>
    <div class='container_inner__login'>
      <div class='login'>
        <div class='login_profile'>
          <img class='logo'>
          <!-- <img class='pulse' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/rings.svg'> -->
        </div>
        <div class='login_desc'>
          <h3>
            Welcome back
            <span>MUST Room</span>
          </h3>
        </div>
        <div class='login_inputs'>
          <form action="login_api.php" method="POST">
            <div class='tip'>
              Your password will have been emailed to you along with this development link.
            </div>
            <input placeholder='Your Name' required='required' type="username" name="username"><br>
            <input placeholder='Your password' required='required' type="password" name="password">
            <input type="submit" value='Log in' name="submit">
          </form>
          <div class='forgotten'>
            <a href='#'>Forgotten your password?</a>
          </div>
          <div class='login_check'>
            <br/>Logging in to your client area <br/>
            <span>please wait</span>
          </div>
        </div>
      </div>
      <!-- <div class='tick'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/vtick.svg'>
      </div> -->
    </div>
  </div>
</div>
<!--   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script> -->

    <script src="js/index.js"></script>

</body>
</html>
