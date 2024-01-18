<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>

    <style>
    body {

        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
    }



    input[type="radio"] {
        margin-right: 5px;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>

    <form action="process_form.php" method="post">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname"><br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname"><br><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label><br><br>

        <label for="class">Class:</label>
        <select id="class" name="class">
            <option value="1">Class 1</option>
            <option value="2">Class 2</option>
            <!-- Add more class options as needed -->
        </select><br><br>

        <label for="rollnumber">Roll Number:</label>
        <input type="text" id="rollnumber" name="rollnumber"><br><br>

        <label for="batch">Batch:</label>
        <select id="batch" name="batch">
            <option value="A">Batch A</option>
            <option value="B">Batch B</option>
            <!-- Add more batch options as needed -->
        </select><br><br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>