

<?php
session_start();

$connection=mysqli_connect('localhost','root','');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'climb_educate');


$email=$_POST['email'];
$password=$_POST['password'];



$select="select * from register where email='$email' && password='$password'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    header('location:menu.php');
}
else
{
    header('location:loginandregiste.php');
}
?>

