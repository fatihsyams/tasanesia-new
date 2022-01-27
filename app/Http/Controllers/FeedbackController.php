<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(StoreFeedbackRequest $request)
    {   
         Product::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        Alert::success('Success', 'Feedback sudah di kirim :))');

    return redirect()->route('contact.index');
        // dd($a);
    }
}
