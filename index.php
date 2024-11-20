<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 class style="color: aliceblue;">Student Registration Form</h2>
    <form id="studentForm" action="crud.php" method="POST">

        <label for="name">Student Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="18" max="50" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required> Male<br>
        <input type="radio" id="female" name="gender" value="Female" required> Female<br>
        <input type="radio" id="other" name="gender" value="Other" required> Other<br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br>

        <button class="btn btn-success btn-block" type="submit" name="create">Register</button>
    </form>
    <script src="script.js"></script>
</body>
</html>
