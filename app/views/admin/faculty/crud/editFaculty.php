<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ANHS Edit Faculty</title>
</head>
<body>
    <div class="Faculty Profile">
        <form action="<?=site_url('Admin/updatetFacultyData')?>" id="addform" method="post">
            <div class="faculty Personal Information">
                <fieldset>
                <?php 
                    if(isset($errors))
                        foreach($errors as $error) {echo $error;
                        }?>
                                <h1>Employee Personal Profile</h1>
                                <label>Faculty No:</label>
                                    <input type="hidden" name="facultyID" value="<?=$faculty['facultyID']?>">
                                    <input type="text" name="facultyNo" placeholder="ex. 121313131"  id=""  value="<?=$faculty['facultyNo']?>">
                                    <br>
                                <label>Name</label>
                                    <input type="text" name="fac_fname" placeholder="ex. juan"  id="" value="<?=$faculty['fac_fname']?>">
                                    <input type="text" name="fac_mname" placeholder="ex. Gargullo"  id="" value="<?=$faculty['fac_mname']?>" >
                                    <input type="text" name="fac_lname" placeholder="ex. Fajarilto"  id="" value="<?=$faculty['fac_lname']?>" >
                                <br>
                                <label>Age</label>
                                    <input type="text" name="fac_age" placeholder="ex. Darlene Angel"  id="" value="<?=$faculty['fac_age']?>"  >
                                <br>
                                <label>Birthday</label> 
                                    <input type="date" name="fac_birthday" value="<?=$faculty['fac_birthday']?>"  >
                                    <br>
                                <label>Gender</label><br>
                                    <input type="text" name="fac_gender" placeholder="ex.female"  id="" value="<?=$faculty['fac_gender']?>"  >
                                <br>
                                <label>Username</label>
                                    <input type="text" name="fac_username" placeholder="ex.darleneganda123"  id="" value="<?=$faculty['fac_username']?>">
                                <br>
                                <label>Password</label>
                                    <input type="text" name="fac_password" placeholder="ex. ************"  id="" value="<?=$faculty['fac_password']?>">
                              <br>
                                <label>Advisory</label>
                                <br>
                                    <input type="text" name="fac_yearlevel" placeholder="ex.7"  id="" value="<?=$faculty['fac_yearlevel']?>"  >
                                    <input type="text" name="fac_advisory" placeholder="ex. Section"  id="" value="<?=$faculty['fac_advisory']?>">
                                <br>
                                <br>
                                <input type="submit" value="Update record">
                                <a href="<?=site_url('Admin/facultyIndex')?>">Back</a>
                            </div>

                </fieldset>              
        </form>
    </div>
</body>
</html>