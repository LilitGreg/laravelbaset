<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;


class MessagesController extends Controller
{
    public function submit(Request $request){
        //return $request-> input('name');
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required'
        ]);

         $created = Message::create($request->all());

         if ($created) {
           return redirect('/')->with('success','Message Sent');
         }
        //create New Message
          // $message=new Message;
          // $message->name=$request->input('name');
          // $message->email=$request->input('email');
          // $message->message=$request->input('message');
          // //save message
          // $message->save();
          //redirect

        //return 'Success';
         return redirect()->back()->with('danger','Try again later');
    }
    public function getMessages(){
        $messages=Message::all();
        return view('messages')->with('messages', $messages);
    }
}
