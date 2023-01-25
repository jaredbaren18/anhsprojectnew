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
      <div class="col-md-2 bg-success text-center" style="height:100vh">
    
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
            <h1>Dashboard</h1>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 p-3">
                <div class="p-3 bg-danger text-light rounded">
                  <h5>Total Accounts</h5>
                  <h1><?=$accounts?></h1>
                </div>
                
              </div>
              <div class="col-md-4 p-3">
              <div class="p-3 bg-warning rounded">
                  <h5>Total Students</h5>
                
                  <h1><?=$students['totalstudents'];?></h1>
                </div>
              </div>
              <div class="col-md-4 p-3">
              <div class="p-3 bg-warning rounded">
                  <h5>Total Employees</h5>
                  <h1><?=$emp['totalfaculty']?></h1>
                </div>
              </div>
            </div>
          </div>
         </div>
        </div>
      </div>
    </div>
   </div>

   </div>
  </div>

</body>
</html>