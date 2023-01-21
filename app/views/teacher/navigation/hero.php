<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ANHS| DASHBOARD </title>
  <link rel="stylesheet" href="<?=base_url()?>/public/css/teacher/hero.css">
  
</head>
<body>
  <div class="main">
  <div class="sidebar">
    <div class="active-user">
      <div class="img"></div>
      
    </div>
    <nav>
      <ul>
        <li>
          <form action="" method="post">
            <input type="hidden">
            <input type="submit" value="Home">
          </form>
        </li>
        <li>
          <form action="" method="post">
            <input type="hidden">
            <input type="submit" value="My Students">
          </form>
        </li>
      </ul>
    </nav>
   <div class="exit">
      <a href="">Logout</a>
   </div>
  </div>
  <div class="body">
    <div class="table">
      <table>
        <thead>
          <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>la</td>
          </tr>
        </tbody>
      </table>
    </div>
    <form action="" method="post">
      <input type="hidden">
      <input type="submit" value="Add New Student">
    </form>
    <form action="" method="post">
      <input type="hidden">
      <input type="submit" value="Export">
    </form>
    
  </div>
  </div>
  
</body>
</html>