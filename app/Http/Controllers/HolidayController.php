<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;


class HolidayController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'date' => 'required|date',
            'description' => 'required|string|max:255',
        ]);

        // Create a new holiday record
        $holiday = new Holiday();
        $holiday->date = $request->input('date');
        $holiday->description = $request->input('description');
        $holiday->save();

        // Return a response (you can customize this based on your requirements)
        return response()->json(['message' => 'Holiday added successfully']);
    }
}
