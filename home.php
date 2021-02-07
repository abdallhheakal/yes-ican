<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>home</title>
	<link rel="stylesheet" href="nav.css">
	<link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="formStyle.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="home.php">home</a></li>
			<li><a href="#about">about us</a></li>
			<li><a href="#login">login</a></li>
			<li><a href="#contact">contact us</a></li>
		</ul>
	</nav>
	<header>
        <img src="images/cover.jpg" >
    </header>
	<div class="container">
        <!--sections -->
        <section id="about">
            <h2>sections of yes i can</h2>
            <!--education section-->
            <div>
                <h1>education</h1>
                <img src="images/education.jpg">
                <button id ="education">see more</button>
            </div>
            <!--job section-->
            <div>
                <h1>job</h1>
                <img src="images/job.jpg">
                <button id="job">see more</button>
            </div>
        </section>
        <!--login-->
        <h2>login</h2>
        <div id="login">
        	<form action="" method="post" id="loginForm">
        		<h1>login</h1>
        		<input type="email" name="email" placeholder="enter email" required="">
        		<input type="password" name = "Password" placeholder="enter password" required="">
        		<input type="submit" value="login" name="login">
        		<hr>
        		<a href="#register" id="link">you don't have account?</a>
        	</form>
            <!--register-->
            <form action="" method="post" id="register">
                <h1>register</h1>
                <input type="text" name="username" placeholder="enter username" required="">
                <input type="email" name="email" placeholder="enter email" required="">
                <input type="password" name = "password" placeholder="enter password"   minlength="10" required="" id="password">
                <input type="password" name = " confirmPassword" placeholder="confirm password" minlength="10" required="" id="confirm">
                <p id="p" style="text-align:right; text-transform:lowercase;"></p>
                <input type="submit" value="register" name="register">
                <hr>
                <a href="#loginForm" id="link1">you have account ?</a>
            </form>
            <?php 
             @$username = $_POST['username'];
             @$email    = $_POST['email'];
             @$password = $_POST['password'];
             @$confirm  = $_POST['confirmPassword'];
             if(isset($_POST['register']) && $password === $confirm){
                $con = new mysqli("localhost", "root", "", "yes i can");
                $prepare = $con -> prepare("insert into data(username, email, password) values(?,?,?)");
                $prepare -> bind_param("sss",$username, $email, $password);
                $prepare -> execute();
            }
            ?>
        </div>
    </div>
    <!--contact-->
    <footer id="contact">
    	<p>
    		contact us  <i  class="fab fa-facebook" id="facebook"></i>
    	</p>
    </footer>
    <script  src="home.js"></script>
</body>
</html>