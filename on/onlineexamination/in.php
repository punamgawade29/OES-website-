



<html>

<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet"  href="modelstyle.css">
		<link rel="stylesheet"  href="gpastyle.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>

</head>

<body>
    <!-- Collect the nav links, forms, and other content for toggling -->
    
<div class="logoim">
<img src="logo.jpg">
</div>

<header >


<nav>


<div class="logo">


  <h1 class=""><b>MSBTE ONLINE EXAMINATION  SUMMER 2021</b></h1>
  <a href =" http://localhost/punam/navigation.php"><h4 ><b>Home</b></h4></a>
  <div class="menu">
  
  
 </header>
 
<div class="row">
<div class="col-lg-6">
<span class="logo" style="background-color:blue;">MSBTE ONLE EXAM</span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a></div>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="form-wrapper">


<img src="mylogo.png" alt="mylogo">
  
  

<!-- sign in form begins -->  
  <form  name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->

<div class="form-item">
  
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
    
  </div>


<!-- Text input-->
<div class="form-item">
  <label for="gender"></label>

    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>



<!-- Text input-->
<div class="form-item">
  <label  for="name"></label>  

  <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
    
  </div>
 



<!-- Text input-->
<div class="form-group">
  <label  for="email"></label>

    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>


<!-- Text input-->
<div class="form-item">
  <label  for="mob"></label>  
  
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
    
  </div>



<!-- Text input-->
<div class="form-item">
  <label  for="password"></label>
 
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  
</div>

<div class="form-item">
  <label  for="cpassword"></label>
 
    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
    
  
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-item">
  <label class="col-md-12 control-label" for=""></label>
  
    <input  type="submit" class="sub" value="sign up" class="btn btn-primary"/>
  
</div>


</form>
</div><!--col-md-6 end-->

</div><!--container end-->

<!--Footer start-->
<!--Footer start-->
<form>
<div class="footer">
  <h3 id="a1" style="font-family:Timesnewromman;">ABOUT US</h3>

<h3 >ADMIN LOGIN</h3>

<h3 >DEVELOPERS</h3>
<h3 >FEEDBACK</h3>
<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>

</div>
</body>
</html>
