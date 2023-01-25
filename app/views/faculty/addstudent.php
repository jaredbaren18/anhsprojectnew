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
           <?php $LAVA =lava_instance();?>
           <?php if(!empty($LAVA->session->flashdata('empty'))):?>
            <div class="errors alert alert-warning alert-disnissable">
              <button type="button" onclick="closebtn()" class="float-end btn-close"></button>
            <?php echo $LAVA->session->flashdata('empty');?>
            </div>
            <?php elseif(!empty($LAVA->session->flashdata('xuname'))):?>
              <div class="errors alert alert-warning alert-disnissable">
              <button type="button" onclick="closebtn()" class="float-end btn-close"></button>
              <?php echo $LAVA->session->flashdata('xuname');?>
              </div>
              <?php elseif(!empty($LAVA->session->flashdata('exist'))):?>
                <div class="errors alert alert-warning alert-disnissable">
              <button type="button" onclick="closebtn()" class="float-end btn-close"></button>
              <?php echo $LAVA->session->flashdata('exist');?>
              </div>
            <?php elseif(!empty($LAVA->session->flashdata('success'))):?>
                <div class="errors alert alert-warning alert-disnissable">
              <button type="button"onclick="closebtn()" class="float-end btn-close"></button>
              <?php echo $LAVA->session->flashdata('success');?>
              </div>
            <?php endif;?>
           <div class="card mt-3 mx-3" style="height:60vh">
         <div class="row">
          <div class="col-md-6 px-3">
          <form action="<?=site_url('Faculty/insertStudent')?>" method="post">
          <div class="form-floating mt-3  ">
          <input type="hidden" class="form-control" value="<?=$facultyNo?>" name="stud_facultyID"  >
                <input type="text" class="form-control" name="stud_lrn" autocomplete="off"  >
                <label >LRN:</label>
          </div>
          <div class="form-floating mt-3  ">
                <input type="text" class="form-control" name="stud_fname" autocomplete="off"  >
                <label >First Name:</label>
          </div>
          <div class="form-floating mt-3  ">
                <input type="text" class="form-control" name="stud_mname" autocomplete="off"  >
                <label >Middle Name:</label>
          </div>
          <div class="form-floating mt-3  ">
                <input type="text" class="form-control" name="stud_lname" autocomplete="off"  >
                <label >Last Name:</label>
          </div>
          <div class="form-floating mt-3  ">
                <input type="text" class="form-control" name="stud_age" autocomplete="off"  >
                <label >Age:</label>
          </div>
          <div class="form-floating mt-3  ">
                
          <select name="stud_gender" class="form-control">
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
                <label >Gender</label>
          </div>
         </div>
         <div class="col-md-6 px-3">
          
          <div class="form-floating mt-3   ">
                <input type="date" class="form-control" name="stud_birthday" autocomplete="off"  >
                <label >Birthday:</label>
          </div>
          <div class="form-floating mt-3  ">
                <input type="text" class="form-control" name="stud_address" autocomplete="off"  >
                <label >Address:</label>
          </div>
          <div class="form-floating mt-3  ">
          <select name="stud_yearlevel" class="form-control">
            <option value="">Select</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
          <label >Grade:</label>
          </div>
          <div class="form-floating mt-3  ">
                <input type="text" class="form-control" value="<?=$fac_advisory?>" name="stud_section" autocomplete="off" disabled  >
                <label >Section</label>
          </div>
          <div class="form-floating mt-3  ">
                <input type="text" class="form-control" name="stud_username" autocomplete="off"  >
                <label >Username:</label>
          </div>
          <div class="form-floating mt-3  ">
                <input type="text" class="form-control" name="stud_password" autocomplete="off"  >
                <label >Password</label>
          </div>
         </div>

           </div>
         <div class="card mx-3 mt-3" style="height:10vh">
          <div class="card-body">
         <input type="submit" class="btn btn-success px-5 float-end" value="Save">
        </form>
          
          </div>
        
         </div>
          </div>
        </div>

      </div>

    </div>
 


    <!-- Insert Students  -->
  <!-- Button trigger modal -->
<div class="modal fade" id="inserstudentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header justify-content-center bg-primary " >
        <div class="row">
          <div class="col-md-12 text-center ">
          <span id="studentName" class= "text-light"></span>
          <h3>Profile</h3>
          </div>
          </div>
            </div>
            <div class="modal-body overflow-scroll">
            <!-- $('viewtstud_lrn').val(res.stud.stud_lrn);
                        $('#viewstud_fname').val(res.stud.stud_fname);
                        $('#viewstud_mname').val(res.stud.stud_mname);
                        $('#viewstud_lname').val(res.stud.stud_lname);
                        $('#viewstud_age').val(res.stud.stud_age);
                        $('#viewstud_gender').val(res.stud.stud_gender);
                        $('#viewstud_birthday').val(res.stud.stud_birthday);
                        $('#viewstud_address').val(res.stud.stud_address);
                        $('#viewstud_yearlevel').val(res.stud.stud_yearlevel);
                        $('#viewstud_section').val(res.stud.stud_section);
                        $('#viewStudentProfile').modal('show'); -->
              <div class="row">
                <div class="col-md-6">
                  <p class="pt-3">LRN:</p>
                  <p>First Name:</p>
                  <p>Middle Name:</p>
                  <p>Last Name:</p>
                  <p>Age:</p>
                  <p>Gender:</p>
                  <p>Birthday:</p>
                  <p>Address:</p>
                  <p>Grade:</p>
                  <p>Section:</p>
                  <p>Username:</p>
                  <p>text:</p>
                </div>
                <div class="col-md-6">
                  <p id="viewstud_lrn" class="mt-3"></p>
                  <p id="viewstud_fname"></p>
                  <p id="viewstud_mname"></p>
                  <p id="viewstud_lname"></p>              
                  <p id="viewstud_age"></p>
                  <p id="viewstud_gender"></p>
                  <p id="viewstud_birthday"></p>
                  <p id="viewstud_address"></p>
                  <p id="viewstud_yearlevel"></p>
                  <p id="viewstud_section"></p>
                  <p id="viewstud_username"></p>
                  <p id="viewstud_text"></p>
                  
                </div>
              </div>
                

              </div>
              <div class="modal-footer">
                <button type="submit" id="addgrade"  class="btn btn-success px-5">Add Grade</button>
                <button type="button" onclick="closeprofile()" class="btn btn-danger">Back</button>
                </form>
              </div>
          </div>
          </div>
        </div>
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