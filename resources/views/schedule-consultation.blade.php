@extends('layouts.publiclayout.master')

@section('title', 'Mashael Alsulaiti Law Firm | Schedule Consultation')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

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
                $('#date').val(info.dateStr); //
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
    .times {
        /* display: flex; */
        flex-direction: column;
        align-items: center;
    }

    .row {
        margin: 5px; /* Adjust margin for spacing between rows */
    }

    button {
        padding: 10px;
        background-color: #5e1818; /* Button background color */
        color: #fff; /* Button text color */
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #b92929; /* Change color on hover */
    }
    button:focus{
        background-color: #b92929;
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
                <p id="clicked-time"></p>
                <button id="change-time">Change time</button>

                <hr />
                <div class="times">
                    <div class="row">
                        <button>8:00 AM</button>
                    </div>
                    <div class="row">
                        <button>9:00 AM</button>
                    </div>
                    <div class="row">
                        <button>10:00 AM</button>
                    </div>
                    <div class="row">
                        <button>11:00 PM</button>
                    </div>
                    <div class="row">
                        <button>12:00 PM</button>
                    </div>
                    <div class="row">
                        <button>1:00 PM</button>
                    </div>
                    <div class="row">
                        <button>2:00 PM</button>
                    </div>
                    <div class="row">
                        <button>3:00 PM</button>
                    </div>
                    <div class="row">
                        <button>4:00 PM</button>
                    </div>
                </div>
                <div class="user-data">
                    <form method="post">
                        @csrf
                        <input type="hidden" name="" id="date" class="form-control" placeholder="" >
                        <input type="hidden" name="" id="time" class="form-control" placeholder="" >

                        <div class="form-group">
                        <label for="">First Name:</label>
                        <input type="text" name="" id="first-name" class="form-control" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label for="">Last Name:</label>
                            <input type="text" name="" id="last-name" class="form-control" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label for="">Email:</label>
                            <input type="text" name="" id="email" class="form-control" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label for="">Phone:</label>
                            <input type="text" name="" id="phone" class="form-control" placeholder="" >
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer" style="gap: 10px">
                <button type="button" class="close btn btn-secondary" id="close-button">Close</button>
                <button type="button" class="close btn btn-primary" id="submit-button">Submit</button>
            </div>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>

<script>
    $(document).ready(function() {
        $('.user-data').hide();
        $('#change-time').hide();
        $('#submit-button').hide();
        $('.close').click(function() {
            $('#modal').modal('hide');
            console.log('clicked');
        });

        $('.row button').click(function() {
            var buttonText = $(this).text();
            $('#clicked-time').text('Clicked on: '+ buttonText);
            $('#time').val( buttonText);
            $('.times').hide();
            $('.user-data').show();
            $('#change-time').show();
            $('#submit-button').show();


        });

        $('#change-time').click(function(){
            $('.times').show();
            $('.user-data').hide();
            $('#change-time').hide();
            $('#submit-button').hide();


        });

        $('#submit-button').click(function() {
            var clickedDate = $('#date').val();
            var clickedTime = $('#time').val();
            var firstName = $('#first-name').val(); // <-- This line might be causing the error
            var lastName = $('#last-name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();

            var formData = {
                date: clickedDate,
                time: clickedTime,
                firstName: firstName,
                lastName: lastName,
                email: email,
                phone: phone
            };

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            console.log(formData);
            $.ajax({
                type: 'POST',
                url: '{{ route("booking") }}',
                data: formData, // Fix the variable name here
                dataType: 'json',
                success: function(response) {
                    var clickedDate = $('#date').val("");
                    var clickedTime = $('#time').val("");
                    var firstName = $('#first-name').val(""); // <-- This line might be causing the error
                    var lastName = $('#last-name').val("");
                    var email = $('#email').val("");
                    var phone = $('#phone').val("");
                    // Handle success, e.g., show a success message
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseJSON); // Check the validation errors in the console
                    // Handle errors, e.g., display error messages to the user
                    if (xhr.status === 422) {
                        // Handle validation errors, for example:
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            alert(value[0]); // Display the first error for each field
                        });
                    } else {
                        // Handle other errors
                        alert('An error occurred while processing your request.');
                    }
                }
            });
        });
    });
</script>
@endsection
