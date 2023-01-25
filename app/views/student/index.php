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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
  <div class="container p-5 text-center">
    <div class="cantainer p-5">
      <div class="row">
        <div class="col-12-success">
          <h1 class="text-cente">Aurora National High School</h1>
        </div>
      </div>
      <div class="row">
        <h5>Hello <?=$stud_fname?> welcome to ANHS CARD VIEWER.</h5>
        <H6 class="mb-5">To see your virtual card please click the button bellow.</H6>
       <div class="col-md-12">
        <button class="cardViewbtn btn btn-danger mb-3" value="<?=$stud_lrn?>">SHOW MY CARD</button><br>
        <a href="<?=site_url('Access/logoutStudent')?>">Logout</a>
       </div>
      </div>
    </div>
  </div>
  <script>
      $(document).on('click', '.cardViewbtn', function () {

                var stud_lrn = $(this).val();
                const id = {
                    'stud_lrn': stud_lrn,
                };
                console.log(stud_lrn);
                $.ajax({
                    type: "POST",
                    url: "http://localhost/anhsprojectnew/Admin/viewFacultyProfile",
                    data: id, 
                    // processData: false,
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        console.log(res)
                        if(res.status == 500) {
                            $('#facError').removeClass('d-none');
                            $('#facError').text(res.message);
                            
                        }else if(res.status == 200){
                            $('#updateerror').addClass('d-none');
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
  </script>
</body>
</html>