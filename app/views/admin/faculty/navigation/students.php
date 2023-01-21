<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Records</title>
</head>
<body>
    <h1>Aurora National High School</h1>
    <h3>Student Records</h3>
    <ul>
         <li><a href="<?=site_url('Admin/dashboard')?>">Dashboard</a></li>                 
        <li>
              <!-- dropdown  -->
            <button>ANHS Records</button>
            <ul>
            <li><a href="<?=site_url('Admin/facultyIndex')?>">Faculty</a></li>
            <li><a href="<?=site_url('Admin/studentIndex')?>">Students</a></li>
            </ul>
            
        </li>       
        <!-- dropdwon -->       
        <li>
            <button>Add Records</button>
            <ul>
                <li><a href="<?=site_url('Admin/addFacultyIndex')?>">Add faculty</a></li>
                <li><a href="<?=site_url('Admin/addStudentIndex')?>">Add student</a></li>
            </ul>
        </li>
        <!-- !drowpdown -->
        <li><a href="<?=site_url('Admin/facultyIndex')?>"></a></li>
    </ul>

<table>
    <tr>
        <th>ID</th>
        <th>LRN</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Gender</th>
        <th>Year Level</th>
        <th>Section Class</th>
        <th>Role</th>
        <th>Username</th>
        <th>Password</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php foreach($stud as $student):?>
        <tr>
            <td><?=$student['studentID']?></td>
            <td><?=$student['stud_lrn']?></td>
            <td><?=$student['stud_fname']?></td>
            <td><?=$student['stud_mname']?></td>
            <td><?=$student['stud_lname']?></td>
            <td><?=$student['stud_age']?></td>
            <td><?=$student['stud_birthday']?></td>
            <td><?=$student['stud_gender']?></td>
            <td><?=$student['stud_yearlevel']?></td>
            <td><?=$student['stud_section']?></td>
            <td><?=$student['stud_role']?></td>
            <td><?=$student['stud_username']?></td>
            <td><?=$student['stud_password']?></td>
            <td><?=$student['status']?></td>
            <td>
                <form action="<?=site_url('Admin/editStudent')?>" method="post">
                    <input type="hidden" name="studentID" value="<?=$student['studentID']?>">
                    <input type="submit" value="Edit">
                </form>
            
            </td>
            <td>
            <form action="<?=site_url('Admin/viewStudent')?>" method="post">
                    <input type="hidden" name="studentID" value="<?=$student['studentID']?>">
                    <button type="submit"">View</button>
                </form>
            </td>
            <td>
            <form action="<?=site_url('Admin/deleteStudentRecord')?>" method="post">
                    <input type="hidden" name="studentID" value="<?=$student['studentID']?>">
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach;?>
</table>
    
</body>
</html>