<?php


session_start();

	if (!isset($_SESSION['user'])) {
		header("location: login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DASHBOARD || FOR USER</title>


	<!--Font Awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">





</head>
<body>





			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Yousuf Shohag</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      	
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-auto ">
    
      <li class="nav-item active ">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item pl-4 ">
        <a class="nav-link" href="#">Product Insert</a>
      </li>
      <li class="nav-item pl-4 ">
        <a class="nav-link" href="#">Product View</a>
      </li>

      <?php
      	if ($_SESSION['roll'] == "manager") { ?>
      		<li class="nav-item pl-4 ">
	        <a class="nav-link" href="#">Phurchase</a>
	      </li>
	      <li class="nav-item pl-4 ">
	        <a class="nav-link" href="#">Sell</a>
	      </li>
      	<?php }
      ?>
      <li class="nav-item pl-4 ">
        <a class="nav-link" href="#">Phurchase</a>
      </li>
      <li class="nav-item pl-4 ">
        <a class="nav-link" href="#">Sell</a>
      </li>

 		<?Php
 			if ($_SESSION['roll'] == "admin") { ?>
 				<li class="nav-item pl-4 ">
		        <a class="nav-link" href="product.php">Product</a>
		      </li>
		      <li class="nav-item pl-4 ">
		        <a class="nav-link" href="#">Sell</a>
		      </li>
 				<li class="nav-item pl-4 ">
		        <a class="nav-link" href="userlist.php">User</a>
		      </li>
		      <li class="nav-item pl-4 ">
		        <a class="nav-link" href="#">Profit</a>
		      </li>
 		<?php	}
 		?>

 		<li class="nav-item pl-4"><a href="logout.php">Logut</a></li>
      
    </ul>

  </div>
</nav>
<?Php
 			if ($_SESSION['roll'] == "user") { ?>
				<h3 class="mt-3 text-center">Hey,You are Generel User Remember,Dont shout with me ,</h3>
<?php	}
	 		?>
<?Php
 			if ($_SESSION['roll'] == "manager") { ?>

				<h3 class="mt-3 text-center">Congrats  <span style="font-size: 40px; text-transform: uppercase; color: red; text-decoration: underline dashed;"><?php echo $_SESSION['user'];?></span> you are In Manager Panel </h3>
				<h5>Here are your Content</h5>
	<?php	}
	 		?>

	<?Php
 			if ($_SESSION['roll'] == "admin") { ?>

				<h3 class="mt-3 text-center">Congrats  <span style="font-size: 40px; text-transform: uppercase; color: red; text-decoration: underline dashed;"><?php echo $_SESSION['user'];?></span> you are In Admin Panel </h3>

				<h5>Here are your Content</h5>

	<?php	}
	 		?>



		<!-- Needed Script -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

</body>
</body>
</html>