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
    <h3>Faculty Records</h3>
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
            <th>Faculty No</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Gender</th>
            <th>Assign year Level</th>
            <th>Advisory Class</th>
            <th>Role</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
            <?php foreach($faculty as $teacher):?>
                    <tr>
                        <td><?=$teacher['facultyID']?></td>
                        <td><?=$teacher['facultyNo']?></td>
                        <td><?=$teacher['fac_fname']?></td>
                        <td><?=$teacher['fac_mname']?></td>
                        <td><?=$teacher['fac_lname']?></td>
                        <td><?=$teacher['fac_age']?></td>
                        <td><?=$teacher['fac_birthday']?></td>
                        <td><?=$teacher['fac_gender']?></td>
                        <td><?=$teacher['fac_yearlevel']?></td>
                        <td><?=$teacher['fac_advisory']?></td>
                        <td><?=$teacher['fac_role']?></td>
                        <td><?=$teacher['status']?></td>
                        <td>
                            <form action="<?=site_url('Admin/editFacultyData')?>" method="post">
                                <input type="hidden" name="facultyID" value="<?=$teacher['facultyID']?>">
                                <input type="submit" value="Edit">
                            </form>
                        </td>
                        <td>
                        <form action="<?=site_url('Admin/deleteFaculty')?>" method="post">
                                <input type="hidden" name="facultyID" value="<?=$teacher['facultyID']?>">
                                <input type="submit"onclick="return confirm('Are you sure?')" value="Delete">
                            </form>
                        </td>
                    </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>