<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8' />
  <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css' rel='stylesheet' />
  <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js'></script>
  <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js'></script>
  <script>

    $(document).ready(function() {

      // page is now ready, initialize the calendar...

      $('#calendar').fullCalendar({
        // put your options and callbacks here
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,basicWeek,basicDay'
        },
        defaultDate: '2023-04-20',
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
          {
            title: 'Event 1',
            start: '2023-04-20T10:00:00',
            end: '2023-04-20T12:00:00'
          },
          {
            title: 'Event 2',
            start: '2023-04-20T14:00:00',
            end: '2023-04-20T16:00:00'
          },
          // more events here
        ]
      });

    });

  </script>
</head>
<body>

  <div id='calendar'></div>

</body>
</html>