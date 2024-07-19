<?php
session_start();
error_reporting(E_ERROR | E_PARSE);

if	 (!$_SESSION["LoginAdmin"])
{
	header('location:../login.php');
	
}
require_once "../includes/config.php";


?>
<?php include('../includes/config.php')?> 
<?php
if (isset($_POST['sub'])) {
		$course_code=$_POST['course_code'];
		$course_name=$_POST['course_name'];
		$semester_or_year=$_POST['semester_or_year'];
		$no_of_year=$_POST['no_of_year'];

		$query="insert into courses(course_code,course_name,semester_or_year,no_of_year)values('$course_code','$course_name','$semester_or_year','$no_of_year')";
		$run=mysqli_query($db_conn,$query);
		if ($run) {
			echo "successfully";
		}
		else{
			echo "not";
		}
	}
?>


<?php include('header1.php')?>
<?php include('side.php')?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Course</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Manage Course</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>			
          <div class="sub-main">
				<div class="row">
					<div class="col-md-11">
						<form action="courses.php" method="post">
							<div class="row mt-4">
								<div class="col-md-6">
									<div class="form-group ">
										<label for="exampleInputEmail1">Course Code: </label>
										<input type="text" name="course_code" class="form-control" required placeholder="Enter Course Code">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Course Name:</label>
										<input type="text" name="course_name" class="form-control" required placeholder="Enter Course Name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Semester Or Years:</label>
										<input type="text" name="semester_or_year" class="form-control" required placeholder="Enter Semester Or Years">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">No of Years:</label>
										<input type="text" name="no_of_year" class="form-control" required  placeholder="Enter No of Years">
									</div>
								</div>
							</div>
							<div class="row w-100">
								<div class="col-md-12">
									<input type="submit" name="sub" value="Add Course" class=" btn btn-primary ml-auto">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 ml-2">
						<section class="mt-3">
							<table class="w-100 table-elements mb-5 table-three-tr table table-bordered" cellpadding="3">
								<tr class="table-tr-head table-three text-black ">
									<th>Sr.No</th>
									<th>Course Code</th>
									<th>Cource Name</th>
									<th>Semester/Years</th>
									<th>Action</th>
								</tr>
								<?php
									$sr=1;
									$query="select course_code,course_name,no_of_year from courses";
									$run=mysqli_query($db_conn,$query);
									while($row=mysqli_fetch_array($run)) {
									echo	"<tr>";
									echo	"<td>".$sr++."</td>";
									echo	"<td>".$row['course_code']."</td>";
									echo	"<td>".$row['course_name']."</td>";
									echo	"<td>".$row['no_of_year']."</td>";
									echo	"<td width='20'><a class='btn btn-danger' href=delete_function.php?course_code=".$row['course_code'].">Delete</a></td>";
									echo	"</tr>";
									} 
									
								?>
							 </table>				 
						</section>
					</div>
				</div>
			</div>
        <?php 
include('footer1.php');
?>