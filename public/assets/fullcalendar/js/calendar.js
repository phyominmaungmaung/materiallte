document.addEventListener('DOMContentLoaded', function() {
    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new Draggable(containerEl, {
        itemSelector: '.fc-event',
        eventData: function(eventEl) {
            return {
                title: eventEl.innerText.trim()
            }
        }
    });

    var calendarEl = document.getElementById('calendar');
    var calendar = new Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        editable: true,
        eventlimit:true,
        navlinks:true,
        selectable:true,
        droppable: true, // this allows things to be dropped onto the calendar
        drop: function(arg) {
            // is the "remove after drop" checkbox checked?
            if (document.getElementById('drop-remove').checked) {
                // if so, remove the element from the "Draggable Events" list
                arg.draggedEl.parentNode.removeChild(arg.draggedEl);
            }
        },
        eventDrop: function (event) {
  alert('Event Drop');
        },
        eventClick: function (event) {
            alert('Event Click');
        },
        eventResize: function (event) {
            alert('Event Resize');
        },
        events:[
            {
                "title": "All Day Event",
                "start": "2019-08-01"
            },
            {
                "title": "Long Event",
                "start": "2019-08-07",
                "end": "2019-08-10"
            },
            {
                "id": "999",
                "title": "Repeating Event",
                "start": "2019-08-09T16:00:00-05:00"
            },
            {
                "id": "999",
                "title": "Repeating Event",
                "start": "2019-08-16T16:00:00-05:00"
            },
            {
                "title": "Conference",
                "start": "2019-08-11",
                "end": "2019-08-13"
            },
            {
                "title": "Meeting",
                "start": "2019-08-12T10:30:00-05:00",
                "end": "2019-08-12T12:30:00-05:00"
            },
            {
                "title": "Lunch",
                "start": "2019-08-12T12:00:00-05:00"
            },
            {
                "title": "Meeting",
                "start": "2019-08-12T14:30:00-05:00"
            },
            {
                "title": "Happy Hour",
                "start": "2019-08-12T17:30:00-05:00"
            },
            {
                "title": "Dinner",
                "start": "2019-08-12T20:00:00"
            },
            {
                "title": "Birthday Party",
                "start": "2019-08-13T07:00:00-05:00"
            },
            {
                "title": "Click for Google",
                "url": "http://google.com/",
                "start": "2019-08-28"
            }
        ]

    });
    calendar.render();

});