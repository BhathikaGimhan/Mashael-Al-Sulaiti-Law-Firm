<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{

    // BookingController.php

    public function getBookingData()
    {
        $bookings = booking::all(); // Fetch all booking data from the database

        return response()->json(['bookings' => $bookings]);
    }


    public function index(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'time' => 'required',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Form data is valid, proceed to save it to the database
        $booking = new booking();
        $booking->booking_date = $request->input('date');
        $booking->booking_time = $request->input('time');
        $booking->first_name = $request->input('firstName');
        $booking->last_name = $request->input('lastName');
        $booking->email = $request->input('email');
        $booking->phone = $request->input('phone');
        $booking->save();

        // Send an email
        $this->sendConfirmationEmail($booking);

        // Return a response (you can customize this based on your requirements)
        return response()->json(['message' => 'Booking successful. Confirmation email sent.']);
    }

    private function sendConfirmationEmail(booking $booking)
    {
        // Customize this function to send an email using Laravel's Mail facade
        // You'll need to create a Mailable class for your email content

        $emailData = [
            'booking_date' => $booking->booking_date,
            'booking_time' => $booking->booking_time,
            'first_name' => $booking->first_name,
            'last_name' => $booking->last_name,
            'phone' => $booking->phone,
        ];

        // Assuming you have created a Mailable class named BookingConfirmationMail
        Mail::to($booking->email)->send(new \App\Mail\BookingConfirmationMail($emailData));

    }
}
