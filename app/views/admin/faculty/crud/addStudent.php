<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANHS Add Record</title>
</head>
<body>
    <form action="<?=site_url('Admin/addStudent')?>" method="post">
                <div class="studentProfile">
                    <h1>Add student Record</h1>
                        <?php if(isset($errors)):?>
                            <?php foreach($errors as $error):?>
                                <p><?=$error?></p>
                        <?php endforeach;?>
                    
                <?php endif;?>
                <br>
                <label>LRN:</label>
                <input type="text" name="stud_lrn" placeholder="ex.12131321121" id="">
                <label>Name:</label>
                <input type="text" name="stud_fname" placeholder="ex.Juan" id="">
                <input type="text" name="stud_mname" placeholder="ex.Dela" id="">
                <input type="text" name="stud_lname" placeholder="ex.Cruz" id="">
                <br>
                <label>Age</label>
                <input type="text" name="stud_age" placeholder="ex.21 " id="">
                <br>
                <label>Birthday</label>
                <input type="date" name="stud_birthday" placeholder="ex.21 " id="">
                <br>
                <label>Gender:</label>
                <br>
                <input type="text" name="stud_gender" id="">
                <br>
                <br>
                <label>Address</label>
                <input type="text" name="stud_address" placeholder="ex.Naujan" id="">
                <br>
                <label>Year Level</label>
                <br>
                <input type="text" name="stud_yearlevel" >
                <br>
                <label>Section:</label>
                <input type="text" name="stud_section" placeholder="ex.Mahogany " id="">
                </div>
                <div class="student school information">
                <label>Username:</label>
                <input type="text" name="stud_username" placeholder="ex.12131321121" id="">
                <br>
                <label>Password:</label>
                <input type="password" name="stud_password" placeholder="ex.12131321121" id="">
             
            </div>
        <br>
        <input type="submit" value="Add Records">
        <a href="<?=site_url('Admin/studentIndex')?>">Back</a>
    </form>
</body>
</html>