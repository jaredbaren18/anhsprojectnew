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
    <h3>Dashboard</h3>
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
            <!-- Total number of users  -->
            <p>Overall counts</p>
            <?=$users['all']?>
            <!-- Students counts  -->
            <p>Total Students</p>
            <?=$students['studCount']?>
            <!-- Faculty counts  -->
            <p>Total Faculty</p>
            <?=$faculty['facCount']?>
    </body>
</html>