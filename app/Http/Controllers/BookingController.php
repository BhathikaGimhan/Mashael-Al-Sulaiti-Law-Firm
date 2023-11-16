<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'time' => 'required',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Form data is valid, proceed to save it to the database or perform other actions
        $booking = new booking();
        $booking->booking_date = $request->input('date');
        $booking->booking_time = $request->input('time');
        $booking->first_name = $request->input('firstName');
        $booking->last_name = $request->input('lastName');
        $booking->email = $request->input('email');
        $booking->phone = $request->input('phone');
        $booking->save();

        // Return a response (you can customize this based on your requirements)
        return response()->json(['message' => "work"]);
    }
}
