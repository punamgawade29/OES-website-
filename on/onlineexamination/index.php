<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Project Worlds || TEST YOUR SKILL </title>
<link rel="stylesheet"  href="navsta.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
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
<style>
body{
	background-image:url("bg.jpg");
}
 .logoim img{
	 height:18%;
	 position:absolute;
	 margin-top:0px;
	 margin-left:0px;
 }

</style>
<div class="logoim">
<img src="logo.jpg">
</div>
<style>
.header{
	width:100%;
	height:18vh;

	font-size:120%;
	background-color:rgb(26, 140, 255 ,1);
	padding-left: 300px;
	display:flex;
	align:center;
	color:white;
	font-family:'Timesnewromman';
	
}
.footer{
	margin-left:-100px;
	padding:0px;
	
}
#b1{
	margin-top:0px;
	margin-left:-720px;
	
}

#bt{
	margin-left:-100px;
	
}

.modal{
	 
}
.modal-body{
	border:1px solid;
	color:black;

}
</style>


<div class="header">
<h1>MSBTE ONLINE EXAM SUMMER-2021 </h1>
<div class="row">
<div class="col-lg-6">
<span class="logo"> </span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal" &nbsp;&nbsp;&nbsp;><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;&nbsp;<span class="title1"><b>&nbsp;&nbsp;&nbsp;Signin</b></span></a></div>
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

<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">
<!-- sign in form begins -->  
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="enroll" name="enroll" placeholder="Enter your Enrollment No" class="form-control input-md" type="number">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="Branch"></label>
  <div class="col-md-12">
    <select id="branch" name="branch" placeholder="Enter your Branch" class="form-control input-md" >
   <option value="Male">Select Branch</option>
  <option value="Information Technology">Information Technology</option>
  <option value="Computer Science">Computer Science</option> </select>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option> </select>
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
    
  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" class="sub" value="sign up" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->

<!--Footer start-->
<div class="row footer" style="background-color:rgb(26, 140, 255 ,1);">
<div class="col-md-3 box" style="color:white;">
<a href="about.html" target="_self" >About us</a>
</div>
<div class="col-md-3 box" id="bt">
<a href="#" data-toggle="modal" data-target="#login" >Admin Login</a></div>
<div class="col-md-3 box" id="bt2">
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers" style="margin-left:-100px;">Developers</a>
</div>

<div class="col-md-3 box" id="b1" >
<a href="feedback.php" target="_blank" style="margin:80px;">Feedback</a></div></div>

<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
	  
      <<div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="ppp.jpeg" width=100 height=100 alt="Punam Ashok Gawade" >
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/punam" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Punam Ashok Gawade</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 91XXXXXXXX</h4>
		<h4 style="font-family:'typo' ">gawade0710@gmail.com</h4>
		<h4 style="font-family:'typo' ">Government Ploytechnic Awasari(kh)</h4></div></div>
		</p>
      </div>
    
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="sss.jpeg" width=100 height=100 alt="Sakshi Sandip Suryavanshi" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/ywts" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Sakshi Sandip Suryavanshi</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 70XXXXXXXX</h4>
		<h4 style="font-family:'typo' ">sakshisuryawa111@gmail.com</h4>
		<h4 style="font-family:'typo' ">Government Ploytechnic Awasari(kh)</h4></div></div>
		</p>
      </div>

      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="rd.jpeg" width=100 height=100 alt="Rohit Ravindra Dangat" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/aha" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Rohit Ravindra Dangat</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 99XXXXXXXX</h4>
		<h4 style="font-family:'typo' ">rohitdangat377@gmail.com</h4>
		<h4 style="font-family:'typo' ">Government Ploytechnic Awasari(kh)</h4></div></div>
		</p>
      </div>

      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="a1.jpeg" width=100 height=100 alt="Naikare Akhil Ajay" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/kahst2" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Naikare Akhil Ajay</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 73XXXXXXXX</h4>
		<h4 style="font-family:'typo' ">akhilnaikarep@gmail.com</h4>
		<h4 style="font-family:'typo' ">Government Ploytechnic Awasari(kh)</h4></div></div>
		</p>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
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
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
