<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$gender = $_POST['gender'];
$enroll = $_POST['enroll'];
$branch = $_POST['branch'];
$college = $_POST['college'];
$email = $_POST['email'];
$mob = $_POST['mob'];
$password = $_POST['password'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$gender = stripslashes($gender);
$gender = addslashes($gender);
$enroll = addslashes($enroll);
$enroll = stripslashes($enroll);

$branch = addslashes($branch);
$branch = stripslashes($branch);

$mob = stripslashes($mob);
$mob = addslashes($mob);

$college = stripslashes($college);
$college = addslashes($college);
$email = stripslashes($email);
$email = addslashes($email);


$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$name' ,'$gender' ,'$enroll' , '$branch' , '$college','$email' ,'$mob', '$password')");
if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;

header("location:account.php?q=1");
}
else
{
header("location:index.php?q7=Email Already Registered!!!");
}
ob_end_flush();
?>