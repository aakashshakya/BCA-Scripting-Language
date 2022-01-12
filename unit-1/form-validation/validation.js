function validateForm() {
    var firstName = document.getElementById('first-name').value;
    var lastName = document.getElementById('last-name').value;
    var email = document.getElementById('email').value;
    var dateOfBirth = document.getElementById('date-of-birth').value;
    var country = document.getElementById('country').value;
    var fatherName = document.getElementById('father-name').value;
    var hsebPercentage = document.getElementById('hseb-percentage').value;


    // task
    var gender = document.getElementById('gender').value;
    var address = document.getElementById('address').value;
    var mother_name = document.getElementById('mother-name').value;
    var occupation = document.getElementById('occupation').value;
    var district_level_percentage = document.getElementById('district_level_percentage').value;
    var see = document.getElementById('see').value;

    // validating the data from task

    if (firstName == '') {
        alert('First name cannot be empty.');
        return false;
    }
    if (lastName == '') {
        alert('Last name cannot be empty.');
        return false;
    }

    if (dateOfBirth == '') {
        alert('Date of birth cannot be empty.');
        return false;
    }

    if (email == '') {
        alert('Email field cannot be empty.');
        return false;
    } else {
        //This is the regular expression for the valid email address
        const regularExpression = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        /*
            regularExpression.test(String(email).toLowerCase())
            The .test method is used to validate the string if it matches the given regular expression and returns boolean value.
            If it dosen't match the regular expression, it returns false otherwise true.
        */
        if (!regularExpression.test(String(email).toLowerCase())) {
            alert('Invalid email format. Please use valid email format.');
            return false;
        }
    }

    if (country == '') {
        alert('Please select a country');
        return false;
    }
    // task 2
    if (address == '') {
        alert("Address can't be empty!!");
        return false;
    }
    if (fatherName == '') {
        alert("Father's name cannot be empty.");
        return false;
    }
    // task 3
    if (mother_name == '') {
        alert("mother's name can't be empty");
        return false;
    }
    // task 4
    if (occupation == '') {
        alert("Occupation can't be empty");
        return false;
    }
    // task 5 i
    if (district_level_percentage == '') {
        alert("District level can't be empty");
        return false;
    }
    // task 5 ii
    if (district_level_percentage < 60) {
        alert("Your District Level Percentage doesnot reach required precentage.");
        return false;
    }
    // task 6 i
    if (see == '') {
        alert("See percentage can't be empty");
        return false;
    }
    // task 6 ii
    if (see < 50) {
        alert("Your SEE Level Percentage doesnot reach required precentage.");
        return false;
    }

    if (hsebPercentage < 40) {
        alert('You are not eligible to study BCA.');
        return false;
    }

    document.getElementById('personal-information-form').submit();
}