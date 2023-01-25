<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ANHS| STUDENT| RECORDS </title>
  <link rel="stylesheet" href="<?=base_url()?>/public/css/faculty.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
   <div class="container-fluid">
    <div class="row">
      <!-- NAVIGATION  -->
      <div class="col-md-2 bg-success" style="height:100vh">
      
      <nav class="justify-content-center text-center">
        <ul class="nav-link mt-5 pt-5 ">
          <li class="text-light p-2"><a href="<?=site_url('Admin/index')?>" class="nav-link">Dashboard</a></li>
          <li>
          <div class="dropdown-cente mb-5">
            <a class="btn btn-success dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Accounts
</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=site_url('Admin/facutltyAccounts')?>">Faculty</a></li>
              <li><a class="dropdown-item" href="<?=site_url('Admin/studentAccounts')?>">Student</a></li>
                  
            </ul>
          </div>
          <h6 class="text-light">In session:</h6>
          <h6 class="text-light"><?=$fac_role?></h6>
          <h5 class="text-light"><?=$fac_fname?> <?=$fac_lname?></h5>

          <li><a class="btn  btn-success" href="<?=site_url('Access/logoutAdmin')?>">Logout</a></li>
          </li>
        </ul>
      </nav>
      </div>
      <!-- NAVIGATION END  -->
           <!-- BODY  -->
      <div class="col-md-10" style="height:100vh">
      <div class="row">
        <div class="col-md-11 mx-3 mt-3">
         <div class="card">
          <div class="card-content">
            <div class="card-header">
            <h1>Students Accounts</h1>
            
            <!-- test  -->
            <!-- <label for="">num1</label>
            <input type="text" id="priceid1">
            <label for="">num1</label>
            <input type="text" id="priceid2">
            <h1>total <span id="total"></span></h1> -->


            </div>
            <div class="card-body">
              <div class="card mx-3 mt-2">
                <div class="card-content">
                  <div class="card-body"style="height:70vh">
                    <div id="studError" class="alert alert-danger d-none"></div>
                    <div id="studSuccess" class="alert alert-success d-none"></div>
                    <table id="studentsTable" class="table">
                      <thead class="table-warning text-center">
                        <th>No.</th>
                        <th>LRN</th>
                        <th>Name</th>
                        <th>Actions</th>
                      </thead>
                      <tbody class="text-center">
                        <?php foreach($student as $stud):?>
                          <tr class="mt-3"> 
                            <td><?=$stud['studentID']?></td>
                            <td><?=$stud['stud_lrn']?></td>
                            <td><?=$stud['stud_fname']?> <?=$stud['stud_mname']?> <?=$stud['stud_lname']?></td>
                            <td>
                              <button class="viewBtn btn btn-success" value="<?=$stud['studentID']?>">View</button>
                              <button class="editBtn btn btn-success" value="<?=$stud['studentID']?>">Edit</button>
                              <button class="deleteBtn btn btn-danger" value="<?=$stud['studentID']?>">Delete</button>
                            </td>
                          </tr>
                        <?php endforeach;?>
                      </tbody>
                  </table>
                  
                  </div>
                  <div class="card-footer">
                  <button type="button" onclick="addnew()" class="btn btn-success"> Add New Student</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">

            </div>
          </div>
         </div>
        </div>
      </div>
      </div>
              <!-- END BODY  -->
      <!-- NAVIGATION END  -->
 
      



    </div>
   </div>






   <!-- MODALS  -->
   <!-- Button trigger modal -->



