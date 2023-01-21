<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ANHS Add Faculty</title>
</head>
<body>
    <div class="Faculty Profile">
        <form action="<?=site_url('Admin/addFaculty')?>" id="addform" method="post">
            <div class="faculty Personal Information">
                <fieldset>
                <?php 
                    if(isset($errors))
                        foreach($errors as $error) {echo $error;}
                    ?>
                                <h1>Employee Personal Profile</h1>
                                <label>Faculty No:</label>
                                    <input type="text" name="facultyNo" placeholder="ex. 121313131"  id="" >
                                    <br>
                                <label>Name</label>
                                    <input type="text" name="fac_fname" placeholder="ex. Darlene Angel"  id="">
                                    <input type="text" name="fac_mname" placeholder="ex. Gargullo"  id="" >
                                    <input type="text" name="fac_lname" placeholder="ex. Fajarilto"  id="" >
                                <br>
                                <label>Age</label>
                                    <input type="text" name="fac_age" placeholder="ex. Darlene Angel"  id="" >
                                <br>
                                <label>Birthday</label>
                                    <input type="date" name="fac_birthday" >
                                    <br>
                                <label>Gender</label><br>
                                    <input type="text" name="fac_gender" placeholder="ex.female"  id="" >
                                <br>
                                <label>Username</label>
                                    <input type="text" name="fac_username" placeholder="ex.darleneganda123"  id="" >
                                <br>
                                <label>Password</label>
                                    <input type="text" name="fac_password" placeholder="ex. ************"  id="" >
                                <br>
                                <br>
                                <label>Advisory</label>
                                <br>
                                    <input type="text" name="fac_yearlevel" placeholder="ex.7"  id="" >
                                    <input type="text" name="fac_advisory" placeholder="ex. Section"  id="" >
                                <br>
                                <br>
                                <input type="submit" value="Add record">
                                <a href="<?=site_url('Admin/facultyIndex')?>">Back</a>
                            </div>
                </fieldset>              
        </form>
    </div>
</body>
</html>