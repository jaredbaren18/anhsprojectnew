<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Profile</title>
</head>
<body>

<!-- naka card ang profile  -->
<h1>Student Profile</h1>

<p>LRN: <?=$profile['stud_lrn']?></p>
<p>First Name: <?=$profile['stud_fname']?></p>
<p>Middle Name: <?=$profile['stud_mname']?></p>
<p>Last Name: <?=$profile['stud_lname']?></p>
<p>Age: <?=$profile['stud_age']?></p>
<p>Gender: <?=$profile['stud_gender']?></p>
<p>Birthday: <?=$profile['stud_birthday']?></p>
<p>Address: <?=$profile['stud_address']?></p>
<p>Year Level: <?=$profile['stud_yearlevel']?></p>
<p>Section: <?=$profile['stud_section']?></p>
<p>Role: <?=$profile['stud_role']?></p>
<p>Username: <?=$profile['stud_username']?></p>
<p>Password: <?=$profile['stud_password']?></p>
<p>Status: <?=$profile['status']?></p>

<h1>Student Grades</h1>
<table>
  <thead>
    <tr>
      <th>Subjects</th>
      <th>Quarter 1</th>
      <th>Quarter 2</th>
      <th>Quarter 3</th>
      <th>Quarter 4</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>

</table>
<form action="<?=site_url('Admin/editGrades')?>" method="post">
<input type="hidden" name="studentID" value="<?=$profile['studentID']?>">
<input type="hidden" name="stud_lrn" value="<?=$profile['stud_lrn']?>">
  <input type="submit" value="Edit Grades">
</form>
  
</body>
</html>