<?php
	
	include 'database.php';

	class User extends Database{

		function register($data){
			$fName = $data['fName'];
			$uName = $data['uName'];
			$email = $data['email'];
			$password = $data['password'];
			$cpassword = $data['cpassword'];
			$roll = 'user';
			$status = '0';

			if (empty($fName)) {
				echo '<div class="alert alert-danger">Full Name are Empty</div>';
			}
			elseif (empty($uName)) {
				echo '<div class="alert alert-danger">UserName are Empty</div>';
			}
			elseif (empty($email)) {
				echo '<div class="alert alert-danger">Email address are Empty</div>';
			}
			elseif (empty($password)) {
				echo '<div class="alert alert-danger">Password are Empty</div>';
			}
			elseif (empty($cpassword)) {
				echo '<div class="alert alert-danger">Confirm Password are Empty</div>';
			}
			elseif ($password != $cpassword) {
				echo '<div class="alert alert-danger">Password are not match</div>';
			}
			else{
				$check = $this->checkEmailUname($uName,$email);
				if ($check==TRUE) {
					echo '<div class="alert alert-danger">Usename Or Email are Exist</div>';
				}
				else{
					$password = md5($password);
					$data = $this->connection->query("INSERT INTO users(fName,uName,email,roll,password,status)VALUES('$fName','$uName','$email','$roll','$password','$status')");
					if ($data) {
						echo '<div class="alert alert-primary">Your Data Are Inserted</div>';
					}
					else{
						echo '<div class="alert alert-danger">You ate not Inserted</div>';
					}
				}
			}
			
		}

		//Check For Match Email and Username
		function checkEmailUname($uName,$email){
			$result = $this->connection->query("SELECT *FROM users WHERE uName='$uName' OR email='$email'");
			if ($result->num_rows>0) {
				return true;
			}else{
				return false;
			}
		}


		function login($data){
			$usernameEmail = $data['uName'];
			$password = $data['password'];
			$password = md5($password);
			$checkEmail = $this->checkEmail($usernameEmail);
			$checkPassword = $this->checkPassword($password);

			if ($checkEmail == false) {
				echo '<div class="alert alert-danger">Your User Or Email are not found</div>';
			}
			if ($checkPassword == false) {
				echo '<div class="alert alert-danger">Your Password are not found</div>';
			}
			else{
				$result = $this->connection->query("SELECT *FROM users WHERE (uName = '$usernameEmail'OR email = '$usernameEmail') AND password = '$password'");

					if ($result->num_rows > 0) {
						$data = $result->fetch_assoc();
						if ($data['status'] == 0) {
							echo '<div class="alert alert-danger">Your account are pending</div>';
						}
						else{
							session_start();
							$_SESSION['user']=$data['uName'];
							$_SESSION['roll']=$data['roll'];

							header("location: dashboard.php");
						}
						
					}
					else{
						header("location: login.php");
					}
			}
			
		}
		//Check Login Email
		function checkEmail($userEmail){
			$result = $this->connection->query("SELECT *FROM users WHERE uName='$userEmail' OR email='$userEmail'");
			if ($result->num_rows>0) {
				return true;
			}else{
				return false;
			}
		}
		//Check Login Password
		function checkPassword($password){
			$result = $this->connection->query("SELECT *FROM users WHERE password='$password'");
			if ($result->num_rows>0) {
				return true;
			}else{
				return false;
			}
		}
		function finddata(){
			$result = $this->connection->query("SELECT *FROM users");
			return $result;
		}
	}

?>