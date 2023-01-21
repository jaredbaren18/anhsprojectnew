<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ANHS| Choose </title>
  <link rel="stylesheet" href="<?=base_url()?>/public/css/index.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
  <!-- HERO  -->
  <div class="container-fluid bg-success p-3">
    <h5 class="text-light"> AURORA NATIONAL HIGH SCHOOL</h5>
  </div>
  <div class="container-fluid">
    <h1 class="text-center p-3">STUDENT CARD VIEWER</h1>
  </div>

  <!-- END HERO  -->

<div class="container-fluid">
<a type="button" class="btn btn-success round" data-bs-toggle="modal" data-bs-target="#selectType">
  SIGN IN
</a>
</div>
<!-- Button trigger modal -->


<!-- Select Login type Modal -->
<div class="modal fade bg--dark-rgb " id="selectType"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body text-center">
        <h1 class="text-success pb-2">Choose where to Login!</h1>
        <div class="row text-center">
          <div class="col-md-6">
            <div class="card">
              <div class="">
                <div class="card bg-success pt-2">
                  <a href="" id="studentBtn"  data-bs-toggle="modal" data-bs-target="#studentLogin">
                    <img src="<?=base_url()?>/public/images/student.png" height="280px" width="350px"  class="img-=fluid" alt="students"></a>
                  <a type="button" class="nav-link text-light" data-bs-toggle="modal" data-bs-target="#studentLogin">Student</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="border-stripe">
                <div class="card bg-secondary pt-2">
                <a href="" id="facultyBtn"  data-bs-toggle="modal" data-bs-target="#facultyLogin">
                  <img src="<?=base_url()?>/public/images/faculty.png" height="280px" width="350px" class="img-=fluid" alt="faculty"></a>
                <a href="" class="nav-link text-light" data-bs-toggle="modal" data-bs-target="#facultyLogin">Teacher</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-danger mt-3 px-5" data-bs-dismiss="modal">Back</button>
      </div>

      </div>
    </div>
  </div>
</div>  

<!-- Select Login type Modal -->
<!-- Student Login Modal  -->
<div class="modal fade bg-success " id="studentLogin"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h5 class="text-success text-center">Aurora National High School</h5>
        <h1 class="text-success text-center">Student Card Viewer</h1>

        <div class="row">
          <div class="col-md-6">
            <div class="card">
            <img src="<?=base_url()?>/public/images/student.png" height="280px" width="370px"  class="img-=fluid" alt="students">
            </div>
          </div>
          <div class="col-md-6">
            <div class="card p-3">
            <form id="studentLoginForm" method="post">
                    <h4 class="mt-2 text-center">Lets see what you've got!</h4>
                    <div id="studError" class="aler alert-danger" style="font-sizeL:10px"></div>
                    <div class="form-group mx-2 mb-2">
                      <Label>Username</Label>
                    <input type="text" name="username"  class="form-control ">
                    </div>
                    <div class="form-group mx-2">
                      <label >Password</label>
                    <input type="password" name="password" class="form-control ">
                    </div>
                    <input type="submit" class="btn btn-success mx-2" value="Login"><br>
                    <a type="button" class="mt-2 mx-2" data-bs-toggle="modal" data-bs-target="#selectType">Back</a>
                  </form>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>  



<!-- Faculty Login Modal  -->
<!-- Student Login Modal  -->
<div class="modal fade bg-secondary " id="facultyLogin"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h5 class="text-success text-center">Aurora National High School</h5>
        <h1 class="text-success text-center">Faculty Login</h1>

        <div class="row">
          <div class="col-md-6">
            <div class="card">
            <img src="<?=base_url()?>/public/images/faculty.png" height="280px" width="370px" class="img-=fluid" alt="faculty">
            </div>
          </div>
          <div class="col-md-6">
            <div class="card p-3">
            <form id="facultyLoginForm" method="post">
                    <h4 class="mt-1 text-center">Login here!</h4>
                    <div id="facError" class="aler alert-danger" style="font-sizeL:10px"></div>
                    <div class="form-group mx-2 mb-1">
                      <Label>Username</Label>
                    <input type="text" name="username" class="form-control ">
                    </div>
                    <div class="form-group mx-2">
                      <label >Password</label>
                    <input type="password" name="password"class="form-control ">
                    </div>
                    <input type="submit" class="btn btn-success mx-2 mt-2" value="Login"><br>
                    <a type="button" class="mt-2 mx-2" data-bs-toggle="modal" data-bs-target="#selectType">Back</a>
                  </form>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>  





<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).on('submit', '#studentLoginForm', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("submit", true);

            $.ajax({
                type: "POST",
                url: "http://localhost/anhs/anhs/Access/studentLogin",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 500) {
                        $('#studError').removeClass('d-none');
                        $('#studError').text(res.message);

                    }else if(res.status == 200){
                        console.log(res);
                        alert('Logged in successful');
                        $('#facultyLogin').modal('hide');
                        $('#studentLoginForm')[0].reset();

                    }
                }
            });
        });
        $(document).on('submit', '#facultyLoginForm', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("submit", true);

            $.ajax({
                type: "POST",
                url: "http://localhost/anhs/anhs/Access/facultyLogin",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 500) {
                        console.log(res);
                        $('#facError').removeClass('d-none');
                        $('#facError').text(res.message);

                    }else if(res.status == 200){
                        console.log(res);
                        alert('Logged in successful');
                        $('#facultyLogin').modal('hide');
                        $('#facultyLoginForm')[0].reset();

                    }
                }
            });
        });
</script>
</body>
</html>