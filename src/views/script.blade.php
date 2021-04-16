<script>
    var calendar;
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar-{{ $id }}')
        calendar = new FullCalendar.Calendar(calendarEl,
            {!! $options !!},
        );
        calendar.render();
    });
</script>
