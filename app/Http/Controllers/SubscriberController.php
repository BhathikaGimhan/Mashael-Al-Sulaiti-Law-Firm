<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;


class SubscriberController extends Controller
{
    public function index(Request $request)
    {

        $paginationEnabled = config('subscribers.enablePagination');

        $subscribers = Subscriber::orderBy('id', 'desc');

        if ($paginationEnabled) {
            $subscribers = $subscribers->paginate(config('subscribers.paginateListSize'));
        } else {
            $subscribers = $subscribers->get();
        }

        return View('auth.admin.subscribers.index', compact('subscribers'));
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:subscribers,email'
        ], [
            'email.required' => 'Please enter email!',
            'email.unique' => 'Already subscribed!'
        ]);

        Subscriber::create([
            'email' => $request->email
        ]);

        return response()->json(['success' => 'Subscribed successfully']);

    }


    public function unSubscribe(Request $request, $id)
    {
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();
        return redirect()->back()->with('success', 'Unsubscribed successfully');
    }

}
