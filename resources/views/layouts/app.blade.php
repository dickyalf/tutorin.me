<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Tutorin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/tutorin-logo-last.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.13/index.global.min.js'></script>
    <script src='../dist/index.global.js'></script>
    <link href='https://fullcalendar.io/releases/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
    <script src='https://fullcalendar.io/releases/fullcalendar/3.10.2/fullcalendar.min.js'></script>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            selectable: true, // Enable date selection
            select: function(info) {
              // Handle the selected date range
              console.log('Selected range: ' + info.startStr + ' to ' + info.endStr);
            }
          });
          calendar.render();
        });
      </script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },
                initialDate: '2024-05-30',
                navLinks: true, // can click day/week names to navigate views
                nowIndicator: true,

                weekNumbers: true,
                weekNumberCalculation: 'ISO',

                editable: true,
                selectable: true,
                dayMaxEvents: true, // allow "more" link when too many events
                events: [{
                        title: 'All Day Event',
                        start: '2023-01-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2023-01-07',
                        end: '2023-01-10'
                    },
                    {
                        groupId: 999,
                        title: 'Repeating Event',
                        start: '2023-01-09T16:00:00'
                    },
                    {
                        groupId: 999,
                        title: 'Repeating Event',
                        start: '2023-01-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2023-01-11',
                        end: '2023-01-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2023-01-12T10:30:00',
                        end: '2023-01-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2023-01-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2023-01-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2023-01-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2023-01-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2023-01-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2023-01-28'
                    }
                ]
            });

            calendar.render();

            var addEventButton = document.getElementById('add-event-button');
            var addEventModal = document.getElementById('addEventModal');
            var messageModal = document.getElementById('messageModal');
            var span = document.getElementsByClassName('close');

            addEventButton.onclick = function() {
                addEventModal.style.display = 'block';
            }

            Array.from(span).forEach(function(element) {
                element.onclick = function() {
                    addEventModal.style.display = 'none';
                    messageModal.style.display = 'none';
                }
            });

            window.onclick = function(event) {
                if (event.target == addEventModal || event.target == messageModal) {
                    addEventModal.style.display = 'none';
                    messageModal.style.display = 'none';
                }
            }

            document.getElementById('submitEvent').addEventListener('click', function() {
            var newEventTitle = document.getElementById('eventTitle').value;
            var newDate = document.getElementById('startDate').value;
            var newStartTime = document.getElementById('startTime').value;
            var newEndTime = document.getElementById('endTime').value;

            if (newEventTitle && newDate && newStartTime && newEndTime) {
                var today = new Date();
                var startDate = new Date(newDate + 'T' + newStartTime + ':00');
                var endDate = new Date(newDate + 'T' + newEndTime + ':00');

                today.setHours(0, 0, 0, 0);

                if (startDate >= today && endDate > startDate) {
                    calendar.addEvent({
                        title: newEventTitle,
                        start: startDate,
                        end: endDate
                    });
                    addEventModal.style.display = 'none';
                } else if (endDate <= startDate) {
                    showModal("The end time must be later than the start time.");
                } else {
                    showModal("The event date is invalid. The start date cannot be before today.");
                }
            } else {
                showModal("Event title, date, start time, and end time are required!");
            }
        });


            function showModal(message) {
                document.getElementById('modal-message').textContent = message;
                messageModal.style.display = 'block';
            }
        });
    </script>
    <style>
        body {
            margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
            background-color: #f4f4f9;
        }

        #calendar {
            max-width: 1100px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        button {
            display: inline-block;
            margin: 10px 0;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-content input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .modal-content button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: white;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .modal-content button:hover {
            background-color: #218838;
        }
    </style>

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Page Content -->
        @include('layouts.header')
        @yield('main_content')
        @include('layouts.footer')
        <!-- /Page Content -->
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

    <!-- Sticky Sidebar JS -->
    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>


</body>

</html>
