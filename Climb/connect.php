
<?php 
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];

$password1=$_POST['password1'];
$password2=$_POST['password2'];

//connecting to datbase
$conn=new mysqli('localhost','root','','climb_educate');
if($conn->connect_error){
	die('connection Failed:'.$conn->connect_error);
}else{

	$stmt = $conn->prepare("insert into register(firstname,lastname,email,password1,password2 values(?,?,?,?,?)");
	$stmt->bind_param("sssss",$firstname,$lastname,$email,$password1,$password2);
    $stmt->excute();
    echo "Registration succesfully";
    $stmt->close();
    $stmt->close();

}





?>
/*
require('db.php')

//$errors= $array_push();

//if form submitted insert values into the database
if (isset($_REQUEST['email'])) {
	//removes backslashes
	$email= stripcslashes(($_REQUEST['email']));
	//escapes special characters in a string
	$email = mysqli_real_escape_string($con,$email);
	$firstname= stripcslashes(($_REQUEST['firstname']));
	$firstname = mysqli_real_escape_string($con,$firstname);
	$password1 = stripcslashes(($_REQUEST['password1']));
	$password1= mysqli_real_escape_string($con,$password1);
	$lastname= stripcslashes(($_REQUEST['lastname']));
	$lastname = mysqli_real_escape_string($con,$lasttname);
	$password2= stripcslashes(($_REQUEST['password2']));
	$password2 = mysqli_real_escape_string($con,$password2);
   
   

	//checking for already exists usernames
//	$user_check_query = "SELECT * FROM `users` WHERE username ='$username'";
//	$result = mysqli_query($con,$user_check_query);
//	$user = mysqli_fetch_assoc($result);

//	if ('user') {
//		if ($user['username']===$username) {
//			array_push($errors, "The name already exists");
//		}
//	}
//	if (count($errors)==0) {
		

	//	$sql_e = "SELECT * FROM `input` WHERE name='$name' or email='$email' ";
		
	//	$res_e = mysqli_query($con,$sql_e);

	//	if(mysqli_num_rows($res_e)> 0){

		//	echo "<br/> Sorry....Email['$name'] ['$email'] already exists";

		//	echo "<br/><br/>Please click here to try another name <a href ='contact us.php'>Contact us</a>";
		
		 
	//	}}
	
	//	else {
			
		
//	$password=md5($password);// encrypting
	

	$query="INSERT into `register` (email,firstname,lastname,password2,password1) VALUES ('$email','$firstname','$lastname','$password2','$password2')";
	$result= mysqli_query($con,$query);
if ($result) {
		echo"<div class = 'update'>
		<h5> You are succesfully Registered.
		! I will respond to you as soon as possible.</h5>
	<div class='btn'>
				<input type='submit'>
			</div>




			
	</div>";

	}
   }
 else
{
	
	?>
	
	

	<form name="index" action="" method="post">





 ?>


