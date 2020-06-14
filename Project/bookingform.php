<?php
/*session_start();
if (isset($_SESSION['login']) === false) {
    header('Location:index.php');
}*/
if (isset($_POST['book'])) {
    include 'connection.php';
    $Title = mysqli_real_escape_string($Connection, $_POST['title']);
    $Start_Time = mysqli_real_escape_string($Connection, $_POST['start']);
    $End_Time = mysqli_real_escape_string($Connection, $_POST['end']);

    $Query = "INSERT into tblslot (title,start,end) values ('$Title','$Start_Time','$End_Time')";
    $result = mysqli_query($Connection, $Query);
    header("Location:timeslot.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Slot</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center booking-form">
        <form method="post" action="">
            <h1>Slot booking</h1></br>
            <table>
                <tr>

                    <th>Title</th>
                    <td><input type="text" name="title" id="fn1" title="enter your slot" placeholder="enter your slot requirement" required /></td>
                </tr>
                <tr>

                <tr>
                    <th>Start Time</th>
                    <td><input type="datetime" name="start" placeholder="enter your time" required /></td>
                </tr>
                <tr>
                <tr>
                    <th>End Time</th>
                    <td><input type="datetime" name="end" placeholder="enter your end time" required /></td>
                </tr>

                <td colspan="2" align="center"><input type="submit" name='book' value="book" />

                </td>
                </tr>
            </table>
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<style>
    .booking-form {
        background-image: url('pic1.jpg');
        padding-top: 10%;
        height: 800px;
        position: fixed;
        width: 100%;
    }
</style>