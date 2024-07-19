<?php include('header.php')?>

    <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About us </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.html">Contact us</a>
      </li>
      
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
    <!--   <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <a href=""><i class="fab fa-twitter"></i>
        </a>
      </li>
       </a><li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <a href=""><i class="fab fa-google-plus-g"></i>
        </a>  -->
       </li>
       <li class="nav-item dropdown">
<?php if(isset($_SESSION['login'])){?>

         
       <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a> 
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="logout.php">Log Out</a>
        </div> 
   <?php }else{?>
        <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>Login </a>
      <?php }?>
      </li>

    </ul>
  </div>
</nav>

<!--/.Navbar -->
    <h1 class="text-center"></h1>
    <div>
      <!-- blue shading  -->
        <div class="d-flex" style="height:500px;background:linear-gradient(-45deg,navy 50%,transparent 50%)">
       <!-- end -->
        <div class="container-fluid my-auto">
            <div class="row">
                <div class="col-lg-6">
               <h1 class="display-3 font-weight-bold">Tolani Foundation Gandhidham Polytechnic</h1>
           <!-- <p>Vision
To Develop skilled, creative and socially sensitive engineers to satisfy the needs of a changing society.

</p> -->
               <!-- <a href="" class="btn btn-lg btn-primary">welcome </a> -->
               
         </div>
         <div>
         
</div>
<!-- inquery  form   -->
<div class="col-lg-6">
<div class="w-50 mx-auto card">
  <div class="card-body">
  <h3>Inqury Form</h3>
  <form action="" method="post" class="">
    
<div class="md-form">

<input type="text" id="form1" class="form-control">
       <label for="form1">YOUR NAME</label>
       <div class="md-form">
       <input type="email" id="email" class="form-control">
       <label for="email">YOUR email</label>
</div>
<div class="md-form">
       <input type="text" id="enroll" class="form-control">
       <label for="enroll">YOUR Enroll No</label>
</div>
<div class="md-form">
       <input type="text" id="phone no" class="form-control">
       <label for="phone no">YOUR phone no</label>
</div>
<button class="btn btn-primary btn-block ">submit</button>
</form>  
</div>
</div>
<!-- this is end -->
</div>
    </div>
       </div>   
       </div>
       </div>
    </div>

    <section class="py-5">
      <div class="container">
      <div class ="row">
        <div class ="col-lg-6">

        <h2>
         About us <br>
   </h2>In the year 1961, the Management of Institute was taken by Maitri Mandal and Institute was known as Gandhidham Civil Engineering Institute.Offering three year diploma course in civil engineering, this was under the guidance and leader ship of founder principal Late Shri Hari Daryani. The course was very much successful at that time when township of Gandhidham and Adipur were under construction.

Over and above his success as a civil engineer and good administrator, Late Shri Hari Daryani was a highly optimistic and sensitive poet and had a strong sensitivity for human emotions. He felt the need of centre of excellence of technical education in the backward district of Kachchh, which can serve as beacon light for the peoples not only this district but of whole of Gujarat state. He conceived plan for full fledged diploma level 
         <p>

   </p>
<!-- <a href="about us.php" class="btn btn-secondary"> know more </a> -->
</div><img src="./images/tfpglogo.jpeg" alt="" class="img-fluid">
</div>

      </div>
</section>
<!-- notice -->

