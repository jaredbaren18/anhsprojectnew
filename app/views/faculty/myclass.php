<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ANHS| Faculty </title>
  <link rel="stylesheet" href="<?=base_url()?>/public/css/faculty.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mx-auto" >
      <div class="card m-5">
        <div class="row">
          <div class="col-md-2 bg-success" style="height:80vh">
            <div class="text-light text-center pt-5 pb-5">
              <p>User</p>
              <nav class="navbar justify-content-center">
                <ul class="navbar-nav" >
                  <li class="nav-item px-5 pt-2 pb-2">
                    <a href=""class="nav-link text-light"> Dashboard</a>
                  </li>
                  <li class="nav-item px-4  pb-2">
                    <a href=""class="nav-link active text-light"> My Class</a>
                  </li>

                </ul>
              </nav>
              <a href="" class="text-danger">Logout</a>
            </div>
          </div>
          <div class="col-md-10" style="height:80vh">
           <h1>My Students</h1>
           <div class="card mt-3 mx-3" style="height:50svh">
           <table class="table-warning">
            <thead class="bg-warning text-center table-responsive overflow-scroll">
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="bg-secondary">
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
           </table>
           </div>
         <div class="card mx-3 mt-3" style="height:20vh">
          <div class="card-body">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">Add Students</button>
          <button type="button" id="#setting" onclick="setData()" class="btn btn-primary" >Set Data's</button>
          </div>
        
         </div>
          </div>
        </div>

      </div>

    </div>
 


    <!-- Insert Students  -->
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade bg-secondary" id="addStudentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body p-5">
        <!-- body  -->
     <form id="addstudentform" method="post">
     <h1>Student Information</h1>
     <div id="infoerror" class="alert alert-danger text-center d-none"></div>
        <!-- new line  -->
                <label for="">LRN:</label>
                <input type="text"  name="stud_lrn" class="form-control">
                <label for="">First Name:</label>
                <input type="text"  name="stud_fname" class="form-control">

                <label for="">Middle Name:</label>
                <input type="text"  name="stud_mname" class="form-control">              
              <label for="">Last Name:</label>
              <input type="text"  name="stud_lname" class="form-control">
      <!-- 2nd line -->
              <label for="">Age</label>
              <input type="text"  name="stud_age" class="form-control">
              <label for="">Gender</label>
              <select name="stud_gender" class="form-control">
              <option value="">-select-</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              </select>
              <label for="">Address</label>
              <input type="text" name="stud_address"class="form-control">
              <label for="">Birthday</label>
              <input type="date" name="stud_birthday"class="form-control">
              <label for="">Year</label>
                  <select name="stud_yearlevel" class="form-control">
                    <option value="">-select-</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
              <label for="">Section</label>
              <input type="text" name="stud_section"  class="form-control">
              <!-- <select name="stud_section"  class="form-control">
              <option value="">-select-</option>
              <option value=""></option> -->
              </select>
              <label for="">Username</label>
              <input type="text" name="stud_username"  class="form-control">
              <label for="">Password</label>
              <input type="password" name="stud_password"  class="form-control">
             
           <input type="submit" class="btn btn-success"value="Save">
     </form>
     <button type="button" class="btn btn-danger float-end mt-2 mx-3" data-bs-dismiss="modal">Close</button>

     
      
        <!-- end body  -->
      </div>
    </div>
  </div>
</div>
    <!-- end insert studens  -->
 


    <!-- Modal -->
