<?php

if(isset($_POST['Register'])){
    include 'connection.php';
    $Name=mysqli_real_escape_string($Connection,$_POST['Name']);  
    $Mobile=mysqli_real_escape_string($Connection,$_POST['Mobile']);
    $Email=mysqli_real_escape_string($Connection,$_POST['Email']);
    
    $Enter_Password=mysqli_real_escape_string($Connection,$_POST['Enter_Password']);
    $Confirm_Password=mysqli_real_escape_string($Connection,$_POST['Confirm_Password']);
    if($Enter_Password!==$Confirm_Password)
    echo "<script>alert('Passwords not Matched');</script>";
    else{
    $Query="INSERT into tblUserReg (Name,Mobile,Email,Enter_Password) values ('$Name','$Mobile','$Email','$Enter_Password')";
    $result=mysqli_query($Connection,$Query); 
    if($result)
    {
    echo '<script>alert("Login success");
    window.location.href="index.php";</script>';
    
    }
    else
    echo '<script>alert( mysqli_error($Connection))</script>';
    }
}
?>
<html>
<head>
<title>
Registration form
</title>
<meta name="viewport" content="width=device-width,initital-scale=1">
<link rel="stylesheet" href="css/styleforregistration.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
<div class="loginbox">
<form method="post" action="">
<h1>User registration</h1></br>
<table >
<tr>

<th>Name</th>
<td><input type="text" name="Name" id="fn1"  title="enter your name" placeholder="enter your name" required/></td>
</tr>
<tr>



<tr>
<th>Mobile</th>
<td><input type="number" name="Mobile" placeholder="enter your number" required/></td>
</tr>
<tr>
<tr>
<th>Email</th>
<td><input type="email" name="Email" placeholder="enter your email" required/></td>
</tr>
<tr>
<th>Enter_Password</th>
<td><input type="text" name="Enter_Password" placeholder="Password"/></td>
</tr>
<tr>
<th>Confirm_Password</th>
<td><input type="text" name="Confirm_Password" placeholder="Password"/></td>
</tr>


<td colspan="2" align="center"><input type="submit" name='Register' value="Register "/>

</td>
</tr>
</table>
</form>
</div>
</body>
</html>