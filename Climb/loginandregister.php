<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connecting Login and Registration Form to Database-----SeekCoding</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="full-page">
        <div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>AwesomeWare</h1></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>Home</a></li>
                    <li><a href='#'>About us</a></li>
                    <li><a href='#'>Products</a></li>
                    <li><a href='#'>Offers</a></li>
                    <li><button class='loginbtn'onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                    <li><button class='loginbtn'onclick="document.getElementById('register-form').style.display='block'" style="width:auto;">Register</button></li>
                </ul>
            </nav>
        </div>
        <div class="sub-page">
          <div class="overlay"></div>
           <div class="text">
               <p>awesomeware was born at the intersection of style and technology. Thanks to our inspiring collections and our<br> impeccable customer service, we have been highly <br>successful since day one. Browse through our site <br>and check out the latest additions to our collection,<br> and feel free to get in touch with our team if <br>you need any assistance.<br> Happy shopping!</p>
            </div>
        </div>
        <div id='login-form' class="login-page">
            <div class="form-box">
                <span onclick="document.getElementById('login-form').style.display='none'" class="close">&times;</span>
                <div class="form">
                    <form class='login-form', action="validate.php", method="post">
                        <center><h1 class="main-heading">Login Form</h1></center>
				        <input type="text"name='emailid' placeholder="Email ID", required/>
				        <input type="password" name='password' placeholder="password", required/>
				        <button>LOGIN</button>
				    </form>
                </div>
            </div>
        </div>
        <div id="register-form" class='register-page'>
            <div class="form-box1">
               <span onclick="document.getElementById('register-form').style.display='none'" class="close">&times;</span>
                <div class="form1">
                    <form class='register-form', action="registration.php", method="post">
                        <center><h1 class="main-heading">Register Form</h1></center>
				        <input type="text" name='user'placeholder="user name" required/>
				        <input type="text" name='emailid'placeholder="email-id" required/>
				        <input type="password"name='password' placeholder="password" required/>
				        <button>REGISTER</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.full-page
{
    height: 100vh;
    width: 100%;
    background: linear-gradient(white,rgba(0,0,0,0.9));
    position: absolute;
}
.navbar
{
    display: flex;
    align-items: center;
    padding: 20px;
    padding-left: 50px;
    padding-right: 30px;
    padding-top: 10px;
}
.logo a
{
    text-decoration: none;
    color: coral;
    font-size: 20px;
    font-family: 'Dancing Script', cursive;
}
nav
{
    flex: 1;
    text-align: right;
    padding-top: 6px;
}
nav ul 
{
    display: inline-block;
    list-style: none;
}
nav ul li
{
    display: inline-block;
    margin-right: 70px;
}
nav ul li a
{
    text-decoration: none;
    font-size: 20px;
    color: coral;
    font-family: sans-serif;
}
nav ul li button
{
    font-size: 20px;
    color: coral;
    outline: none;
    border: none;
    background: transparent;
    cursor: pointer;
    font-family: sans-serif;
}
.sub-page
{
    width: 1266px;
    height: 550px;
    position: absolute;
    background: url(abc.png);
    background-size: cover;
    background-position: center;
    left: 50px;
    top: 70px;
}
.overlay
{
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(0,0,0,0.5),white);
    opacity: 0;
    transition: 1s;
}
.sub-page:hover .overlay
{
    opacity: 1;
}
.text
{
    text-align: center;
    color: white;
    padding-right: 350px;
    padding-left: 350px;
    font-size: 20px;
    font-family: 'Chilanka', cursive;
    transform: translateY(-220%);
    opacity: 0;
    transition: 1s;
}
.sub-page:hover .text
{
    opacity: 1;
}
#login-form
{
    display: none;
}
.form-box
{
    width: 300px;
    height: 400px;
    position: relative;
    top: 90px;
    left: 210px;
    background: rgba(0,0,0,0.6);
}
.close 
{
    position: relative;
    left: 270px;
    bottom: 0;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus 
{
    color: red;
    cursor: pointer;
}
.main-heading
{
    color: orangered;
    padding-bottom: 20px;
}
.form
{
    position: relative;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    bottom: 20px;
}
.form input, .form1 input
{
    font-family: sans-serif;
    outline: none;
    border: none;
    border-bottom: 1px solid black;
    width: 100%;
    margin: 0 0 15px;
    padding: 15px;
    font-size: 14px;
}
.form button, .form1 button
{
    font-family: sans-serif;
    width: 100%;
    color: white;
    font-size: 14px;
    cursor: pointer;
    padding: 15px;
    border: none;
    background: coral;
}
.form .asking
{
    font-size: 12px;
    margin: 15px 0 0;
    color: white;
}
.form .asking a
{
    color: orangered;
    text-decoration: none;
}
#register-form
{
    display: none;
}
.form-box1
{
    width: 300px;
    height: 400px;
    position: absolute;
    bottom: 90px;
    left: 860px;
    background: rgba(0,0,0,0.6);
}
.main-heading
{
    color: orangered;
    padding-bottom: 20px;
}
.form1
{
    position: relative;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    bottom: 20px;
}
    </style>
</body>
</html>

