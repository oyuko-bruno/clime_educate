<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>climb to educate</title>
    <link rel="stylesheet" href="style.css">
    <!---we had linked our css file----->
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href='#'>CLIMB to EDUCATE</a> 
                
            </div>
            
            
            <nav>
                <ul id='MenuItems'>
                    
                    <li><a href='#'>About Us</a></li>
        
                    
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                </ul>
            </nav>
        </div>
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login',action="validate.php",method="post">
                    <input type='text'class='input-field'placeholder='Email '  name="emailid" required>
		    <input type='password'class='input-field'placeholder='Enter Password' name="password" required >
		    <input type='checkbox'class='check-box'><span>Remember Password</span>
		    <button type='submit'class='submit-btn'>Log in</button>
		

     </form>



		 <form id='register' class='input-group-register',action="registratio.php",method="post">
		     <input type='text'class='input-field'placeholder='First Name'  name="user" required>
		     <input type='text'class='input-field'placeholder='Last Name '  name="last" >
		     <input type='email'class='input-field'placeholder='Email '  name="emailid" >
		     <input type='password'class='input-field'placeholder='Enter Password'  name="password" >
		     <input type='password'class='input-field'placeholder='Confirm Password'   name="pass" >
		     <input type='checkbox'class='check-box' name="checkbox"><span>I agree to the terms and                                                   conditions</span>
                    <button type='submit'class='submit-btn'>Register</button>
	         </form>
            </div>






 
        </div>
    </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>









<!----



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="style.css">

    <title>Document</title>
</head>
<body>
    
  <div class="full-page">
      <div class="navbar">
<div>
    <a href="website.html">Climb to Educate </a>
</div>
<nav>
    <ul id="menuitems">
        <li><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Contact us</a></li>
        <li>
            <button class="loginbtn"onclick="document.getElementById("login-form")
            .style.display="block".style="width:auto;">Login</button>
        </li>
    </ul>
</nav>
<!--navigation ends here
      </div>
      <!--login form-
      <div id="login-form"class="login-page">
          <div class="form-box">
              <div id="btn">
              <button type="button" onclick="login()"class="toggle-btn">Login</button>
              <button type="button" onclick="register()"class="toggle-btn">Register</button>
</div>
              
          </div>
          <form id="login"class="input-group-login">
              <input type="text"class="input-field"placeholder="Email"required>
              <input type="password"class="input-field"placeholder="Enter password"required>
              <input type="checkbox"class="check-box"><span>Remember password</span>
              <button type="submit"class="submit-btn">Login</button>
              
          </form>
          <!--Rgister form--
          <form id="register"class="input-group-register">
              <input type="text"class="input-field"placeholder="First Name"required>
              <input type="text"class="input-field"placeholder="Last Name"required>
              <input type="email"class="input-field"placeholder="Email"required>
<input type="text"class="input-field"placeholder="First Name"required>
<input type="password"class="input-field"placeholder="Enter Password"required>
<input type="password"class="input-field"placeholder="Confirm Password"required>
<input type="checkbox"class="check-box"><span>I agree to the terms and conditions</span>
<button type="submit"class="submit-btn">Register</button>
          </form>
      </div>
  </div>
    <script>
        var x=document.getElementById("login");
var y=document.getElementById("register");
var z=document.getElementById("btn");
function register(){
    x.style.left="400px";
    y.style.left="50px";
    z.style.left="110px";
}
function login(){
    x.style.left="50px";
    y.style.left="450px";
    z.style.left="0px";
}
    </script>
    <script>
        var modal=document.getElementById("login-form");
window.onclick=function(event){
    if(event.target==modal){
        modal.style.display="none";
    }
}

    </script>
    -->
</body>
</html>