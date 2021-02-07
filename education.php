<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<title>eduction</title>
    	<link rel="stylesheet" href="nav.css">
    	<link rel="stylesheet" href="education1.css">
	</head>
	<body>
	   <nav>
		 <ul>
			<li><a href="home.php">home</a></li>
			<li><a href="home.php #about">about us</a></li>
			<li><a href="home.php #login">login</a></li>
			<li><a href=" home.php #contact">contact us</a></li>
		 </ul>
	   </nav>
	   <div class="container">
	   	    <header>
	   	      <h2>Available materials for their study</h2>
	   	      <a href="#sign" id="linkSign">Sign language</a>
	   	      <a href="#math" id="linkMath">Mathematics</a>
	      </header>
	      <!--sign language -->
	      <div id="sign">
	      	<?php
	      		  $con = new mysqli("localhost", "root", "", "yes i can");
	      		  $pre = $con -> prepare("select * from sign");
	      		  $pre -> execute();
	      		  $result = $pre -> get_result();
	      		  foreach ($result as $value) {
	      		  	echo "<button class='button1'>" . $value["name"] . "</button>";
	      		    echo "<div class='div'>";
	      		    echo "<h1>" . $value["title1"] . "</h1>";
	      		    echo "<img src = ' ". $value["img11"] . " ' >";
	      		    echo "<img src = ' ". $value["img12"] . " ' style = 'float:right;' >";
	      		    echo "<h1>" . $value["title2"] . "</h1>";
	      		    echo "<img src = ' ". $value["img21"] . " ' >";
	      		    echo "<img src = ' ". $value["img22"] . " ' style = 'float:right;' >";
	      		    echo "</div>";
	      		  	
	      		  }
	      		?>
	      </div>
	      <!--math lessons-->
	      <div id="math">
	      	<!--calculator-->
	      	<div class="calculator">
	      		<form>
	      			<input type="text" id="input">
	      		</form>
	      		<div class="lines">
	      			<button id="clear">clear</button>
	      			<button id="delete">delete</button>
	      			<button value="%" class="button">%</button>
	      			<button value="/" class="button">/</button>
	      		</div>
	      		<div class="lines">
	      			<button value="7" class="button">7</button>
	      			<button value="8" class="button">8</button>
	      			<button value="9" class="button">9</button>
	      			<button value="*" class="button">X</button>
	      		</div>
	      		<div class="lines">
	      			<button value="4" class="button">4</button>
	      			<button value="5" class="button">5</button>
	      			<button value="6" class="button">6</button>
	      			<button value="-" class="button">-</button>
	      		</div>
	      		<div class="lines">
	      			<button value="1" class="button">1</button>
	      			<button value="2" class="button">2</button>
	      			<button value="3" class="button">3</button>
	      			<button value="+" class="button">+</button>
	      		</div>
	      		<div class="lines">
	      			<button value="0" class="button">0</button>
	      			<button value="00" class="button">00</button>
	      			<button value="." class="button">.</button>
	      			<button id="equal">=</button>
	      		</div>
	      	</div>
	      	<!--lessons-->
	      	<div class="lessons">
	      		<?php
	      		  $con = new mysqli("localhost", "root", "", "yes i can");
	      		  $pre = $con -> prepare("select * from math");
	      		  $pre -> execute();
	      		  $result = $pre -> get_result();
	      		  foreach($result as $value){
	      		    echo "<button class='button1'>" . $value["name"] . "</button>";
	      		    echo "<div class='div'>";
	      		    echo "<h1>" . $value["title"] . "</h1>";
	      		    echo "<img src = ' ". $value["img1"] . " ' >";
	      		    echo "<img src = ' ". $value["img2"] . " ' style = 'border-radius:50%; float:right;' >";
	      		    echo "<p>" ."To see an explanation of that lesson click <a href=' ". $value["url"] . " ' >here</a></p>";
	      		    echo "</div>";
	      		}
	      		?>
	      	</div>
	      </div>
	   </div>
	   <script src="education1.js"></script>
	</body>
</html>