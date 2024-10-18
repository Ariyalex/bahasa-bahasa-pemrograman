<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Users</title>
</head>
<body>
    <a href="praktikum8.php">go to home</a>
    <br/><br/>
    <form action="add.php" method="post" name="forml">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <?php
        if (isset($_POST["Submit"])) {
            $name = $_POST["name"];
            $mobile = $_POST["mobile"];
            $email = $_POST["email"];
            include_once("config.php");
            $result = mysqli_query($mysqli, "INSERT INTO users(name, mobile, email) VALUES('$name', '$mobile', '$email')");
            echo "User added successfully. <a href='praktikum8.php'>View Users</a>";
        }
    ?>
</body>
</html>