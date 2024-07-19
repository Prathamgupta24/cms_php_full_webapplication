<?php  
	if (isset($_POST['sub'])) {
		$subject_code=$_POST['subject_code'];
		$subject_name=$_POST['subject_name'];
		$semester=$_POST['semester'];
		$course_code=$_POST['course_code'];
		$credit_hours=$_POST['credit_hours'];

		$query="insert into course_subjects(subject_code,subject_name,course_code,semester,credit_hours)values('$subject_code','$subject_name','$course_code','$semester','$credit_hours')";
		$run=mysqli_query($db_conn,$query);
		if ($run) {
			echo "successfully";
		}
		else{
			echo "not";
		}
	}
?>
<?php include('theader1.php')?>
<?php include('tside.php')?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Subjects </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Manage Subjects</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="sub-main">
				<div class="bar-margin text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<h4>  </h4>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form action="subjects.php" method="post">
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Subject Code: </label>
										<input type="text" name="subject_code" class="form-control" required placeholder="Enter Subject Code" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Subject Name:</label>
										<input type="text" name="subject_name" class="form-control" required placeholder="Enter Subject Name" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Semester:</label>
										<input type="text" name="semester" class="form-control" required placeholder="Enter Semester" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Course Code:</label>
										<select class="browser-default custom-select" name="course_code">
											<option >Select Course</option>
											<?php
											$query="select course_code from courses";
											$run=mysqli_query($db_conn,$query);
											while($row=mysqli_fetch_array($run)) {
											echo	"<option value=".$row['course_code'].">".$row['course_code']."</option>";
											}
										?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Credit Hours:</label>
										<input type="number" name="credit_hours" class="form-control"  placeholder="Enter Subject Credit Hours" required>
									</div>
								</div>
								<div class="col-md-6 mt-4">
									<div class="form-group pt-2">
										<input type="submit" name="sub" value="Add Subject" class="btn btn-primary">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 ml-2">
						<section class="mt-3">
						<div class="table-responsive">
                                      	 <table class="table table-bordered">
										<tr class="table-tr-head">
									<th>Sr.No</th>
									<th>Subject Code</th>
									<th>Subject Name</th>
									<th>Course Code</th>
									<th>Semester</th>
									<th>Credit Hours</th>
									<th>Action</th>
								</tr>
								<?php
									$sr=1;
									$query="select subject_code,subject_name,course_code,semester,credit_hours from course_subjects";
									$run=mysqli_query($db_conn,$query);
									while($row=mysqli_fetch_array($run)) {
									echo	"<tr>";
									echo	"<td>".$sr++."</td>";
									echo	"<td>".$row['subject_code']."</td>";
									echo	"<td>".$row['subject_name']."</td>";
									echo	"<td>".$row['course_code']."</td>";
									echo	"<td>".$row['semester']."</td>";
									echo	"<td>".$row['credit_hours']."</td>";
									echo	"<td width='20'><a class='btn btn-danger' href=delete_function.php?subject_code=".$row['subject_code'].">Delete</a></td>";
									echo	"</tr>";
									} 									
								?>
							</table>
								</div>				
						</section>
					</div>
				</div>
			</div>

<?php include('tfooter1.php')?>