<!-- Modal -->
<div class="modal fade" id="viewProfileModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
            <h4 class="text-center">It's. <span id="profileName"></span>  Profile</h4>
            <div class="row">
              <div class="col-md-5">
                <p class="mt-2 mb-2">LRN:</p>
                <p class="mt-2 mb-2">First Name:</p>
                <p class="mt-2 mb-2">Middle Name:</p>
                <p class="mt-2 mb-2">Last Name:</p>
                <p class="mt-2 mb-2">Age:</p>
                <p class="mt-2 mb-2">Gender:</p>
                <p class="mt-2 mb-2">Birthday:</p>
                <p class="mt-2 mb-2">Address:</p>
                <p class="mt-2 mb-2">Year:</p>
                <p class="mt-2 mb-2">Section</p>
                <p class="mt-2 mb-2">Role:</p>
                <p class="mt-2 mb-2">Username:</p>
                <p class="mt-2 mb-2">Password:</p>
                
              </div>
              <div class="col-md-6">
                editstudentID
                <p id="profileName" class="mt-2 mb-2"></p>
                <p id="viewstudlrn" class="mt-2 mb-2"></p>
                <p id="viewfname" class="mt-2 mb-2"></p>
                <p id="viewmname" class="mt-2 mb-2"></p>
                <p id="viewlname" class="mt-2 mb-2"></p>
                <p id="viewage" class="mt-2 mb-2"></p>
                <p id="viewgender" class="mt-2 mb-2"></p>
                <p id="viewbirthday" class="mt-2 mb-2"></p>
                <p id="viewaddress" class="mt-2 mb-2"></p>
                <p id="viewyear" class="mt-2 mb-2"></p>
                <p id="viewsection" class="mt-2 mb-2"></p>
                <p id="viewrole" class="mt-2 mb-2"></p>
                <p id="viewusername" class="mt-2 mb-2"></p>
                <p id="viewpassword" class="mt-2 mb-2"></p>
              </div>
            </div>
            </div>
          </div>
        </div>
      
      </div>
      <div class="modal-footer">
        <button id="editProBtn" class="btn btn-success">Edit</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- INSERT  MODAL  -->
<div class="modal fade" id="insertModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-content">
            <div class="card-header">
            <h1 class="text-center">Complete the form to add student profile</h1>
            </div>
            <div id="inserterror" class="alert alert-danger d-none"></div>
            <div id="insertsuccess" class="alert alert-success d-none"></div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-5">
                <p class="mt-1 mb-4">LRN:</p>
                <p class="mt-1 mb-4">First Name:</p>
                <p class="mt-1 mb-4">Middle Name:</p>
                <p class="mt-1 mb-4">Last Name:</p>
                <p class="mt-1 mb-4">Age:</p>
                <p class="mt-1 mb-4">Gender:</p>
                <p class="mt-1 mb-4">Birthday:</p>
                <p class="mt-1 mb-4">Address:</p>
                <p class="mt-1 mb-3">Year:</p>
                <p class="mt-1 mb-4">Section</p>
                <p class="mt-1 mb-4">Username:</p>
                <p class="mt-1 mb-4">Password:</p>
                </div>
                <div class="col-md-7">
                <form id="insertStudentForm" method="post">
                  <input type="text" name="stud_lrn" class="form-control mb-2">
                  <input type="text"  name="stud_fname" class="form-control mb-2">
                  <input type="text"  name="stud_mname" class="form-control mb-2">
                  <input type="text" name="stud_lname" class="form-control mb-2">
                  <input type="text" name="stud_age" class="form-control mb-2">
                  <select name="stud_gender"class="form-control mb-2">
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                  <input type="date"  name="stud_birthday" class="form-control mb-2">
                  <input type="text" name="stud_address" class="form-control mb-2">
                  <select name="stud_yearlevel" class="form-control mb-2">
                    <option value="">Select</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                  <input type="text"  name="stud_section" class="form-control mb-2">
                  <input type="text"  name="stud_username" class="form-control mb-2" >
                  <input type="text"  name="stud_password" class="form-control mb-2" >

                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <button type="button" onclick="closeBtn()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- END OF INSERT MODAL -->




