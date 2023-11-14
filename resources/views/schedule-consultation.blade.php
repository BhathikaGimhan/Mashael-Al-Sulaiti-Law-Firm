@extends('layouts.publiclayout.master')

@section('title', 'Mashael Alsulaiti Law Firm | Schedule Consultation')
@section('content')
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            hiddenDays: [5, 6],
            dateClick: function(info) {
                $('#modal').modal('show'); // Show the modal
                $('#clicked-date').text('Clicked on: ' + info.dateStr); // Display the clicked date
            }
        });
        calendar.render();
    });

</script>
<style>
    .fc-toolbar-title{
        color: brown;
        font-family: "Poppins", sans-serif !important;
    }
    .fc-daygrid-day-number{
        font-weight: 900;
        font-size: 1.3rem
    }
    .fc-daygrid-day-frame:hover{
        background: #66666631;
        transition-duration: 500ms;
    }
</style>
<section class="px-xxl-5 py-5">
    <div class="container-fluid px-xxl-5 px-lg-5">
        <h1 class="display-3 text-dark text-center">{!! trans('contactus.mainHead') !!}</h1>
        <h3 class="h4 text-center">{!! trans('contactus.subHead') !!}</h3>
        <div class="mt-md-0 p-lg-5 z-50 mt-3">
            <div id='calendar'></div>
        </div>
    </div>
</section>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Date Clicked</h5>
                <button type="button" class="close btn btn-secondary" id="close-button" data-dismiss="modal" aria-label="Close">
                    <span style="font-size: 20px;" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="clicked-date"></p>
                <hr />
            </div>
            <div class="modal-footer" style="gap: 10px">
                <button type="button" class="close btn btn-secondary" id="close-button">Close</button>
                <button type="button" class="close btn btn-primary" id="close-button">Submit</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.close').click(function() {
            $('#modal').modal('hide');
            console.log('clicked');
        });

        $('#submit-button').click(function() {
        // Get the clicked date
            var clickedDate = $('#clicked-date').text().replace('Clicked on: ', '').trim();

            // Make an AJAX request to store the event
            $.ajax({
                type: 'POST',
                url: '{{ route("store-event") }}',
                data: {
                    date: clickedDate,
                    // Add more data fields as needed
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    });
</script>
@endsection
