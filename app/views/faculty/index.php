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
            <div class="container">
              <h1 class="mt-5 mb-4">Dashboard</h1>
             <div class="row">
                <div class="col-md-12">
                    <div class="row">
                          <div class="col-md-5 mx-3 text-center bg-warning rounded p-3">
                                <h5><?=$profile['fac_advisory']?> Students</h5>
                                <h1> <?=$student['studcount']?></h1>
                              </div>
                        <div class="col-md-5 mx-3 text-center  bg-success rounded p-3">
                        <h5>Active Students</h5>
                                <h1> <?=$active['Active']?></h1>
                        </div>
                      </div>
                </div>
             </div>
             <div class="row">
              <div class="col-md-3 mx-4 mt-3 text-center bg-success rounded p-3">
                <h5>Graded Students</h5>
                <?=$graded?>
              </div>
              <div class="col-md-3 mx-4 mt-3 text-center bg-warning rounded p-3">
                <h5>Passed Students</h5>
                <?=$remarkspassed['Passed']?>
              </div>
              <div class="col-md-3 mx-4 mt-3 text-center bg-danger rounded p-3">
                <h5>Failed Students</h5>
                <?=$remarksfailed['Failed']?>
              </div>
             </div>

             
            </div>
          </div>
        </div>

      </div>
    </div>
</body>
</html>