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
    <style type="text/css">
    body {
        /* background-color : #dcc8b0; */
        background-image: url('4.png');
        background-size: cover;
    }
    </style>
</head>
<!-- <body style="background-color:#deb887"> -->
<body>
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
                //edit kalender
                selectable : true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    var title = prompt("What's our plan?");
                    if(title) {
                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url : "simpan.php",
                            type : "POST",
                            data :{
                                title : title,
                                start : start,
                                end : end
                            },
                            success : function(){
                                calendar.fullCalendar('refetchEvents');
                                alert('Okay, Got it!');
                            }
                        });
                    }
                },

                eventDrop: function(event) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                        var title = event.title;
                        var id = event.id;
                        $.ajax({
                            url : "ubah.php",
                            type : "POST",
                            data :{
                                title : title,
                                start : start,
                                end : end,
                                id : id
                            },
                            success : function(){
                                calendar.fullCalendar('refetchEvents');
                                alert('Changed has been saved!');
                            }
                        });
                    },
                eventClick: function(event){
                    if (confirm("Are your sure delete this?")) {
                        var id = event.id;
                        $.ajax({
                            url : "hapus.php",
                            type : "POST",
                            data: {
                                    id:id
                            },
                            success: function(){
                                calendar.fullCalendar('refetchEvents');
                                alert("Schedule has been deleted");
                                }
                            });
                        }
                    }
                });
            });
    </script>
    <br>
    <br>
        <div class="tutup">
            <center><a href="menu_admin.php"> &nbsp; Back to homepage!</a><center>
        </div>
</body>
</body>
</html>