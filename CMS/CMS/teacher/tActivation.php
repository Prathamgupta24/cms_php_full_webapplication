 <!-- <?php
session_start();
error_reporting(E_ERROR | E_PARSE);

?> -->


<?php include('../includes/config.php')?> 
<?php include('theader1.php')?>
<?php include('tside.php')?>
<?php
	$message = "";
	$account = "";
if (isset($_POST['submit'])) {
	$account = $_POST['account'];
	$user_id = $_POST['user_id'];
	$que="update login set account='$account' where user_id = '$user_id'";
	$run=mysqli_query($db_conn,$que);
	if ($run) {
		$message =  $account == "Activate" ? "Account Activated Successfully" : "Account Deactivated Successfully";
	}	
	else{
		$message = "Account Not Activated  Successfully";
	}
}
?>




<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Activation </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Activation </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



			<div class="sub-main">
				<div class="bar-margin text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<h4> </h4>
				</div>
				<div class="row">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								
							<?php
									if(($account == "Activate" or $account == "Deactivate") and $message==true)
										$bg_color = "alert-success";
									else if($message==true)
										$bg_color = "alert-danger";	
							?>
							
								<h5 class="py-2 pl-3 ">
								<?php echo $message ?>
								</h5>
							</div>
							<div class="col-md-12">
								<form action="Activation.php" method="post">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Enter User ID</label>
												<input type="text" name="user_id" class="form-control" required placeholder="Enter ID">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Enter Account Status:</label>
												<select name="account" class="form-control">
													<option>Select Account Status</option>
													<option value="Activate">Activate</option>
													<option value="Deactivate">Deactivate</option>

												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="submit" name="submit" value="Change" class="btn btn-primary px-5">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php include('tfooter1.php')?>