
<?php include('../includes/config.php') ?>

<?php

?>  

<?php  
    session_start();
   error_reporting(E_ERROR | E_PARSE);
	if (!$_SESSION["LoginTeacher"])
	{
		header('location:../login.php');
	}
    
	?>

   
<?php include('theader1.php')?>
<?php include('tside.php')?>
<?php 
	if (isset($_POST['submit'])) {
		$user_id=$_SESSION['LoginTeacher'];
		$password=$_POST['password'];
		$query="UPDATE login set Password='$password' where user_id='$user_id'";
		$run=mysqli_query($db_conn,$query);
		if ($run) {  ?>
 			<script type="text/javascript">
 				alert("Your Password Has Been Changed");
 			</script>
 		<?php }
 		else { ?>
 			<script type="text/javascript">
 				alert("Your Password Has Not Been Changed");
 			</script>
		<?php }
	}
	
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Teacher - Password</title>
	</head>
	<body>
		<!-- <?php include('../common/common-header.php') ?>
		<?php include('../common/teacher-sidebar.php') ?>   -->

				<div class="container pt-5">
					<div class="row">
						<div class="col-md-12">
							<form action="change_password.php" method="post">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Enter New Password</label>
											<input type="text" name="password" class="form-control" placeholder="Enter New Password">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group pt-4 pl-5">
											<input type="submit" name="submit" value="Change Password" class="btn btn-primary">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>
       
 <?php include('tfooter1.php')?>