<!-- courses -->
 <section class="py-5">
        <div>
        <h2 class="text-center font-weight-bold">Our Courses</h2>
        </div>
        <div class="container">
        <div class="row">
        <!-- computer  -->
        <div class="col-lg-3">
            <div class="card">
                <div>
            <!-- computer -->
                <img src="./images/OIP.jpg"alt="" class="img-fluid rounded-top">
                    <div class="card-body">
                    <b>computer engineering</b>
                    <p class="card-text">
                   <b>duration:</b>45 hours<br>
                  <b>price:</b>40000rs                
                  </p>
                  <!-- <button class="btn btn-primary btn-block ">enroll</button> -->
                      </div>
                   </div>
                </div>
        </div>
         <!-- civil -->
        <div class="col-lg-3">
            <div class="card">
                <div>
                <img src="./images/civi;.jpg"alt="" class="img-fluid rounded-top">
                    <div class="card-body">
                    <b>Civil engineering</b>
                    <p class="card-text">
                <b>duration:</b>45 hours<br>
                                  
                  </p>
                  <!-- <button class="btn btn-primary btn-block ">enroll</button> -->
                      </div>
                   </div>
                </div>
        </div>
         <!-- chemical -->
        <div class="col-lg-3">
            <div class="card">
                <div>
           
                <img src="./images/c.jpg"alt="" class="img-fluid rounded-top">
                    <div class="card-body">
                    <b>Chemical engineering
                  </b>
                    <p class="card-text">
                    <b>
                      duration:</b>45 hours<br>
                  <b>SFI:</b>4000rs</p>
                  <!-- <button class="btn btn-primary btn-block ">enroll</button> -->
                      </div>
                   </div>
                </div>
        </div> 
        <!-- mechanical -->
        <div class="col-lg-3">
            <div class="card">
                <div>
                    <img src="./images/m.jpg"alt="" class="img-fluid rounded-top">
                    <div class="card-body">
                    <b>Mechanical engineering
                      Diploma
                    </b>
                    <p class="card-text">
                    <b>duration:</b>45 hours<br>
                  <b>SFI</b>rs4000                
                  </p>
                  <!-- <button class="btn btn-primary btn-block ">enroll</button> -->
                  
                  </div>

            </div>

           </div>
        </div>
         </div>
         </div>       
</section>
<!-- about achivements -->
  <section class="py-5 text-white" style="background:#3923a7">
  <div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
  <h2>Achivements </h2>
  <p>To Develop skilled, creative and socially sensitive engineers to satisfy the needs of a changing society.</p>

   <img src="./images/ach.jpg" alt="" class="img-fluid rounded"> 
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-6 mb-4">
          <div class="border rounded ">
            <div class="card-body text-center">
              <span><i class="fa fa-graduation-cap text-warning  fa-3x"></i></span>
              <h2 class="my-2  font weight-bold">5000+</h2>
              <hr class="border-warning">
              <h3>Graduates</h3>
            </div>
          </div>
          </div>
          
          <div class="col-lg-6 mb-4"><div class="border rounded ">
            <div class="card-body text-center">
              <span><i class="fa fa-graduation-cap text-warning  fa-3x"></i></span>
              <h2 class="my-2  font weight-bold">900+</h2>
              <hr class="border-warning">
              <h3>students </h3>
            </div>
          </div></div>
          <div class="col-lg-6 mb-4"><div class="border rounded ">
            <div class="card-body text-center">
              <span><i class="fa fa-graduation-cap text-warning  fa-3x"></i></span>
              <h2 class="my-2  font weight-bold">300+</h2>
              <hr class="border-warning">
              <h3>Staff</h3>
            </div>
          </div></div>
          <div class="col-lg-6 mb-4"><div class="border rounded ">
            <div class="card-body text-center">
              <span><i class="fa fa-graduation-cap text-warning  fa-3x"></i></span>
              <h2 class="my-2  font weight-bold">25+</h2>
              <hr class="border-warning">
              <h3>Course</h3>
            </div>
          </div></div>
        </div>
        </div>
    </div>
  </div>
  </div>                                                                                                                                                                                                                                                                                                                                        
   </section>
 <!-- about teacher -->
   <section class="py-5 bg-light">
    <div>
            <h2 class="text-center font-weight-bold">Teacher name</h2>
        </div>
        <div class="container">
        <div class="row">
          
    <?php for($i=0;$i<8;$i++) {?>
      <div class="col-lg-3 my-5">
         <div class="card">
            <div class="col-7 postion-absoulte" style="top:-50px">
             <img src="./images/tfpglogo.jpeg" alt="" class="mw-100 border rounded-circle">
        </div>
         <div class="card-body pt-5 mt-4">
             <h4 class="card-title mb-0">Teacher</h4> 
           <p><i class="fa fa-star text-warning" ></i><i class="fa fa-star text-warning" ></i><i class="fa fa-star text-warning" ></i><i class="fa fa-star text-warning" ></i></p>
               <p class="card-text">
             <b>courses</b>5<br>
           <b>rating</b>
            </p>
         </div>
           </div>
         </div>
      <?php }  ?>
              </div>
                  </div>
 </section>
<!-- end -->
 <!-- testimonials -->
 <section class="py-5">
<div class ="text-center mb-5">
  <h2 class="font-weigth-bold">Why Choose Us</h2>
  <p class="text-muted">To enhance the learning skills of the students to improve their technical and soft skills.