<!-- UPDATE MODAL  -->
<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-content">
            <div class="card-header">
            <h1 class="text-center">Edi <span id="ediprofile"></span> Profile</h1>
            </div>
            <div id="updateerror" class="alert alert-danger d-none"></div>
            <div id="updatesuccess" class="alert alert-success d-none"></div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-5">
                <p class="mt-1 mb-4">LRN:</p>
                <p class="mt-1 mb-4">First Name:</p>
                <p class="mt-1 mb-4">Middle Name:</p>
                <p class="mt-1 mb-4">Last Name:</p>
                <p class="mt-1 mb-4">Age:</p>
                <p class="mt-1 mb-4">Gender:</p>
                <p class="mt-1 mb-4">Birthday:</p>
                <p class="mt-1 mb-4">Address:</p>
                <p class="mt-1 mb-3">Year:</p>
                <p class="mt-1 mb-4">Section</p>
                <p class="mt-1 mb-4">Role:</p>
                <p class="mt-1 mb-4">Username:</p>
                <p class="mt-1 mb-4">Password:</p>
                </div>
                <div class="col-md-7">
                <form id="updateModalForm" method="post">
                  <input type="hidden" id="editstudentID" name="studentID" class="form-control mb-2">
                  <input type="text" id="editstud_lrn" name="stud_lrn" class="form-control mb-2">
                  <input type="text" id="editstud_fname" name="stud_fname" class="form-control mb-2">
                  <input type="text" id="editstud_mname" name="stud_mname" class="form-control mb-2">
                  <input type="text" id="editstud_lname" name="stud_lname" class="form-control mb-2">
                  <input type="text" id="editstud_age" name="stud_age" class="form-control mb-2">
                  <input type="text" id="ediststud_gender" name="stud_gender" class="form-control mb-2">
                  <input type="date" id="editstud_birthday" name="stud_birthday" class="form-control mb-2">
                  <input type="text" id="editstud_address" name="stud_address" class="form-control mb-2">
                  <input type="text" id="editstud_yearlevel" name="stud_yearlevel" class="form-control mb-2">
                  <input type="text" id="editstud_section" name="stud_section" class="form-control mb-2">
                  <input type="text" id="editstud_role" name="stud_role" class="form-control mb-2" >
                  <input type="text" id="editstud_username" name="stud_username" class="form-control mb-2" >
                  <input type="text" id="editstud_password" name="stud_password" class="form-control mb-2" >
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
      <div class="modal-footer">

        <button type="submit"  class="btn btn-primary">Save</button>
        </form>
        <button type="button" onclick="closeBtn()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- END OF UPDATE MODAL  -->

   <!-- END OF MODALS  -->



   <!-- AJAX SCRIPTS  -->
   <script>

    function closeBtn()
    {
      $('#updatesuccess').addClass('d-none');
      $('#updateerror').addClass('d-none');
    }
    // INSERT STUDENT 
$(document).on('submit', '#insertStudentForm', function(e){
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("submit", true);

            $.ajax({
                type: "POST",
                url: "http://localhost/anhsprojectnew/Admin/insertStud",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log(response);
                    var res = jQuery.parseJSON(response);
                    console.log(res);

                    if(res.status == 500) {
                        $('#inserterror').removeClass('d-none');
                        $('#inserterror').text(res.message);
                       

                    }else if(res.status == 200){

                        alert('Record successfully added.');
                        $('#insertModal').modal('show');
                        $('#insertStudentForm')[0].reset();
                        $('#studentsTable').load(location.href + " #studentsTable");
                    }
            
                }
            });

        });


          // $(document).ready(function(){
          //   $('#priceid1','#priceid2').keyup(function () { 
          //     var total=0;
          //     var x=number($('#priceid1').val(this));
          //     var y=number($('#priceid2').val(this));
          //     var total=x*y;
          //     $('#total').val(total);
          //     $('#total').text(total);
          //   });
          // });

          function addnew()
          {
            $('#insertModal').modal('show');
          }

            // VIEW PROFILE 
        $(document).on('click', '.viewBtn', function () {

        var studentID = $(this).val();
        const id = {
            'studentID': studentID,
        };
        console.log(studentID);
        $.ajax({
            type: "POST",
            url: "http://localhost/anhsprojectnew/Admin/viewStudentProfile",
            data: id, 
            // processData: false,
            success: function (response) {

                var res = jQuery.parseJSON(response);
                console.log(res)
                if(res.status == 500) {
                    $('#facError').removeClass('d-none');
                    $('#facError').text(res.message);
                    
                }else if(res.status == 200){
              

                    $('#editProBtn').val(res.stud.studentID);
                    $('#profileName').text(res.stud.stud_fname);
                    $('#viewstudlrn').text(res.stud.stud_lrn);
                    $('#viewfname').text(res.stud.stud_fname);
                    $('#viewmname').text(res.stud.stud_mname);
                    $('#viewlname').text(res.stud.stud_lname);
                    $('#viewage').text(res.stud.stud_age);
                    $('#viewgender').text(res.stud.stud_gender);
                    $('#viewbirthday').text(res.stud.stud_birthday);
                    $('#viewaddress').text(res.stud.stud_address);
                    $('#viewyear').text(res.stud.stud_yearlevel);
                    $('#viewsection').text(res.stud.stud_section);
                    $('#viewrole').text(res.stud.std_role);
                    $('#viewusername').text(res.stud.stud_username);
                    $('#viewpassword').text(res.stud.stud_password);
                    $('#viewProfileModal').modal('show');
                }

            }
        });

        });

