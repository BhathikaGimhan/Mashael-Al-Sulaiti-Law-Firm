<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Dashborad</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url("/") }}">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container">
        <form id="holidayForm">
            @csrf
            <div style="gap: 20px" class="row">
                <div class="form-group">
                    <label for="date">Select Holidays</label>
                    <input type="date" class="form-control" name="date" id="date" aria-describedby="dateHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="description">Add about date</label>
                    <input type="text" class="form-control" name="description" id="description" aria-describedby="descriptionHelp" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <button type="button" id="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
      <div style="margin-top: 20px" class="container">
        <div class="row">
            <h1>Holidays</h1> <br>
    <ul id="holiday-list"></ul>
        </div>

    </div>
    <script>
        $(document).ready(function () {
    fetchHolidays();

    function fetchHolidays() {
        $.ajax({
            url: '/holidays',
            type: 'GET',
            success: function (data) {
                // Clear the existing holiday list before appending new holidays
                $('#holiday-list').empty();

                // Iterate through holidays and append to the list
                $.each(data.holidays, function (index, holiday) {
                    $('#holiday-list').append('<li>' + holiday.date + ': ' + holiday.description + '</li>');
                });
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    // Fetch booking data using AJAX
    $('#submit').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: '{{ route("submit.holiday") }}',
            type: 'POST',
            data: $('#holidayForm').serialize(),
            success: function (response) {
                alert(response.message);
                fetchHolidays();
                // Optionally, you can reset the form after a successful submission
                // $('#holidayForm')[0].reset();
            },
            error: function (error) {
                console.log(error.responseJSON);
                alert('Error: Please check the form data.');
            }
        });
    });
});

    </script>

<script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
