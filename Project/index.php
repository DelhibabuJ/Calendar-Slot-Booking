<?php
session_start();
unset($_SESSION['login']);
if (isset($_POST['Submit'])) {
    include 'connection.php';
    $username = mysqli_real_escape_string($Connection, $_POST['Username']);
    $password = mysqli_real_escape_string($Connection, $_POST['Password']);

    $Query = "SELECT Name FROM tbluserreg WHERE Email='$username' AND Enter_Password='$password'";
    $result = mysqli_query($Connection, $Query);
    if (mysqli_num_rows($result) > 0) {
        echo 'Login Success';
        header('Location:timeslot.php');
        // $_SESSION['login']='success';
    } else
        echo "Login Failed";
}
?>
<html>

<head>
    <title>Calendar Slot Booking </title>
    <link rel="stylesheet" type="text/css" href="css/login.css">

<body>
    <div class="loginbox">
        <img src="Images/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method="post" action="">
            <p>Username</p>
            <input type="text" name="Username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="Password" placeholder="Enter Password">
            <input type="submit" name="Submit" value="Login">
            <!-- <a href="#">Lost your password?</a><br> -->
            <a href="reg.php">Don't have an account? Register Here</a>
        </form>

    </div>

</body>
</head>

</html>