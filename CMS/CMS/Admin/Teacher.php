<?php  
error_reporting(E_ERROR | E_PARSE);
session_start();
if (!$_SESSION["LoginAdmin"])
{
	header('location:../login.php');
}

	?>
<?php include('../includes/config.php')?> 

<?php include('header1.php')?>
<?php include('side.php')?>
<!-- image code -->

<!--  -->
<?php
if (isset($_POST['btn_save'])) {
	// profile photo
	$profile_image = $_FILES['profile_image']['name'];$tmp_name=$_FILES['profile_image']['tmp_name'];$path = "./images/".$profile_image;move_uploaded_file($tmp_name, $path);
// 
	$first_name=$_POST["first_name"];

	$middle_name=$_POST["middle_name"];

	$last_name=$_POST["last_name"];
	
	$email=$_POST["email"];
	
	$phone_no=$_POST["phone_no"];

	$Aadhar_no=$_POST["Aadhar_no"];
	
	$teacher_status=$_POST["teacher_status"];
	
	$dob=$_POST["dob"];

	$hire_date=$_POST["hire_date"];

	
	
	$gender=$_POST["gender"];
	
   $permanent_address=$_POST["permanent_address"];
	
	$current_address=$_POST["current_address"];
	
	// $place_of_birth=$_POST["place_of_birth"];
	
	// $matric_complition_date=$_POST["matric_complition_date"];
	
	// $matric_awarded_date=$_POST["matric_awarded_date"];
	
	// $fa_complition_date=$_POST["fa_complition_date"];
	
	// $fa_awarded_date=$_POST["fa_awarded_date"];
	
	// $ba_complition_date=$_POST["ba_complition_date"];
	
	// $ba_awarded_date=$_POST["ba_awarded_date"];

	// $ma_complition_date=$_POST["ma_complition_date"];
	
	// $ma_awarded_date=$_POST["ma_awarded_date"];

	// $date=date("d-m-y");

	$password=$_POST['password'];

	$Activation=$_POST['Activation'];

	$role=$_POST['role'];

   
// *****************************************Images upload code starts here********************************************************** 
// 	$profile_image = $_FILES['profile_image']['name'];$tmp_name=$_FILES['profile_image']['tmp_name'];$path = "images/".$profile_image;move_uploaded_file($tmp_name, $path);

//    $matric_certificate = $_FILES['matric_certificate']['name'];$tmp_name=$_FILES['matric_certificate']['tmp_name'];$path = "images/".$matric_certificate;move_uploaded_file($tmp_name, $path);

//    $fa_certificate = $_FILES['fa_certificate']['name'];$tmp_name=$_FILES['fa_certificate']['tmp_name'];$path = "images/".$fa_certificate;move_uploaded_file($tmp_name, $path);

//    $ba_certificate = $_FILES['ba_certificate']['name'];$tmp_name=$_FILES['ba_certificate']['tmp_name'];$path = "images/".$ba_certificate;move_uploaded_file($tmp_name, $path);

//    $ma_certificate = $_FILES['ma_certificate']['name'];$tmp_name=$_FILES['ma_certificate']['tmp_name'];$path = "images/".$ma_certificate;move_uploaded_file($tmp_name, $path);

// *****************************************Images upload code end here********************************************************** 


	$query="Insert into teacher_info(first_name,middle_name,last_name,email,phone_no,aadhar_no,profile_image,teacher_status,dob,hire_date,gender,permanent_address,current_address)values('$first_name','$middle_name','$last_name','$email','$phone_no','$Aadhar_no','$profile_image','$teacher_status','$dob','$hire_date','$gender','$permanent_address','$current_address')";
	$run=mysqli_query($db_conn, $query);
	if ($run) {
		echo "Your Data has been submitted";
	}
	else {
		echo "Your Data has not been submitted";
	}
	$query2="insert into login(user_id,Password,Role,account)values('$email','$password','$role','$Activation')";
	$run2=mysqli_query($db_conn, $query2);
	if ($run2) {
		echo "Your Data has been submitted into login";
	}
	else {
		echo "Your Data has not been submitted into login";
	}
}
?>
<?php
if (isset($_POST['btn_save2'])) {
	$course_code=$_POST['course_code'];

	$semester=$_POST['semester'];

	$teacher_id=$_POST['teacher_id'];

	$subject_code=$_POST['subject_code'];

	$total_classes=$_POST['total_classes'];

	$date=date("d-m-y");

	$query3="insert into teacher_courses(course_code,semester,teacher_id,subject_code,assign_date,total_classes)values('$course_code','$semester','$teacher_id','$subject_code','$date','$total_classes')";
	$run3=mysqli_query($db_conn,$query3);
	if ($run3) {
		 echo "Your Data has been submitted";
	 }
	 else {
		 echo "Your Data has not been submitted";
	 }


}
?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Create Teachers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>			
    <!-- <main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100"> -->
			<div class="sub-main">
				<div class="text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-black admin-dashboard pl-3">
					<div class="d-flex">
					<h1 class="m-0 text-dark">Create Teachers</h1>
						<!-- <h4 class="mr-5">Teacher Management System </h4> -->
						<button type="button" class="btn btn-primary ml-5" data-toggle="modal" data-target=".bd-example-modal-lg">Add Teacher</button>
					</div>
				</div>
				<div class="row w-100">
					<div class=" col-lg-6 col-md-6 col-sm-12 mt-1 ">
						<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header bg-info text-black">
										<h4 class="modal-title text-center">Add New Teacher</h4>
									</div>
									<div class="modal-body">
										<form action="teacher.php" method="post" enctype="multipart/form-data">
											<div class="row mt-3">
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">First Name: </label>
														<input type="text" name="first_name" class="form-control" required="" placeholder="First Name">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Middle Name: </label>
														<input type="text" name="middle_name" class="form-control" required="" placeholder="Middle Name">
													</div>
												</div><div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Last Name: </label>
														<input type="text" name="last_name" class="form-control" required="" placeholder="Last Name">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Teacher Email:</label>
														<input type="text" name="email" class="form-control" required="" placeholder="Enter Email">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Mobile No</label>
														<input type="number" name="phone_no" class="form-control"placeholder="Enter Mobile Number">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Gender:</label>
														<select class="browser-default custom-select" name="gender">
															<option selected>Select Gender</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
													</div>
												</div>

												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Select Your Profile </label>
														<input type="file" name="profile_image" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Teacher Status: </label>
														<select class="browser-default custom-select" name="teacher_status">
															<option selected>Select Status</option>
															<option value="Permanent">Permanent</option>
															<option value="Contract">Contract</option>
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Date of Birth: </label>
														<input type="date" name="dob" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Hire Date: </label>
														<input type="date" name="hire_date" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Permanent Address: </label>
														<input type="text" name="permanent_address" class="form-control" placeholder="Enter Permanent Address">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Current Address:</label>
														<input type="text" name="current_address" class="form-control" placeholder="Enter Current Address">
													</div>
												</div>
											</div>
											<div class="row">
											<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Aadhar No</label>
														<input type="number" name="Aadhar_no" class="form-control"placeholder="Enter Aadhar Number">
													</div>
												</div>

												
											</div> 
										
											<div class="row">
												
											

											<!-- _________________________________________________________________________________
																				Hidden Values are here
											_________________________________________________________________________________ -->
											<div>
												<input type="hidden" name="password" value="teacher123*">
												<input type="hidden" name="role" value="Teacher">
												<input type="hidden" name="Activation" value="Deactivate">

											</div>
											<!-- _________________________________________________________________________________
																				Hidden Values are end here
											_________________________________________________________________________________ -->
											<div class="modal-footer">
												<input type="submit" class="btn btn-primary" name="btn_save" value="Save Data">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row w-100">
					<div class="col-md-12 ml-2">
						<section class="mt-3">
							<div class="row">
								<div class="col-md-3 offset-9 pt-5 mb-2">
									<!-- Large modal -->
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg1">Assign Subjects</button>
									<div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header bg-info text-black">
													<h4 class="modal-title text-center">Assign Subjects To Teachers</h4>
												</div>
												<div class="modal-body">
													<form action="teacher.php" method="POST" enctype="multipart/form-data">
														<div class="row mt-3">
															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputEmail1">Select Course:*</label>
																	<select class="browser-default custom-select" name="course_code" required="">
																		<option >Select Course</option>
																		<?php
																			$query="select distinct(course_code) from time_table";
																			$run=mysqli_query($db_conn,$query);
																			while($row=mysqli_fetch_array($run)) {
																			echo	"<option value=".$row['course_code'].">".$row['course_code']."</option>";
																			}
																	
																		?>
																	</select>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputPassword1" required>Enter Semester:*</label>
																	<input type="text" name="semester" class="form-control">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputPassword1">Enter Teacher Id:*</label>
																	<input type="text" name="teacher_id" class="form-control" required>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputPassword1">Please Select Subject:*</label>
																	<select class="browser-default custom-select" name="subject_code" required="">
																		<option >Select Subject</option>
																		<?php
																		$query="select subject_code from time_table";
																		$run=mysqli_query($db_conn,$query);
																		while($row=mysqli_fetch_array($run)) {
																		echo	"<option value=".$row['subject_code'].">".$row['subject_code']."</option>";
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputPassword1">Enter Total Classes:*</label>
																	<input type="text" name="total_classes" class="form-control" required>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<input type="submit" class="btn btn-primary" name="btn_save2">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														</div>
													</form>
												</div>
											</div>
									</div>
									</div>
								</div>
							</div>
							<div class="table-responsive">
                                 <table class="table table-bordered">
									<thead>
									<th>Teacher ID</th>
									<th>Teacher Name</th>
									<th>Current Address</th>
									<th>Hire Date</th>
									<th>Email</th>
									<th>Operations</th>
									</thead>

								</tr>
								<tbody>
								<?php 

									$query="select teacher_id,first_name,middle_name,last_name,current_address,email,hire_date from teacher_info";
									$run=mysqli_query($db_conn,$query);
									while($row=mysqli_fetch_array($run)) {

										echo "<tr>";
										echo "<td>".$row["teacher_id"]."</td>";
										echo "<td>".$row["first_name"]." ".$row["middle_name"]." ".$row["last_name"]."</td>";
										echo "<td>".$row["current_address"]."</td>";
										echo "<td>".$row["hire_date"]."</td>";
										echo "<td>".$row["email"]."</td>";
										echo	"<td width='170'><a class='btn btn-primary' href=display_teacher.php?teacher_id=".$row['teacher_id'].">Profile</a> <a class='btn btn-danger' href=delete_function.php?teacher_id=".$row['teacher_id'].">Delete</a></td>";
										echo "</tr>";
									}
									?>
																	</tbody>
							
								
							</table>
						</div>

						</section>
					</div>
				</div>	 	
			</div>
		</main>


<?php include('footer1.php')?>
