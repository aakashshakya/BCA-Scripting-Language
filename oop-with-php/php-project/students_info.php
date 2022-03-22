<?php
include "Students.php";
$studentsObject = new Students();
$students = $studentsObject->get_students();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Students</title>
</head>

<body>
    <table>
        <tr>
            <th>Full Name</th>
            <th>DOB</th>
            <th>Contact</th>
        </tr>
        <?php foreach($students as $student){ ?>
        <tr>
            <td><?=$student->full_name?></td>
            <td><?=$student->dob?></td>
            <td><?=$student->contact_number?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>