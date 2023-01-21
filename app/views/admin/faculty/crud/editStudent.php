<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANHS Add Record</title>
</head>
<body>
    <form action="<?=site_url('Admin/updateStudent')?>" method="post">
        <div class="studentProfile">
                <h1>Edit student Record</h1>
                <?php if(isset($errors)):?>
                    <?php foreach($errors as $error):?>
                        <p><?=$error?></p>
                   <?php endforeach;?>            
                <?php endif;?>
                <br>
                <label>LRN:</label>
                <input type="hidden" name="studentID" value="<?=$student['studentID']?>" >
                <input type="text" name="stud_lrn" value="<?=$student['stud_lrn']?>" placeholder="ex.12131321121" id="">
                <label>Name:</label>
                <input type="text" name="stud_fname"  value="<?=$student['stud_fname']?>"placeholder="ex.Juan" id="">
                <input type="text" name="stud_mname"  value="<?=$student['stud_mname']?>" placeholder="ex.Dela" id="">
                <input type="text" name="stud_lname"   value="<?=$student['stud_lname']?>"placeholder="ex.Cruz" id="">
                <br>
                <label>Age</label>
                <input type="text" name="stud_age"   value="<?=$student['stud_age']?>"placeholder="ex.21 " id="">
                <br>
                <label>Birthday</label>
                <input type="date" name="stud_birthday"   value="<?=$student['stud_birthday']?>"placeholder="ex.21 " id="">
                <br>
                <label>Gender:</label>
                <br>
                <input type="text" name="stud_gender"  value="<?=$student['stud_gender']?>"id="">
                <br>
                <br>
                <label>Address</label>
                <input type="text" name="stud_address" value="<?=$student['stud_address']?>" placeholder="ex.Naujan" id="">
                <br>
                <label>Year Level</label>
                <br>
                <input type="text" value="<?=$student['stud_section']?>"  name="stud_section" >
                <br>
                <label>Section:</label>
                <input type="text" name="stud_yearlevel" value="<?=$student['stud_yearlevel']?>" placeholder="ex.Mahogany " id="">
        </div>
        <div class="student school information">
                <label>Username:</label>
                <input type="text" name="stud_username" value="<?=$student['stud_username']?>" placeholder="ex.12131321121" id="">
                <br>
                <label>Password:</label>
                <input type="password" name="stud_password" value="<?=$student['stud_password']?>" placeholder="ex.12131321121" id="">
                <br>
        </div>
        <br>
        <input type="submit" value="Update record">
        <a href="<?=site_url('Admin/studentIndex')?>">Back</a>
    </form>
</body>
</html>