// END VIEW PROFILE 



             
        $(document).on('click', '.editBtn', function () {

          var studentID = $(this).val();
          const id = {
              'studentID': studentID,
          };
          console.log(studentID);
          $.ajax({
              type: "POST",
              url: "http://localhost/anhsprojectnew/Admin/viewStudentProfile",
              data: id, 
              // processData: false,
              success: function (response) {

                  var res = jQuery.parseJSON(response);
                  console.log(res)
                  if(res.status == 500) {
                      $('#facError').removeClass('d-none');
                      $('#facError').text(res.message);
                      
                  }else if(res.status == 200){

                     $('#ediprofile').text(res.stud.stud_fname);
                     $('#editstudentID').val(res.stud.studentID);
                      $('#editstud_lrn').val(res.stud.stud_lrn);
                      $('#editstud_fname').val(res.stud.stud_fname);
                      $('#editstud_mname').val(res.stud.stud_mname);
                      $('#editstud_lname').val(res.stud.stud_lname);
                      $('#editstud_age').val(res.stud.stud_age);
                      $('#ediststud_gender').val(res.stud.stud_gender);
                      $('#editstud_birthday').val(res.stud.stud_birthday);
                      $('#editstud_address').val(res.stud.stud_address);
                      $('#editstud_yearlevel').val(res.stud.stud_yearlevel);
                      $('#editstud_section').val(res.stud.stud_section);
                      $('#editstud_role').val(res.stud.stud_role);
                      $('#editstud_username').val(res.stud.stud_username);
                      $('#editstud_password').val(res.stud.stud_password);
                      $('#editModal').modal('show');
                  }

              }
          });

          });

          $(document).on('click', '#editProBtn', function () {

var studentID = $(this).val();
const id = {
    'studentID': studentID,
};
console.log(studentID);
$.ajax({
    type: "POST",
    url: "http://localhost/anhsprojectnew/Admin/viewStudentProfile",
    data: id, 
    // processData: false,
    success: function (response) {

        var res = jQuery.parseJSON(response);
        console.log(res)
        if(res.status == 500) {
            $('#facError').removeClass('d-none');
            $('#facError').text(res.message);
            
        }else if(res.status == 200){

           $('#ediprofile').text(res.stud.stud_fname);
           $('#editstudentID').text(res.stud.studentID);
            $('#editstud_lrn').val(res.stud.stud_lrn);
            $('#editstud_fname').val(res.stud.stud_fname);
            $('#editstud_mname').val(res.stud.stud_mname);
            $('#editstud_lname').val(res.stud.stud_lname);
            $('#editstud_age').val(res.stud.stud_age);
            $('#ediststud_gender').val(res.stud.stud_gender);
            $('#editstud_birthday').val(res.stud.stud_birthday);
            $('#editstud_address').val(res.stud.stud_address);
            $('#editstud_yearlevel').val(res.stud.stud_yearlevel);
            $('#editstud_section').val(res.stud.stud_section);
            $('#editstud_role').val(res.stud.stud_role);
            $('#editstud_username').val(res.stud.stud_username);
            $('#editstud_password').val(res.stud.stud_password);
            $('#editModal').modal('show');
        }

    }
});

});



          $(document).on('submit', '#updateModalForm', function(e){
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("submit", true);

            $.ajax({
                type: "POST",
                url: "http://localhost/anhsprojectnew/Admin/updateStudentData",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log(response);
                    var res = jQuery.parseJSON(response);
                    console.log(res);

                    if(res.status == 500) {
                        $('#updateerror').removeClass('d-none');
                        $('#updateerror').text(res.message);
                       

                    }else if(res.status == 200){

                        $('#updatesuccess').removeClass('d-none');
                        $('#updateerror').addClass('d-none');
                        $('#updatesuccess').text(res.message);
                        $('#editModal').modal('show');
                        $('#studentsTable').load(location.href + " #studentsTable");
                    }
            
                }
            });

        });

        $(document).on('click', '.deleteBtn', function (e) {
            e.preventDefault();

            if(confirm('Are you sure you want to delete this data?'))
            {
                var studentID = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/anhsprojectnew/Admin/delStudent/",
                    data: {
                        'delete_student': true,
                        'studentID': studentID
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alert('Deleting of records successful');
                            $('#studentsTable').load(location.href + " #studentsTable");
                        }
                    }
                });
            }
        });



   </script>
     <!-- END AJAX SCRIPTS  -->


</body>
</html>