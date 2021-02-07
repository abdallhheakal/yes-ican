<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>job</title>
	<link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="job.css">
  <link rel="stylesheet" href="formStyle.css">
  </head>
  <body>
  	<nav>
		<ul>
			<li><a href="home.php">home</a></li>
			<li><a href="home.php #about">about us</a></li>
			<li><a href="home.php #login">login</a></li>
			<li><a href="home.php #contact">contact us</a></li>
		</ul>
	</nav>
	<div class="container">
    <h1><a href="#show"> show jobs</a> or <a href="#add">add jobs</a></h1>
    <!-- to show available job -->
    <div id="show">
      <h1>available jobs</h1>
      <?php 
        $con = new mysqli("localhost", "root", "", "yes i can");
        $prepare   = $con -> prepare("select * from job");
        $prepare -> execute();
        $result   = $prepare -> get_result();
        foreach($result as $value){
          echo "<div>";
          echo "<button>" . $value["id"] . "</button>";
          echo "<h1>" . $value["title"] . "</h1>";
          echo "<img src='" .$value["image"]. "'>";
          echo "<p>" . "work place :  " . $value["address"] . "</p>";
          echo "<a href='" . $value["link"] . "'> contact us</a>";
          echo "</div>";
        }
      ?>
    </div>
    <!--to add new job -->
    <div id="add">
      <h1>add job</h1>
      <form action="jop.php" method="post">
        <input type="text"   name="title"   placeholder="enter title" required="">
        <input type="text"   name="address" placeholder="enter address" required="">
        <input type="url"    name="link"    placeholder = "enter link of page" required="">
        <input type="url"    name ="image"  placeholder="enter link of image" required="">
        <input type="submit" name = "add"   value="add">
      </form>
    </div>
	</div>
  <?php
     @$title = $_POST['title'];
     @$address = $_POST['address'];
     @$link = $_POST['link'];
     @$image = $_POST['image'];
     if(isset($_POST['add'])){
        $con = new mysqli("localhost", "root", "", "yes i can");
        $prepare   = $con -> prepare("insert into job(title, address, image, link) values(?,?,?,?)");
        $prepare -> bind_param("ssss",$title,$address,$image,$link);
        $prepare ->execute();
     }
  ?>
  </body>
</html>