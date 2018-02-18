<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Mail;
use Session;
use Purifier;

class PageController extends Controller
{
    public function main()
    {
        $orders = Order::orderBy('created_at', 'desc')->limit(3)->get();

        return view('pages.main')->withOrders($orders);
    }

    public function getAbout()
    {
        return view('pages.about');
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function postContact(Request $request) {
        $this -> validate($request, [
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'min:10'
        ]);

        $data = [
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => Purifier::clean($request->message)
        ];

        Mail::send('emails.contact', $data, function($message) use($data) {
            $message->from($data['email']);
            $message->to('example@gmail.com'); // Contact us destination address.
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your Email was Sent!');

        return redirect('/');
    }
}
