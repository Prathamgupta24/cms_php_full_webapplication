<?php include('../includes/config.php')?> 

<?php include('header1.php')?>
<?php include('side.php')?>
 <?php  
 error_reporting(E_ERROR | E_PARSE);
	session_start();
	if (!$_SESSION["LoginAdmin"])
	{
		header('location:../login.php');
	}
		// require_once "../connection/connection.php";
	?>
    <div class="table-responsive">
                               <table class="table table-bordered">
								   <thead>
								   <th>Roll.No</th>
									<th>Student Name</th>
									<th>Current Address</th>
									<th>Session</th>
									<th>Course ID</th>
									<!-- <th>Admission</th> -->
									<!-- <th>Profile</th> -->
									<th colspan="1">Operations</th>
								   </thead>
								<tbody>
								<?php 
                                        if(isset($_POST["btnSearch"]))
                                        {
                                        $userId = $_POST['search'];
                                        $query="select * from student_info where roll_no = '$userId' ";
                                        $result=mysqli_query($db_conn,$query);
                                        if (mysqli_num_rows($result)>0) {
                                        while ($row=mysqli_fetch_array($result)) {?>
									    <tr>
										<td><?php echo $row["roll_no"] ?></td>
										<td><?php echo $row["first_name"]." ".$row["middle_name"]." ".$row["last_name"] ?></td>
										<td><?php echo $row["current_address"] ?></td>
										<td><?php echo $row["session"] ?></td>
										<td><?php echo $row["course_code"] ?></td>
										<!-- date_format($date,"Y/m/d H:i:s"); -->
										<td width='170'> 
											<?php 
												echo "<a class='btn btn-primary' href=display_student.php?roll_no=".$row['roll_no'].">Profile</a> 
												<a class='btn btn-danger' href=delete_function.php?roll_no=".$row['roll_no'].">Delete</a> "
											?>
										</td>
										
						
									</tr>
								<?php }
								?>
                                								<?php }
								?>
                                								
								</tbody>
							
							</table>
								</div>
                            
                                <?php }
								?>

<?php include('footer1.php')?>

    

        		