<div class="modal fade bg-secondary" id="setting" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="row mx-1">
              <div class="rounded p-5 bg-primary">
               <h1 class="text-light"> Form 138 Data Setting</h1>
               <p class="text-light">in this setting you can customize some card data where your students can view in their profile.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mt-3 justify-content-center ">
           <div class="card" style="height:40vh">
            <p class="text-secondary text-center mt-2">Setting</p>
            <button type="button" id="siID"  onclick="siBtn()" class="btn btn-light mx-3 mb-3 mr-3">School Information</button>
            <button type="button" id="subID"  onclick="subBtn()" class="btn btn-light mx-3 mb-3 mr-3">Subjects</button>
            <button type="button" id="ginfoID" onclick="ginfoBtn()" class="btn btn-light mx-3 mb-3 mr-3">Grading Inforamtion</button>
           </div>         
           </div>
          <div class="col-md-9">
            <div class="card mt-3 mx-3" style="height:40vh">
              <div class="card-content">
                <div class="card-body">
                 <div id="schoolinfo">
                  <h1>School info</h1>
                    <form id="schoolInfoForm" method="post">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                            <label for="">Region:</label>
                            <input type="text"name="religion" class="form-control">
                            <label for="">Division:</label>
                            <input type="text"name="division" class="form-control">
                            <label for="">District:</label>
                            <input type="text"name="district" class="form-control">
                          </div>
                          <div class="col-md-6">                 
                            <label for="">School:</label>
                            <input type="text"name="school" class="form-control">
                            <label for="">Principal:</label>
                            <input type="text"name="principal" class="form-control">
                            <input type="submit" value="Save"class="btn btn-success float-end mt-5 mx-3 px-3">
                          </div>
                        </div>
                      </div>
                    </form>
                 </div>
                 <div id="subject">
                  <form id="subjectInfo" method="post">
                      <div class="row">
                        <div class="col-md-6" >
                        <h1>Subjects</h1>
                          <input type="text" name="subjectname" class="form-control">
                          <input type="submit" value="Save" class="btn btn-success px-3 mt-3 float-end mx-3 ">
                        </div>
                        <div class="col-md-6">
                          <table class="table table-success table-striped text-center">
                            <thead >
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr><td></td></tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </form>
                 </div>
                 <div id="gradeinfo">
                  <div class="row">
                    <div class="col-md-">
                    <h1>Grading Info</h1>
                        <form id="" method="post">
                          <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control">
                            <label>Grading Scale</label>
                            <input type="text" name="gradingscale" class="form-control">
                            <label>Remarks</label>
                            <input type="text" name="remarks" class="form-control">
                            <input type="submit" class="btn btn-success mt-3 float-end" value="Save">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Back</button>
      </div>
    </div>
  </div>
</div>
    <!-- end insert studens  -->










    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
      function siBtn()
      {
        $('#siID').addClass('active');
        $('#subID').removeClass('active');
        $('#ginfoID').removeClass('active');
        $('#schoolinfo').show();
        $('#subject').hide();
        $('#gradeinfo').hide();
      }
      function subBtn()
      {
        $('#siID').removeClass('active');
        $('#subID').addClass('active');
        $('#ginfoID').removeClass('active');
        $('#subject').show();
        $('#schoolinfo').hide();
        $('#subject').show();
        $('#gradeinfo').hide();
      }
      function ginfoBtn()
      {
        $('#siID').removeClass('active');
        $('#subID').removeClass('active');
        $('#ginfoID').addClass('active');
        $('#gradeinfo').show();
        $('#schoolinfo').hide();
        $('#subject').hide();
        $('#gradeinfo').show();
      }
      function setData()
      {
        $('#setting').modal('show');
        $('#schoolinfo').hide();
        $('#subject').hide();
        $('#gradeinfo').hide();
      }

    </script>
    <script>
          $(document).on('submit', '#addstudentform', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append('submit', true);

            $.ajax({
                type: "POST",
                url: "http://localhost/anhs/Student/addStudent",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    var res = jQuery.parseJSON(response);
                    if(res.status == 500) 
                    {
                        $('#infoerror').removeClass('d-none');
                        $('#infoerror').text(res.message);     

                    }
                    else(res.status == 200)
                    
                    {
 
                        $('#infoerror').removeClass('d-none');
                        $('#infoerror').text(res.message);
                        $('#addStudentModal').modal('show');
                        $('#addstudentform')[0].reset();

                    }
                }
            });
        });
    </script>

</body>
</html>