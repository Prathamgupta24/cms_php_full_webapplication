<?php include('../includes/config.php') ?>
<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
	
if ($_SESSION["LoginAdmin"])
{
	$roll_no=$_GET['roll_no'] ?? $_SESSION['LoginStudent'];
}
else if(!$_SESSION["LoginAdmin"] && $_SESSION['LoginStudent']){
	$roll_no=$_SESSION['LoginStudent'];
}
else{ ?>
	<script> alert("Your Are Not Authorize Person For This link");</script>
<?php
	header('location:../login.php');
}
require_once "../includes/config.php";

?>

<?php include('header1.php')?>
<?php include('side.php')?>
	<?php
		$teacher_id=$_GET['teacher_id'];

		if($teacher_id){
			$query="select * from teacher_info where teacher_id='$teacher_id'";
		}
		else{
			// $query="select * from teacher_info where email='$teacher_email'";
		}
		
		$run=mysqli_query($db_conn,$query);
		while ($row=mysqli_fetch_array($run)) {
	?>
		<div class="container  mt-1 border border-secondary mb-1">
			<div class="row text-white bg-primary pt-5">
				<div class="col-md-4">
					<?php  $profile_image = $row["profile_image"] ?>
					<img class="ml-5 mb-5" height='270px' width='250px' src=<?php echo "images/$profile_image"  ?> >
				</div>
				<div class="col-md-8">
					<h3 class="ml-5"><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'] ?></h3><br>
					
                    <div class="row">
						<div class="col-md-6">
							<!-- <h5>Father Name:</h5> <?php echo $row['father_name']  ?><br><br> -->
							<h5>Email:</h5> <?php echo $row['email']  ?><br><br>

							<h5>Contact:</h5> <?php echo $row['phone_no']  ?><br><br>
			                 	<h5>Gender:</h5> <?php echo $row['gender']  ?><br><br>
            				<h5>Current Address:</h5> <?php echo $row['current_address']  ?><br><br>


						</div>
						<div class="col-md-6">
							<h5>Address:</h5> <?php echo $row['permanent_address']  ?><br><br>
							<!-- <h5>CNIC:</h5> <?php echo $row['cnic']  ?><br><br> -->
							<h5>Teacher I'd:</h5> <?php echo $row['teacher_id']  ?><br><br>
                            <h5>Date of Birth:</h5> <?php echo $row['dob']  ?><br><br>
			            	<h5>Permanent Adress:</h5> <?php echo $row['permanent_address']  ?><br><br>


						</div>		
					</div>
				</div>
				<hr>
			</div>
			<div class="row pt-3">
				<!-- <div class="col-md-4"><h5>Status:</h5> <?php echo $row['teacher_status']  ?></div> -->
			</div>
			<div class="row pt-3">
				<!-- <div class="col-md-4"><h5>Phone No:</h5> <?php echo $row['other_phone']  ?></div>
				<div class="col-md-4"><h5>State:</h5> <?php echo $row['state']  ?></div>
				<div class="col-md-4"><h5>Last Qualification:</h5> <?php echo $row['last_qualification']  ?></div> -->
			</div>
			<div class="row pt-3">
				<!-- <div class="col-md-4"><h5>Place of Birth:</h5> <?php echo $row['place_of_birth']  ?></div> -->
			</div>
			<div class="row pt-3">
				<!-- <div class="col-md-4"><h5>Matric Complition Date:</h5> <?php echo $row['matric_complition_date']  ?></div>
				<div class="col-md-4"><h5>Matric Awarded Date:</h5> <?php echo $row['matric_awarded_date']  ?></div>
				<div class="col-md-4"><h5>Matric Certificate:</h5> <?php echo $row['matric_certificate']  ?></div> -->
			</div>
			<div class="row pt-3">
				<!-- <div class="col-md-4"><h5>Fa Complition Date:</h5> <?php echo $row['fa_complition_date']  ?></div>
				<div class="col-md-4"><h5>Fa Awarded Date:</h5> <?php echo $row['fa_awarded_date']  ?></div>
				<div class="col-md-4"><h5>Fa Certificate:</h5> <?php echo $row['fa_certificate']  ?></div> -->
			</div>
			<div class="row pt-3">
				<!-- <div class="col-md-4"><h5>BA Complition Date:</h5> <?php echo $row['ba_complition_date']  ?></div>
				<div class="col-md-4"><h5>BA Awarded Date:</h5> <?php echo $row['ba_awarded_date']  ?></div>
				<div class="col-md-4"><h5>BA Certificate:</h5> <?php echo $row['ba_certificate']  ?></div> -->
			</div>
			<div class="row pt-3">
				<!-- <div class="col-md-4"><h5>MA Complition Date:</h5> <?php echo $row['ma_complition_date']  ?></div>
				<div class="col-md-4"><h5>MA Awarded Date:</h5> <?php echo $row['ma_awarded_date']  ?></div>
				<div class="col-md-4"><h5>MA Certificate:</h5> <?php echo $row['ma_certificate']  ?></div> -->
			</div>
		</div>
	<?php } ?>
<?php include('footer1.php')?>
