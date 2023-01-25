
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ANHS| Choose </title>
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
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 bg-success">

    </div>
    <div class="col-md-6 bg-warning">
      <div class="p-5">
      <form id="facultyLoginForm" action="<?=site_url('Access/facultyLogin')?>" method="post">
        <div class="p-5 mx-5">
      
            <h1>Faculty Login</h1>
           <?php $LAVA =lava_instance();?>
           <?php if(!empty($LAVA->session->flashdata('xpass'))):?>
            <div class="errors alert alert-warning alert-disnissable">
              <button type="button" onclick="closebtn()" class="float-end btn-close"></button>
            <?php echo $LAVA->session->flashdata('xpass');?>

            </div>
            <?php elseif(!empty($LAVA->session->flashdata('warning'))):?>
              <div class="errors alert alert-warning alert-disnissable">
              <button type="button" onclick="closebtn()" class="float-end btn-close"></button>
              <?php echo $LAVA->session->flashdata('warning');?>
              </div>
            <?php echo $LAVA->session->flashdata('xpass');?>
              <?php elseif(!empty($LAVA->session->flashdata('warning'))):?>
                <div class="errors alert alert-warning alert-disnissable">
              <button type="button" onclick="closebtn()" class="float-end btn-close"></button>
              <?php echo $LAVA->session->flashdata('error');?>
              </div>
            <?php elseif(!empty($LAVA->session->flashdata('empty'))):?>
                <div class="errors alert alert-warning alert-disnissable">
              <button type="button"onclick="closebtn()" class="float-end btn-close"></button>
              <?php echo $LAVA->session->flashdata('empty');?>
              </div>
            <?php endif;?>
            <div class="form-floating">
              <input type="text" class="form-control" name="username"  autocomplete="off" >
              <label >Username</label>
            </div>
              <div class="form-floating mt-3  ">
                <input type="password" class="form-control" name="password" autocomplete="off"  >
                <label >Password</label>
              </div>
              <input type="submit" value="Login" class="btn btn-success px-4 mt-5"> <br> <br>
                   
        </div>
      </form>
      <a href="<?=site_url('Access/student')?>" id="studentBtn" >Student?</a>  
        
      </div>
    </div>
  </div>
  
</div>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
  function closebtn()
  {
    $('.errors').hide();
  }
</script>
</body>
</html>


