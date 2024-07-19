<?php include('header.php')?>
<?php 
session_start();
$db_conn = mysqli_connect('localhost','root','','cms_project');
if(!$db_conn)
{
    echo"connection failed";
}
else
{
    // echo "connection pass";
}


    // $message="Email Or Password Does Not Match";
    if(isset($_POST["loginbtn"]))
    {
        $username=$_POST["email"];
        $password=$_POST["password"];

        $query="SELECT * FROM `login` WHERE user_id='$username' AND  Password='$password' ";
        $result=mysqli_query($db_conn,$query);
        



        if (mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)) {
                $admin=$row['user_id'];
             
             
                if ($row["Role"]=="Teacher" and $row["account"]=="Activate")
               {
                   $_SESSION['LoginTeacher']=$row["user_id"];
                   header('Location: teacher/tdashboard.php');
               }
               else if ($row["Role"]=="Student" and $row["account"]=="Activate")
               {
                   $_SESSION['LoginStudent']= $row['user_id'];
                   header('Location: student/sdashboard.php');
               }
               else if( $row['user_id']==$username)
               {
                   $_SESSION['LoginAdmin']=$row["user_id"];
                   header('Location: Admin/dashboard.php');
               }
               
            }
        }
        else
        { 

            header("Location: login.php");
            
        }
       

    }
?>
<body onload="">
<section class="bg-light vh-100 d-flex">
    <div class="col-3 m-auto">
        <div class="card">
            <div class="card-body">
            <div class="border rounded-circle mx-auto d-flex " style="width:100px;height:100px"><i class="fa fa-user text-light fa-3x m-auto"></i></div>
                <form action="login.php"  method="post">
                <div class="md-form">

        <input type="text"  id="text" name="email" class="form-control" required>
        <label for="text">Your Username</label>
</div>
<div class="md-form">
       <input type="password" id="password" name="password" required class="form-control">
       <label for="password">Your Password</label>
</div>
<!-- <label>Enter Captcha:</label> -->
      <!-- <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" readonly  id="capt">
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" placeholder="Enter Captcha" id="textinput">
        </div>
      </div> -->

<div class="text-center">
<button class="btn  btn-secondary" name="loginbtn">login</button>

</div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php')?>
