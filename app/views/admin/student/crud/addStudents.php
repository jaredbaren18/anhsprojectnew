<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANHS Add Record</title>
</head>
<body>
    <form action="<?=site_url('Faculty/addRecords')?>" method="post">
        <div class="studentProfile">
                <h1>Student Personal Information</h1>
                <br>
                <label>Name:</label>
                <input type="text" name="fname" placeholder="ex.Darlene Angel" id="">
                <input type="text" name="mname" placeholder="ex.Gargullo" id="">
                <input type="text" name="lname" placeholder="ex.Fajarito" id="">
                <br>
                <label>Age</label>
                <input type="text" name="age" placeholder="ex.21 " id="">
                <br>
                <label>Birthday</label>
                <input type="date" name="birthday" placeholder="ex.21 " id="">
                <br>
                <label>Gender:</label>
                <br>
                <label>Male:</label>
                <input type="radio" name="gender" value="Male">
                <label>Female:</label>
                <input type="radio" name="gender" value="Female"id="">
                <br>
                <br>
                <label>Address</label>
                <input type="text" name="address" placeholder="ex.Naujan" id="">
                <br>
                <label>Year Level</label>
                <br>
                <label>7</label>
                <input type="radio" name="yearlevel" value="7">
                <label>8</label>
                <input type="radio" name="yearlevel" value="8">
                <label>9</label>
                <input type="radio" name="yearlevel" value="9">
                <label>10</label>
                <input type="radio" name="yearlevel" value="10">
                <br>
                <label>Section:</label>
                <input type="text" name="section" placeholder="ex.Mahogany " id="">
        </div>
        <div class="student school information">
                <h1>Student School Information</h1>
                <br>
                <label>LRN:</label>
                <input type="text" name="lrn" placeholder="ex.12131321121" id="">
                <br>
                <label>Username:</label>
                <input type="text" name="username" placeholder="ex.12131321121" id="">
                <br>
                <label>Password:</label>
                <input type="password" name="password" placeholder="ex.12131321121" id="">
                <br>
        </div>
        <br>
        <input type="submit" value="Add Records">
    </form>
</body>
</html>