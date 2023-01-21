<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades</title>
</head>
<body>
    <h1>
        Add grades
    </h1>

    <form action="<?=site_url('Admin/viewStudent')?>" method="post">
        <h4>LRN :<?=$stud_profile['stud_lrn']?></h4>
            <p>Name: <?=$stud_profile['stud_fname']?> <?=$stud_profile['stud_mname']?> <?=$stud_profile['stud_lname']?></p>
            <p>Section: <?=$stud_profile['stud_yearlevel']?>-<?=$stud_profile['stud_section']?></p>
        <br> 
     
            
            <table>
                <thead>
                    <tr>
                        <th>Subjects</th>
                        <th>Quarter I</th>
                        <th>Quarter II</th>
                        <th>Quarter III</th>
                        <th>Quarter IV</th>         
                    </tr>

                </thead>
                <tbody>
                <?php foreach($ginfo as $gradeData):?>
                    <tr>

                        <td>
                        <input type="hidden" value="<?=$stud_profile['studentID']?>" name="studentID   " id="">
                            <input type="hidden"  name="lrn" id="" value="<?=$gradeData['lrn']?>">
                            <input type="text" name="subject" id="" value=" <?=$gradeData['subject']?>">
                        </td>
                        <td>
                            <input type="text" name="quarter1" id="" value="<?=$gradeData['quarter1']?>">
                        </td>
                        <td>
                            <input type="text" name="quarter2" id="" value="<?=$gradeData['quarter2']?>">
                        </td>
                        <td>
                            <input type="text" name="quarter3" id=""value="<?=$gradeData['quarter3']?>">
                        </td>
                        <td>
                            <input type="text" name="quarter4" id="" value="<?=$gradeData['quarter4']?>">
                        </td>               
                 </tr>
                <?php endforeach;?>

                </tbody>
                
         
               
            </table>
            <input type="submit" value="Save">
         
               
    </form>


    <form action="" method="get">
        <input type="hidden" name="studentID"  value="<?=site_url('Admin/viewStudent')?>">
    </form>
</body>
</html>