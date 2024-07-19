<?php include('../includes/config.php')?>

<?php
error_reporting(E_ERROR | E_PARSE);

session_start();
?>
<?php  
session_start();
if (!$_SESSION["LoginTeacher"])
{
	header('location:../login.php');
}
?>


 
<?php include('theader1.php')?>
<?php include('tside.php')?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">My Subjects</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Teacher</a></li>
              <li class="breadcrumb-item active">My Subjects</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

				<div class="table-responsive">
                               <table class="table table-bordered">
							<thead>
									<th>Sr.No</th>
									<th>Course Name</th>
									<th>Subject Name</th>
									<th>Room No</th>
									<th>Semester</th>
									<th>Time</th>
									<th>Total Classes</th>
									</thead>
									<tbody>
								<?php
								$sr_no=1;
								$teacher_email=$_SESSION['LoginTeacher'];
								$query1="select * from teacher_info where email='$teacher_email'";
								$run1=$run=mysqli_query($db_conn,$query1);
								while($row=mysqli_fetch_array($run1)) {
									$teacher_id=$row["teacher_id"];
								}
								$query="select tc.teacher_id,tc.course_code,tc.subject_code,tc.semester,tc.total_classes,tt.room_no,tt.timing_to from teacher_courses tc inner join time_table tt on tc.subject_code=tt.subject_code where teacher_id='$teacher_id'";
								$run=mysqli_query($db_conn,$query);
								while($row=mysqli_fetch_array($run)) {
									echo "<tr>";
									echo "<td>".$sr_no++ ."</td>";
									echo "<td>".$row["course_code"]."</td>";
									echo "<td>".$row["subject_code"]."</td>";
									echo "<td>".$row["room_no"]."</td>";
									echo "<td>".$row["semester"]."</td>";
									echo "<td>".$row["timing_to"]."</td>";
									echo "<td>".$row["total_classes"]."</td>";
									echo "</tr>";
								}
								$_SESSION['teacher_id']=$teacher_id;
								?>
								</tbody>
							</table>
								</div>	
						</section>
					</div>
				</div>
			
 <?php include('tfooter1.php')?>
