<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'Name' => 'required',
            'email' => 'required'
        ]);

        // Creating a New Message
        $message = new Message;
        $message->name = $request->input('Name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //Save Message
        $message->save();

        //After Message is saved, redirect to home page
        return redirect('/')->with('success','Message sent');
    }

    public function getMessages(){
        $messages = Message::all();

        return view('messages')->with('messages',$messages);
    }
}
