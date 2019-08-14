<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //

    public function submit(Request $request){
      $this->validate($request, [
          'name' => 'required',
          'email'=> 'required',
          'message'=>'required'
        ]);

        //initialize and collect the value from the form
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //save to the Database
        $message->save();
        return redirect('/home')->with('success', 'Message sent');
    }

    public function getMessages(){
      $message = Message::all();

      return view('messages', ['message'=>$message]);
    }
}
