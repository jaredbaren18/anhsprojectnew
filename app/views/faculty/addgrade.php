<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ANHS| Faculty </title>
  <link rel="stylesheet" href="<?=base_url()?>/public/css/faculty.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container mx-auto" >
      <div class="card m-5">
        <div class="row">
           <div class="col-md-2 bg-success" style="height:80vh">
           <div class="text-light text-center pt-5 pb-5">
              <nav class="navbar justify-content-center">
                <ul class="navbar-nav" >
                  <li class="nav-item px-5 pt-2 pb-2">
                    <form action="<?=site_url('Faculty/myDash')?>" method="post">
                      <input type="hidden"  name="facultyNo"value="<?=$facultyNo?>">
                      <input type="submit"  value="Dashboard" class="btn btn-success ">
                    </form>
                  </li>
                  <li class="nav-item px-4  pb-2">
                    <form action="<?=site_url('Faculty/myadvisory')?>" method="post">
                      <input type="hidden"  name="facultyNo"value="<?=$facultyNo?>">
                      <input type="submit" value="My advisory" class="btn btn-success">
                    </form>
                  </li>
                </ul>
              </nav>
              <nav class="mt-5">
                <i>In session:</i>
                <p><?=$fac_role?></p>
                <b><?=$fac_fname?> <?=$fac_lname?></b>
              
              </nav>
              <a href="<?=site_url('Access/logoutTeacher')?>" class="text-danger">Logout</a>
            </div>  
          </div>
          <div class="col-md-10 px-5" style="height:80vh">
           <h1 class="mt-5 mb-4">My Students</h1>
          
           <div class="card mt-3 mx-3" style="height:60vh">
         <div class="card-body overflow-scroll">
          <div class="row">
            <h5>Edit Grades</h5>
          </div>
          <div class="row ">
            <div class="col-md-3">
              <p>LRN:</p>
              <p>Full Name:</p>
              <p>Year and Section:</p>
            </div>
            <div class="col-md-7">
              <p><?=$stud['stud_lrn']?></p>
              <p><?=$stud['stud_fname']?> <?=$stud['stud_mname']?> <?=$stud['stud_lname']?></p>
              <p><?=$stud['stud_yearlevel']?>-<?=$stud['stud_section']?> </p>
            </div>

          </div>
          <div class="row ">
            <div class="col-md-12">
              <form action="" method="post">
              <div class="row">
                <div class="col-md-4">
                <div class="form-floating mt-3  ">
                <select name="subject"" class="form-control">
                <option value="">Select</option>
                <?php foreach($sub as $subject):?>
                  <option value="<?=$subject['subjectname']?>"><?=$subject['subjectname']?></option>
                  <?php endforeach;?>
              </select>
                <label >Subject</label>
                </div>
                </div>
                <div class="col-md-1">
                <div class="form-floating mt-3  ">
                <input type="text" class="form-control" name="stud_password" autocomplete="off"  >
                <label >1st</label>
                </div>
                </div>
                <div class="col-md-1">
                <div class="form-floating mt-3  ">
                <input type="text" class="form-control" name="stud_password" autocomplete="off"  >
                <label >2nd</label>
                </div>
                </div>
                <div class="col-md-1">
                <div class="form-floating mt-3  ">
                <input type="text" class="form-control" name="stud_password" autocomplete="off"  >
                <label >3rd</label>
                </div>
                </div>
                <div class="col-md-1">
                <div class="form-floating mt-3  ">
                <input type="text" class="form-control" name="stud_password" autocomplete="off"  >
                <label >4th</label>
                </div>
                </div>
                <div class="col-md-3">
                  <input type="submit" value="Save">
                </div>
              </div>
              </form>
              </div>
          </div>
          
         </div>
        
         </div>
          </div>
        </div>


        

      </div>

    </div>
 


    <!-- Insert Students  -->

      </div>

    </div>
  </div>
</div>


 










    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
<script>
  function add(){
    if(confirm("Are you sure you want to add this student?"))
  }
</script>

</body>
</html>