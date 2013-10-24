<?php 
// error_reporting(0);
 ?>


<?php

if(isset($_POST['username']))
{

        $username = $_POST['username'];
        $password = $_POST['password'];

$link = mysqli_connect("localhost", "root", "root", "shopping");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT * FROM login WHERE username ='".$username."' AND password = '".$password."'")) {

 
    $row_cnt = mysqli_num_rows($result);

    if($row_cnt==1)
     {
      // echo "You have been succesully logged in ,continue shopping!!";
       header("Location: Billing.php");
       exit();

     }else  
     {

      echo "You have entered Incorrect credentials please login again";
      
    }


        mysqli_free_result($result);
}
 
  
  mysqli_close($link);
  

}

?>



<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <meta name="description" content="" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="styles/bootstrap.css" rel="stylesheet">
<link href="styles/bootstrap-responsive.css" rel="stylesheet">
<link href="styles/default.css" rel="stylesheet">
<link href="styles/carousel.css" rel="stylesheet">
<link href="styles/style.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</head>



  <form method="post" action="login.php">
    <legend>Please login below</legend>

  
    <!-- <label for="username">username</label> -->
    <p><input type="text" placeholder="username" name="username" id="username "></p>

    <!-- <label for="pass">password</label> -->
    <p><input type="password" placeholder="password" name="password" id="password"></p>


         <p><input type="submit" value="Login" onclick="http://www.google.com" ></p>
        <!-- <input type="submit" class="btn btn-primary"  value="Login"/> -->

            <label class="checkbox"> 
            <input type="checkbox">Remember Me</label>

        <p>New User? Click below to register</p>
         <!-- <input role="button" class="btn btn-primary"  value="Register"/> -->
         <p><a class ="btn btn-info" href="#register" role="button" data-toggle="modal">register</a></p>


     <!--  <div class="pull-right"> 
       <p><a class ="btn btn-info" href="#register" role="button" data-toggle="modal">register</a></p>
     </div> -->
  

  </form>

<div id="register" class="modal hide fade" arial-labelledby="modalLabel" arial-hidden="true">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" arial-hidden="true"><i class="icon-remove"></i></button>
<h3 id="modalLabel">Register</h3>

</div>

<div class="modal-body">
<form action ="register.php" method=get>
    <p class="label label-info">required</p>
<div class="controls controls-row">

</div>
<div class="controls controls-group" info>
<input type="text" class="span5" name="regname" placeholder="username" id="inputInfo">
<input type="text" class="span5" name="regemail" placeholder="email" id="inputInfo">
<input type="password" class="span5" name="regpass1"  placeholder="password" id="inputInfo">
<input type="password" class="span5" name="regpass2" placeholder="confirm password" id="inputInfo">    
</div>



</div>
<div class="modal-footer">
<button class="btn btn-danger" data-dismiss="modal" arial-hidden="true">cancel</button>
<button type="submit" class="btn btn-success">register</button>
</div>
</div>


</body>


<!-- <body>

<form method="post" action=login.php>

    Username: <input type="text" name="username"/><br/><br/>
    Password: <input type="password" name="password"/><br/><br/>

    <input type="submit" name="submit" value="Login"/><br/><br/>
</form>

<div class ="span4" id ="sidebar">
<div class="well">

<form> -->
 
<!-- <fieldset>
<legend>Login</legend>
<form method="post" action=login.php>
  <input type="text" class="input-block-level" placeholder="username" name="username"/>
    <input type="password" class="input-block-level" placeholder="password" name="password"/>    
     
        <input type="submit" class="btn btn-primary"  value="login" />
</form>


    <label class="checkbox"> 
        
        <input type="checkbox">Remember Me</label>
    <div class="pull-right">
       
            <a class ="btn btn-info" href="#register" role="button" data-toggle="modal">register</a>

    </div>
    </fieldset>
        
    </form> 

    </div>
    
    
    </div> 
  -->
</html>


















