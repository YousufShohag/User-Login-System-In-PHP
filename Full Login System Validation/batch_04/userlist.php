<?php

include "classes/users.php";

$obj = new User();

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
	<title>PHP FORM PREPARATION || EXAM</title>


	<!--Font Awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">





</head>
<body>
<h1 class="text-center mb-5">Here are Your Data Sir</h1>
	<div class="show">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<table class="table display" id="myTable">
					<thead>
						<tr>
							<th>#SL</th>
							<th>Full Name </th>
							<th>Username</th>
							<th>Email</th>
							<th>Roll</th>
							<th>Status</th>
						</tr>
						</thead>
						<tbody>
							<?php
 								$result=$obj->finddata();

 								while ($data = $result->fetch_assoc()) {
 										echo '<tr>
													<th>'.$data['id'].'</th>
													<th>'.$data['fName'].'</th>
													<th>'.$data['uName'].'</th>
													<th>'.$data['email'].'</th>
													<th>'.$data['roll'].'</th>
													<th>'.$data['status'].'</th>
												</tr>';
 								}
							?>
						</tbody>
				</table>
			</div>
		</div>
	</div>

<div class="row">
	<div class="col-md-8 offset-md-2">
		<a href="dashboard.php" class="btn btn-info">Back</a>
	</div>
	<div class="col-md-2">
		<a href="logout.php" class="btn btn-info">Log Out</a>
	</div>
</div>




		<!-- Needed Script -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
    	$(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>

</body>
</body>
</html>