To enhance self learning skills in students.
To be in G.T.U Top 10 diploma engineering college.</p>
    </div>
    <div class="row">
    <div class="container">
     <div class="row">
     <div class="col-6">
     <div class="border rounded position-relative">
    <div class="p-4 text-center ">
      Message of our principal->
    Let us put all our efforts together to educate the students in a manner that we can produce self motivated and ethics bound young talents who can make their lives innovative by avoiding routine spoon-feeding. In this competitive world, let us go for the approach that is not only self or money oriented but it may helpful to all mankind. By doing this we can provide strength to the hands of our Principal and Institution.

    </div>
    <i class="fa fa-quote-left fa-3x postion-absolute" style="top:.5rem;left:.5rem ;opacity:.2;"></i>
    </div>
     
    <div class="text-center mt-n2">
    <img src="./images/principal.jpg" alt="" class="rounded-circle border" width="100" heigth="100">
    <h6 class="mb-0 font-weigth-bold">principal </h6>
    <p><i>J.K.Rathod</i> </p>
    
    
    </div> 
    </div> <div class="col-6">
     <div class="border rounded position-relative">
    <div class="p-4 text-center ">

    Goals and Objectives->To enhance the learning skills of the students to improve their technical and soft skills.
To enhance self learning skills in students.
To be in G.T.U Top 10 diploma engineering college.History of the institute dates back to early fifties. It was initially started as as a vocational training institute offering six months Mistry Course and 1 year Sub Overseer course. The institute was then managed by SRC Ltd under social.

    </div>
    <i class="fa fa-quote-left fa-3x postion-absolute" style="top:.5rem;left:.5rem ;opacity:.2;"></i>
    </div>
     
    <div class="text-center mt-n2">
    <img src="./images/tfpglogo.jpeg" alt="" class="rounded-circle border" width="100" heigth="100">
    <h6 class="mb-0 font-weigth-bold">History</h6>
    <p><i></i>of tfgp</p>
    
    
    </div> 
    </div>
     </div>
</div>

    </section>
<!-- footer  -->
<footer class="py-5" style="background:url(./images/e.jpg) center/cover no-repeat">

<div class="py-5 text-white" style="background: #00000088">
<div class="container-fluid">
<div class="row">
  <div class="col-lg-4">
    <h2>Contact us </h2>
    <ul class="fa-ul ml-4">

    <li><i class="fa-li fa fa-angle-right"></i></a>Email: tfgpadp@yahoo.co.in</li>
      <li><i class="fa-li fa fa-angle-right"></i></a> Phone: +91 02836 260249</li>
      <li><i class="fa-li fa fa-angle-right"></i></a> Post Box No. 21, Near Adipur</li>
      <li><i class="fa-li fa fa-angle-right"></i></a> campus</li>
      <li><i class="fa-li fa fa-angle-right"></i></a> Railway Station. +91 02836 260249
</li>
      <!-- <li>home<a href=""><i class="fa-li fa fa-angle-right"></i></a> list icon</li> -->
    </ul>
    
  </div>
  <div class="col-lg-4">
    <h2>social media platform</h2>
    
    <span class="fa-stack">
    <i class="fa fa-circle fa-stack-2x"></i>
    <a href=""><i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i></a>
    </span>
    
    <span class="fa-stack">
    <i class="fa fa-circle fa-stack-2x"></i>
    <a href=""><i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i></a>
    </span>
    
    <span class="fa-stack">
    <i class="fa fa-circle fa-stack-2x"></i>
    <a href=""><i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i></a>
    </span>
    
    <span class="fa-stack">
    <i class="fa fa-circle fa-stack-2x"></i>
    <a href=""><i class="fab fa-youtube fa-stack-1x fa-inverse text-dark"></i></a>
    </span>
    
    <span class="fa-stack">
    <i class="fa fa-circle fa-stack-2x"></i>
    <a href=""><i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i></a>
    </span>
      
    
  </div>
  <div class="col-lg-4">
    <h2>subscribe now </h2>
    <form action="">
      <div class="md-form">
      <input type="email" id="email" class="fore-control ">
      <label class="text-white" for="email">your email</label>
<button class="btn btn-secondary">submit</button>
      </div>
    </form>
    
  </div>
</div>


</div>
</div>
<h3 class="text-white">Copyright ©2022 All rights reserved.</h3>
    </footer>
     <!-- mdn 4.19.1 cdnbootstrap -- javacript>-->
<?php include('footer.php')?>
  