<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Booking Confirmation</h1>
    <p>Thank you for your booking!</p>
    <p>Details:</p>
    <ul>
        <li>Date: {{ $emailData['booking_date'] }}</li>
        <li>Time: {{ $emailData['booking_time'] }}</li>
        <li>Name: {{ $emailData['first_name'] }} {{ $emailData['last_name'] }}</li>
        <li>Name: {{ $emailData['phone'] }}</li>
    </ul>
</body>
</html>
