<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Calendar</title>
    <link rel="stylesheet" href="assets/fullcalendar.css" />
    <link rel="stylesheet" href="assets/bootstrap.css" />
    <script src="assets/jquery.min.js"></script>
    <script src="assets/jquery-ui.min.js"> </script>
    <script src="assets/moment.min.js"> </script>
    <script src="assets/fullcalendar.min.js"> </script>
    <link rel="stylesheet" href="stys.css">
    <style>
    body {
        /* background-color : #dcc8b0; */
        background-image: url('4.png');
        background-size: cover;
    }
    </style>
</head>
<body style="background-color:#deb887">
    <br>
    <h2 class="text-center"><a href="#"> Planner Events</a></h2>

<br>
    <div class="container">
        <div id="calendar"></div>
    </div>

    <script>
        $(document).ready(function(){
            var calendar =$('#calendar').fullCalendar({
                editable : true,
                header :{
                    left : 'prev, next, today',
                    center :'title',
                    right :'month, agendaWeek, agendaDay'
                },

                events : 'tampil.php',
            });
        });
        </script>
            <br>
    <br>
        <div class="tutup"><center><a href="menu_staff.php"> &nbsp; Back to homepage!</a>
        <center></div>
</body>
</html>