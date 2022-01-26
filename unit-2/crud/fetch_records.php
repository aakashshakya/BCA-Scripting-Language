<?php
  include "database_configuration.php"; //include is used to pull the database_configuration.php file 

  //Query to fetch student information
  $sql = "SELECT * FROM users";
  
  //Fetching result from database
  $result = mysqli_query($conn, $sql);
  
  //Checking if there is data saved in the students table.
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      $i = 0;
      // Looping through the results
      while($row = mysqli_fetch_assoc($result)) {
        // $students[$i] = $row; //You can also do this. This is short and simple
        $students[$i] = array(
          "id" => $row['id'],
          "full_name" => $row['full_name'],
          "mobile_number" => $row['mobile_number'],
          "course" => $row['faculty'],
          "college" => $row['college'],
          "address" => $row['address'],
        );
        $i++;
      }
  } 
  //connection close
  mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Fetch all students information
    </title>
  </head>
  <body>
    <a href="student_form.html" class="move-right"><h3>Add new student</h3></a>
    <table>
        <tr>
            <th>Full Name</th>
            <th>Address</th>
            <th>Course</th>
            <th>College</th>
            <th>Mobile Number</th>
            <th>Actions</th>
        </tr>
        <?php foreach($students as $student){ ?>
        <tr>
            <td><?=$student['full_name']?></td>
            <td><?=$student['address']?></td>
            <td><?=$student['course']?></td>
            <td><?=$student['college']?></td>
            <td><?=$student['mobile_number']?></td>
            <td>
                <a href="http://localhost/BCA-2076/unit-4/crud/update_record.php?id=<?=$student['id']?>">Update</a>
                <a href="http://localhost/BCA-2076/unit-4/crud/delete_record.php?id=<?=$student['id']?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
  </body>

  <style>
    table {
      width: 900px;
      margin-left: auto;
      margin-right: auto;
      border-collapse: collapse;
    }
    table tr td {
        text-align: center;
    }
    table, th, td {
        border: 1px solid black;
    }
    .move-right{
        float: right;
    }
  </style>
</html>
