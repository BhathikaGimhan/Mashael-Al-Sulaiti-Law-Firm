<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation Mail (Admin)</title>
</head>
<body>
    <p>
        Hello Admin,
    </p>

    <p>
        This is a booking confirmation for the following details:
    </p>

    <ul>
        <li>Booking Date: {{ $booking_date }}</li>
        <li>Booking Time: {{ $booking_time }}</li>
        <li>First Name: {{ $first_name }}</li>
        <li>Last Name: {{ $last_name }}</li>
        <li>Phone: {{ $phone }}</li>
    </ul>

    <p>
        Thank you!
    </p>
</body>
</html>
