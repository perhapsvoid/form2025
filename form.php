<!DOCTYPE html>
<!-- Code by Dhenz Sherwin G. Cuenca, BSCS-3A -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <!-- To gather data from the user, and is to be manipulated in the controller -->
    <form action = "controller_form.php" method = "POST">

        <div>
        <h2>Registration Form</h2>
        </div>
        <div>
            <!-- This textfield is to take the Firstname -->
            <label for="fname">First Name</label><br>
            <input type="text" id="fname" name="fname" required><br>
        </div>
        <div>
            <!-- This textfield is to take the Age -->
            <label for="age">Age</label><br>
            <input type="text" id="age" name="age" required><br>
        </div>
        <div>
            <!-- This selection box is to take the gender -->
            <label for="gender">Gender</label><br>
            <select name="gender" id="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select> <br>
        </div>
        <div>
            <!-- This textfield is to take the quote -->
            <label for="quote">Quote in life</label><br>
            <input type="textarea" id="quote" name="quote" required><br><br>
        </div>
        <div>
            <!-- This is where you submit or reset the form -->
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>
</html>