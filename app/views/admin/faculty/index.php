<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ANHS| ADMIN| DASHBOARD </title>
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
        <ul class="nav-link ">
          <li class="text-light p-2"><a href="<?=site_url('Admin/index')?>" class="nav-link">Dashboard</a></li>
          <li>
          <div class="dropdown-center">
            <a class="btn btn-success dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Accounts
</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?=site_url('Admin/facutltyAccounts')?>">Faculty</a></li>
              <li><a class="dropdown-item" href="#">Student</a></li>
            </ul>
          </div>
          </li>
        </ul>
      </nav>
      </div>
      <!-- NAVIGATION END  -->
           <!-- BODY  -->
      <div class="col-md-10" style="height:100vh">
      <div class="row">
        <div class="col-md-11 mx-3 mt-3">
         <div class="card" style="height:70vh">
          <div class="card-content">
            <div class="card-header">
            <h1>Employees Accounts</h1>
            
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
                    <div id="facError" class="alert alert-danger d-none"></div>
                    <div id="facSuccess" class="alert alert-success d-none"></div>
                    <table id="facultyTable" class="table">
                      <thead class="table-warning text-center">
                        <th>No.</th>
                        <th>Faculty ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                      </thead>
                      <tbody class="text-center">
                        <?php foreach($faculty as $emp):?>
                          <tr class="mt-3"> 
                            <td><?=$emp['facultyID']?></td>
                            <td><?=$emp['facultyNo']?></td>
                            <td><?=$emp['fac_fname']?> <?=$emp['fac_mname']?> <?=$emp['fac_lname']?></td>
                            <td>
                              <button class="viewBtn btn btn-success" value="<?=$emp['facultyID']?>">View</button>
                              <button class="editBtn btn btn-success" value="<?=$emp['facultyID']?>">Edit</button>
                              <button class="deleteBtn btn btn-danger" value="<?=$emp['facultyID']?>">Delete</button>
                            </td>
                          </tr>
                        <?php endforeach;?>
                      </tbody>
                  </table>
                  
                  </div>
                  <div class="card-footer">
                  <button type="button" onclick="addnew()" class="btn btn-success"> Add New Faculty</button>
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
            <h4 class="text-center">Mr. <span id="profileName"></span>  Profile</h4>
            <div class="row">
              <div class="col-md-5">
                <p class="mt-2 mb-2">Faculty ID:</p>
                <p class="mt-2 mb-2">First Name:</p>
                <p class="mt-2 mb-2">Middle Name:</p>
                <p class="mt-2 mb-2">Last Name:</p>
                <p class="mt-2 mb-2">Age:</p>
                <p class="mt-2 mb-2">Gender:</p>
                <p class="mt-2 mb-2">Birthday:</p>
                <p class="mt-2 mb-2">Role:</p>
                <p class="mt-2 mb-2">Advisory:</p>
                <p class="mt-2 mb-2">Year Assign:</p>
                <p class="mt-2 mb-2">Username:</p>
                <p class="mt-2 mb-2">Password:</p>
                
              </div>
              <div class="col-md-6">
                <p id="profileName" class="mt-2 mb-2"></p>
                <p id="viewfacultyid" class="mt-2 mb-2"></p>
                <p id="viewfname" class="mt-2 mb-2"></p>
                <p id="viewmname" class="mt-2 mb-2"></p>
                <p id="viewlname" class="mt-2 mb-2"></p>
                <p id="viewage" class="mt-2 mb-2"></p>
                <p id="viewgender" class="mt-2 mb-2"></p>
                <p id="viewbirthday" class="mt-2 mb-2"></p>
                <p id="viewrole" class="mt-2 mb-2"></p>
                <p id="viewadvisory" class="mt-2 mb-2"></p>
                <p id="viewyearassign" class="mt-2 mb-2"></p>
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
        <button type="button" class="btn btn-primary">Understood</button>
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
            <h1 class="text-center">Edi <span id="ediprofile"></span> Profile</h1>
            </div>
            <div id="inserterror" class="alert alert-danger d-none"></div>
            <div id="insertsuccess" class="alert alert-success d-none"></div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-5">
                <p class="mt-1 mb-4">Faculty ID:</p>
                <p class="mt-1 mb-4">First Name:</p>
                <p class="mt-1 mb-4">Middle Name:</p>
                <p class="mt-1 mb-4">Last Name:</p>
                <p class="mt-1 mb-3">Age:</p>
                <p class="mt-1 mb-4">Gender:</p>
                <p class="mt-1 mb-4">Birthday:</p>
                <p class="mt-1 mb-4">Role:</p>
                <p class="mt-1 mb-4">Advisory:</p>
                <p class="mt-1 mb-4">Year Assign:</p>
                <p class="mt-1 mb-4">Username:</p>
                <p class="mt-1 mb-4">Password:</p>
                </div>
                <div class="col-md-7">
                <form id="insertFacultyForm" method="post">
                  <input type="hidden"  name="facultyID" class="form-control mb-2">
                  <input type="text" name="facultyNo" class="form-control mb-2">
                  <input type="text"  name="fac_fname" class="form-control mb-2">
                  <input type="text"  name="fac_mname" class="form-control mb-2">
                  <input type="text" name="fac_lname" class="form-control mb-2">
                  <input type="text" name="fac_age" class="form-control mb-2">
                  <input type="text"  name="fac_gender" class="form-control mb-2">
                  <input type="date"  name="fac_birthday" class="form-control mb-2">
                  <input type="text" name="fac_role" class="form-control mb-2">
                  <input type="text"  name="fac_advisory" class="form-control mb-2">
                  <input type="text"  name="fac_yearlevel" class="form-control mb-2">
                  <input type="text"  name="fac_username" class="form-control mb-2" >
                  <input type="text"  name="fac_password" class="form-control mb-2" >
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                <p class="mt-1 mb-4">Faculty ID:</p>
                <p class="mt-1 mb-4">First Name:</p>
                <p class="mt-1 mb-4">Middle Name:</p>
                <p class="mt-1 mb-4">Last Name:</p>
                <p class="mt-1 mb-3">Age:</p>
                <p class="mt-1 mb-4">Gender:</p>
                <p class="mt-1 mb-4">Birthday:</p>
                <p class="mt-1 mb-4">Role:</p>
                <p class="mt-1 mb-4">Advisory:</p>
                <p class="mt-1 mb-4">Year Assign:</p>
                <p class="mt-1 mb-4">Username:</p>
                <p class="mt-1 mb-4">Password:</p>
                </div>
                <div class="col-md-7">
                <form id="updateModalForm" method="post">
                  <input type="hidden" id="editfacultyID" name="facultyID" class="form-control mb-2">
                  <input type="text" id="editfacultyNo" name="facultyNo" class="form-control mb-2">
                  <input type="text" id="editfac_fname" name="fac_fname" class="form-control mb-2">
                  <input type="text" id="editfac_mname" name="fac_mname" class="form-control mb-2">
                  <input type="text" id="editfac_lname" name="fac_lname" class="form-control mb-2">
                  <input type="text" id="editfac_age" name="fac_age" class="form-control mb-2">
                  <input type="text" id="editfac_gender" name="fac_gender" class="form-control mb-2">
                  <input type="date" id="editfac_birthday" name="fac_birthday" class="form-control mb-2">
                  <input type="text" id="editfac_role" name="fac_role" class="form-control mb-2">
                  <input type="text" id="editfac_advisory" name="fac_advisory" class="form-control mb-2">
                  <input type="text" id="editfac_yearlevel" name="fac_yearlevel" class="form-control mb-2">
                  <input type="text" id="editfac_username" name="fac_username" class="form-control mb-2" >
                  <input type="text" id="editfac_password" name="fac_password" class="form-control mb-2" >
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- END OF UPDATE MODAL  -->

   <!-- END OF MODALS  -->



   <!-- AJAX SCRIPTS  -->
   <script>
    // INSERT FACULTY 
