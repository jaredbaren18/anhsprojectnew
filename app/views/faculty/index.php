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
                    <a href=""class="nav-link text-light"> My Class</a>
                  </li>

                </ul>
              </nav>
              <a href="" class="nav-link mb-5">Change password</a>
              <a href="" class="text-danger">Logout</a>
            </div>
          </div>
          <div class="col-md-10" style="height:80vh">
            <div class="container">
              <h1 class="mx-5 mt-5">Dashboard</h1>

              <div class="row">
                <div class="col-md-12 pb-2 px-5">
                <div>
                  <canvas id="myChart"  ></canvas>
                </div>
                </div>
                <div class="row mx-5">
                  <div class="col-md-3 bg-success text-center mx-3 mt-3 p-3 rounded">
                    <h6 class="text-light">Total Students</h6>
                    <h1 class="text-light">100</h1>
                  </div>
                  <div class="col-md-3  bg-warning text-center  mx-3 mt-3 p-3 rounded ">
                  <h6 class="text-success">Total Passed Students</h6>
                  <h1 class="text-secondary">50</h1>
                  </div>
                  <div class="col-md-3  bg-warning text-center  mx-3 mt-3 p-3 rounded">
                  <h6 class="text-success">Total Failed Students</h6>
                  <h1 class="text-secondary">50</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
 



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>












    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.0/chart.min.js" integrity="sha512-qKyIokLnyh6oSnWsc5h21uwMAQtljqMZZT17CIMXuCQNIfFSFF4tJdMOaJHL9fQdJUANid6OB6DRR0zdHrbWAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>
</html>