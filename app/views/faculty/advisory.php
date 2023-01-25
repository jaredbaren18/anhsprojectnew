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
                      <input type="hidden"  name="facultyNo"value="<?=$facultNo?>">
                      <input type="submit"  value="Dashboard" class="btn btn-success ">
                    </form>
                  </li>
                  <li class="nav-item px-4  pb-2">
                    <form action="<?=site_url('Faculty/myadvisory')?>" method="post">
                      <input type="hidden"  name="facultyNo"value="<?=$facultNo?>">
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
           <div class="card mt-3 mx-3" style="height:50svh">
           <table id="studenttable" class="table-warning text-center">
            <thead class="bg-warning table-responsive overflow-scroll text-center">
              <tr class="pt-3">
                <th>No.</th>
                <th>LRN.</th>
                <th>Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="justify-content-center">
              <?php foreach($faculty as $student):?>
              <tr>   
                <td><?=$student['studentID']?></td>
                <td><?=$student['stud_lrn']?></td>
                <td><?=$student['stud_fname']?> <?=$student['stud_mname']?> <?=$student['stud_lname']?></td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="studentID" value="<?=$student['studentID']?>">
                      <input type="submit" class="btn btn-warning float-end" value="Edit Grade">
                    </form>
                    <form action=" <?=site_url('Faculty/addGrade')?>"  method="post">
                      <input type="hidden" name="studentID" value="<?=$student['studentID']?>">
                      <input type="submit" class="btn btn-success mx-1 float-end" value="Edit Grade">
                    </form>
                    <form action=""  method="post">
                      <input type="hidden" name="studentID" value="<?=$student['studentID']?>">
                      <input type="submit" class="btn btn-danger float-end" value="Delete">
                    </form>
                  </td>
              </tr>
              <?php endforeach;?>
            </tbody>
           </table>
           </div>
         <div class="card mx-3 mt-3" style="height:10vh">
          <div class="card-body">
          <button type="button" id="deltblBtn" class="btn btn-danger float-end mx-3" data-bs-toggle="modal" data-bs-target="#Resettable">Delete Class Table</button>
         <a href="<?=site_url('Faculty/addStudentview')?>" class="btn btn-warning float-end">Add Student</a>
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
                  <p>Password:</p>
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
                  <p id="viewstud_password"></p>
                  
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
      function insertBtnModal()
      {
        $('#inserstudentModal').modal('show');
      }
 
      function closeaddbtn()
      {
        $('#inserterror').addClass('d-none');
        $('#insertsuccess').removeClass('d-none');
        $('#inserstudentModal').modal('hide');
      }
      function closeprofile()
      {
        $('#viewStudentProfile').modal('hide');
      }
      // INSERTING OF STUDENT 
        $(document).on('submit', '#insertStudentForm', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append('submit', true);

            $.ajax({
                type: "POST",
                url: "http://localhost/anhsprojectnew/Faculty/insertStudent",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    var res = jQuery.parseJSON(response);
                    if(res.status == 500) 
                    {
                        $('#insertsuccess').addClass('d-none');
                        $('#inserterror').removeClass('d-none');
                        $('#inserterror').text(res.message);     
                    }
                    else(res.status == 200)                 
                    {
                      
                        window.alert('Successfully Added!')
                        $('#insertStudentForm')[0].reset();
                        location.reload();
                    }
                  
                }
            });
        });
        // VIEW PROFLE
          $(document).on('click', '.viewbtn', function () {
            var studentID = $(this).val();
            const id = {
                'studentID': studentID,
            };
            console.log(studentID);
            $.ajax({
                type: "POST",
                url: "http://localhost/anhsprojectnew/Student/viewProfile",
                data: id, 
                // processData: false,
                success: function (response) {
                    var res = jQuery.parseJSON(response);
                    console.log(res)
                    if(res.status == 500) {
                       alert('ID not found!');
                        
                    }else if(res.status == 200){
                        $('#studentName').text(res.stud.stud_fname);
                        $('#addgrade').val(res.stud.stud_lrn);
                        $('#viewstud_lrn').text(res.stud.stud_lrn);
                        $('#viewstud_fname').text(res.stud.stud_fname);
                        $('#viewstud_mname').text(res.stud.stud_mname);
                        $('#viewstud_lname').text(res.stud.stud_lname);
                        $('#viewstud_age').text(res.stud.stud_age);
                        $('#viewstud_gender').text(res.stud.stud_gender);
                        $('#viewstud_birthday').text(res.stud.stud_birthday);
                        $('#viewstud_address').text(res.stud.stud_address);
                        $('#viewstud_yearlevel').text(res.stud.stud_yearlevel);
                        $('#viewstud_section').text(res.stud.stud_section);
                        $('#viewstud_username').text(res.stud.stud_username);
                        $('#viewstud_password').text(res.stud.stud_password);
                        $('#viewStudentProfile').modal('show');
                    }
                }
            });

          });
          // DELETE STUDENT 
          // $(document).on('click', '.deltblBtn', function () {
          //   if(confirm('Are you sure?'))
          //   var studentID = $(this).val();
          //   const id = {
          //       'studentID': studentID,
          //   };
          //   console.log(studentID);
          //   $.ajax({
          //       type: "POST",
          //       url: "http://localhost/anhsprojectnew/Student/deleteProfile",
          //       data: id, 
          //       // processData: false,
          //       success: function (response) {
          //           var res = jQuery.parseJSON(response);
          //           console.log(res)
          //           if(res.status == 500) {
          //             alert('ID not found!');
                        
          //           }else if(res.status == 200){   
          //               alert('Deleting of records successfull!');               
          //               window.location.reload();
          //           }
          //       }
          //   });

          //   });
        

    
    </script>


</body>
</html>