$(document).on('submit', '#insertFacultyForm', function(e){
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("submit", true);

            $.ajax({
                type: "POST",
                url: "http://localhost/anhs/Admin/insertFac",
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
                      alert('Record successfully added');
                        $('#insertModal').modal('show');
                        $('#insertFacultyForm')[0].reset();
                        $('#facultyTable').load(location.href + " #facultyTable");
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

        var facultyID = $(this).val();
        const id = {
            'facultyID': facultyID,
        };
        console.log(facultyID);
        $.ajax({
            type: "POST",
            url: "http://localhost/anhs/Admin/viewFacultyProfile",
            data: id, 
            // processData: false,
            success: function (response) {

                var res = jQuery.parseJSON(response);
                console.log(res)
                if(res.status == 500) {
                    $('#facError').removeClass('d-none');
                    $('#facError').text(res.message);
                    
                }else if(res.status == 200){
                  
                    $('#editProBtn').val(res.emp.facultyID);
                    $('#profileName').text(res.emp.fac_fname);
                    $('#viewfacultyid').text(res.emp.facultyNo);
                    $('#viewfname').text(res.emp.fac_fname);
                    $('#viewmname').text(res.emp.fac_mname);
                    $('#viewlname').text(res.emp.fac_lname);
                    $('#viewage').text(res.emp.fac_age);
                    $('#viewgender').text(res.emp.fac_gender);
                    $('#viewbirthday').text(res.emp.fac_birthday);
                    $('#viewrole').text(res.emp.fac_role);
                    $('#viewadvisory').text(res.emp.fac_advisory);
                    $('#viewyearassign').text(res.emp.fac_yearlevel);
                    $('#viewusername').text(res.emp.fac_username);
                    $('#viewpassword').text(res.emp.fac_password);
                    $('#viewProfileModal').modal('show');
                }

            }
        });

        });

// END VIEW PROFILE 



             
        $(document).on('click', '.editBtn', function () {

          var facultyID = $(this).val();
          const id = {
              'facultyID': facultyID,
          };
          console.log(facultyID);
          $.ajax({
              type: "POST",
              url: "http://localhost/anhs/Admin/viewFacultyProfile",
              data: id, 
              // processData: false,
              success: function (response) {

                  var res = jQuery.parseJSON(response);
                  console.log(res)
                  if(res.status == 500) {
                      $('#facError').removeClass('d-none');
                      $('#facError').text(res.message);
                      
                  }else if(res.status == 200){
                     $('#ediprofile').text(res.emp.fac_fname);
                      $('#editfacultyID').val(res.emp.facultyID);
                      $('#editfacultyNo').val(res.emp.facultyNo);
                      $('#editfac_fname').val(res.emp.fac_fname);
                      $('#editfac_mname').val(res.emp.fac_mname);
                      $('#editfac_lname').val(res.emp.fac_lname);
                      $('#editfac_age').val(res.emp.fac_age);
                      $('#editfac_gender').val(res.emp.fac_gender);
                      $('#editfac_birthday').val(res.emp.fac_birthday);
                      $('#editfac_role').val(res.emp.fac_role);
                      $('#editfac_advisory').val(res.emp.fac_advisory);
                      $('#editfac_yearlevel').val(res.emp.fac_yearlevel);
                      $('#editfac_username').val(res.emp.fac_username);
                      $('#editfac_password').val(res.emp.fac_password);
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
                url: "http://localhost/anhs/Admin/updateFaculty",
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
                        $('#facultyTable').load(location.href + " #facultyTable");
                    }
            
                }
            });

        });

        $(document).on('click', '.deleteBtn', function (e) {
            e.preventDefault();

            if(confirm('Are you sure you want to delete this data?'))
            {
                var facultyID = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/anhs/Admin/delFaculty/",
                    data: {
                        'delete_faculty': true,
                        'facultyID': facultyID
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alert('Deleting of records successful');
                            $('#facultyTable').load(location.href + " #facultyTable");
                        }
                    }
                });
            }
        });



   </script>
     <!-- END AJAX SCRIPTS  -->


</body>
</html>