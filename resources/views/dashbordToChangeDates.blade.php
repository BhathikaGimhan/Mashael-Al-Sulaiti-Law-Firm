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
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
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
            <table class="table table-hover table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody id="bookingTableBody">
                    <!-- Table rows will be dynamically added here -->
                </tbody>
            </table>
        </div>

    </div>
    <script>
        $(document).ready(function () {
            // Fetch booking data using AJAX
            $('#submit').click(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '{{ route("submit.holiday") }}',
                    type: 'POST',
                    data: $('#holidayForm').serialize(),
                    success: function (response) {
                        alert(response.message);
                        // Optionally, you can reset the form after a successful submission
                        // $('#holidayForm')[0].reset();
                    },
                    error: function (error) {
                        console.log(error.responseJSON);
                        alert('Error: Please check the form data.');
                    }
                });

            });
            $.ajax({
                type: 'GET',
                url: '/get-booking-data',
                dataType: 'json',
                success: function (response) {
                    // Iterate over the bookings and append rows to the table
                    $.each(response.bookings, function (index, booking) {
                        $('#bookingTableBody').append(`
                            <tr>
                                <td>${booking.id}</td>
                                <td>${booking.booking_date}</td>
                                <td>${booking.booking_time}</td>
                                <td>${booking.first_name}</td>
                                <td>${booking.last_name}</td>
                                <td>${booking.email}</td>
                                <td>${booking.phone}</td>
                            </tr>
                        `);
                    });
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText); // Log any errors to the console
                }
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
