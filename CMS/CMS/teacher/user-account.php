<?php
error_reporting(E_ERROR | E_PARSE);

session_start();

?>
<?php include('../includes/config.php')?> 
<?php include('theader1.php')?>
<?php include('tside.php')?>

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Accounts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manage Accounts</a></li>
              <li class="breadcrumb-item active"><?php echo $_REQUEST['user'] ?> </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
       <!-- Main content -->
       <section class="content">
      <div class="container-fluid">
        <!-- table  -->
        <div class="table-responsive">
          <table class="table table-bordered">
<thead>
  <th>s.rno</th>
  <th>Username</th>
  <th>Password</th>
  <th>Activation</th>
  <th>Action</th>
</thead>
        <tbody>
      <?php
          $count= 1;
        $user_query = 'SELECT * From  login WHERE `Role` = "' .$_REQUEST['user'].'" ' ;
        $user_result = mysqli_query($db_conn,$user_query);
        while($users=mysqli_fetch_object($user_result))
        {

          ?>
        <tr>
          <td><?=$count++?></td>
          <td><?=$users->user_id?></td>
          <td><?=$users->Password?></td>
          <td><?=$users->account?></td>
          <td>
          <?php 
												echo "
          <a class='btn btn-danger' href=delete_function.php?user_id=".$users->user_id.">Delete</a> "
          ?>
          </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
        </table>
        </div>

       
        </div>
</div>
</section>
<?php 
include('tfooter1.php');
?>