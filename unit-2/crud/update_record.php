<?php
    //including the configuration file.
    include 'database_configuration.php';

    // //If something has been posted from the form
    if($_POST){
        // print_r($_POST);
        $full_name = $_POST['full_name'];
        $faculty = $_POST['faculty'];
        $address = $_POST['address'];
        $mobile_number = $_POST['mobile_number'];
        $college = $_POST['college'];
        $id = $_POST['id'];
        $sql = "UPDATE users SET full_name = '$full_name',
        "." faculty = '$faculty', address = '$address',".
        "mobile_number = '$mobile_number', college = '$college' 
        WHERE id = $id";
        if(mysqli_query($conn, $sql)){
            echo "Record updated successfully.";
            mysqli_close($conn);
            header('Location: http://localhost/BCA-2076/unit-4/crud/fetch_records.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    if($_GET){
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $student = array(
                    "id" => $row['id'],
                    "full_name" => $row['full_name'],
                    "course" => $row['faculty'],
                    "address" => $row['address'],
                    "mobile_number" => $row['mobile_number'],
                    "college" => $row['college'],
                );
            }
        } else {
          echo "No records found!!";
          exit;
        }
        // print_r($student);exit;
    }
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Fieldset and label example
    </title>
  </head>
  <body>
    <script>
      function validate() {
        var fullName = document.getElementById("full-name").value;
        if (fullName == "") {
          alert("Full name is required.");
          return false;
        }
        return true;
      }

    </script>
    <form
      method="POST"
      onsubmit="return validate()"
    >
      <fieldset>
        <legend>
          <h2>Personal information</h2>
        </legend>
        <table>
          <tr>
            <td>
              Full Name
            </td>
            <td>
              <input type="hidden" name="id" value="<?=$student['id']?>" />
              <input
                type="text"
                placeholder="Enter your full name"
                name="full_name"
                id="full-name"
                value = "<?=$student['full_name']?>"
                required
              />
            </td>
          </tr>
          <tr>
            <td>College</td>
            <td>
              <input
                type="college"
                name="college"
                value="<?=$student['college']?>"
                placeholder="Enter your college"
              />
            </td>
          </tr>
          <tr>
            <td>
              Address
            </td>
            <td>
              <input type="text" name="address" value="<?=$student['address']?>"
              placeholder="Enter your address" />
            </td>
          </tr>
          <tr>
            <td>Mobile number:</td>
            <td>
              <input
                type="tel"
                pattern="977-9[0-9]{9}"
                placeholder="Enter your mobile number"
                value="<?=$student['mobile_number']?>"
                name="mobile_number"
              />
            </td>
          </tr>
          <tr>
            <td>Course</td>
            <td>
            <select name="faculty">
                <option value="BCA" <?=$student["course"]=="BCA" ? "selected" : ""?>>Bachelors in Computer Applications</option>
                <option value="BIM" <?=$student["course"]=="BIM" ? "selected" : ""?>>Bachelors in Information Management</option>
                <option value="B.Sc CSIT" <?=$student["course"]=="B.Sc CSIT" ? "selected" : ""?>>Computer Science & Information Technology</option>
                <option value="B.E(Computer)" <?=$student["course"]=="B.E(Computer)" ? "selected" : ""?>>Computer Engieering</option>
                <option value="BIT" <?=$student["course"]=="BIT" ? "selected" : ""?>>Bachelors in Information Technology</option>
            </select>
            </td>
          </tr>
          <tr>
            <td>
              <button type="submit">Submit</button>
            </td>
            <td>
                <a href="http://localhost/BCA-2076/unit-4/crud/fetch_records.php"> Go back</a>
            </td>
          </tr>
        </table>
      </fieldset>
    </form>
  </body>

  <style>
    form {
      width: 500px;
      margin-left: auto;
      margin-right: auto;
    }
    input {
      width: 270px;
    }
    textarea {
      width: 270px;
      height: 60px;
    }
  </style>
</html>
