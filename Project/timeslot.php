<?php
/*session_start();
if (isset($_SESSION['login']) === false) {
    header('Location:index.php');
}*/




include 'connection.php';
$Query = "SELECT title,start,end FROM tblslot";
$data = mysqli_query($Connection, $Query);
$emparray = array();
while ($row = mysqli_fetch_assoc($data)) {
    $emparray[] = $row;
}

?>

<html>

<head>
    <meta charset='utf-8' />
    <link href='../project/core/main.css' rel='stylesheet' />
    <link href='../project/daygrid/main.css' rel='stylesheet' />
    <link href='../project/timegrid/main.css' rel='stylesheet' />
    <script src='../project/core/main.js'></script>
    <script src='../project/interaction/main.js'></script>
    <script src='../project/daygrid/main.js'></script>
    <script src='../project/timegrid/main.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['interaction', 'dayGrid', 'timeGrid'],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                defaultDate: '2020-06-12',
                navLinks: true, // can click day/week names to navigate views
                selectable: true,
                selectMirror: true,
                select: function(arg) {
                    window.location.href = "bookingform.php";
                    calendar.unselect()
                },
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: <?php echo json_encode($emparray) ?>


            });

            calendar.render();
        });
    </script>
    <style>
        body {
            margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <a class="btn" href="index.php">Log out</a>
    <div id='calendar'></div>

</body>

</html>