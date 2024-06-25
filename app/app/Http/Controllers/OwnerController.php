<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Message;

use App\User;

use Illuminate\Support\Facades\DB;

class OwnerController extends Controller
{
    public function usersearch(){

        $user= new User;
        
        $users = $user->all();
        
        $name = null;
        $from = null;
        $until = null;

        return view('user_search',[
            'name' => $name,
            'users' => $users,
            'from' => $from,
            'until' => $until,
        ]);
    }

    public function usersearchForm(Request $request) {
        
        $user = new User;

        $users = $user->all();
        
        $name = $request->input('name');
        $from = $request->input('from');
        $until = $request->input('until');

        if (isset($name) && isset($from) && isset($until)) {
            $user = DB::table('users')->where('name','LIKE',"%{$name}%")->get();
            $users = $user->whereBetween("created_at", [$from, $until]);

            return view('user_search',[
                'name' => $name,
                'users' => $users,
                'from' => $from,
                'until' => $until, 
            ]);
        }
        
        elseif (isset($name)) {
            $users = DB::table('users')->where('name','LIKE',"%{$name}%")->get();

            return view('user_search',[
                'name' => $name,
                'users' => $users,
                'from' => $from,
                'until' => $until, 
            ]);
        }
        
        elseif (isset($from) && isset($until)) {
            $users = $user->all()->whereBetween('created_at',[$from, $until]);

            return view('user_search',[
                'name' => $name,
                'users' => $users,
                'from' => $from,
                'until' => $until,
            ]);
        }

        return view('user_search',[
            'name' => $name,
            'users' => $users,
            'from' => $from,
            'until' => $until,
        ]);
    }

    public function messagesearch(){

        $message= new Message;
        
        $messages = $message->all();
        
        $title = null;
        $from = null;
        $until = null;

        return view('message_search',[
            'title' => $title,
            'messages' => $messages,
            'from' => $from,
            'until' => $until,
        ]);
    }

    public function messagesearchForm(Request $request) {
        
        $message = new Message;

        $messages = $message->all();
        
        $title = $request->input('title');
        $from = $request->input('from');
        $until = $request->input('until');

        if (isset($title) && isset($from) && isset($until)) {
            $message = DB::table('messages')->where('title','LIKE',"%{$title}%")->get();
            $messages = $message->whereBetween("date", [$from, $until]);

            return view('message_search',[
                'title' => $title,
                'messages' => $messages,
                'from' => $from,
                'until' => $until, 
            ]);
        }
        
        elseif (isset($title)) {
            $messages = DB::table('messages')->where('title','LIKE',"%{$title}%")->get();

            return view('message_search',[
                'title' => $title,
                'messages' => $messages,
                'from' => $from,
                'until' => $until, 
            ]);
        }
        
        elseif (isset($from) && isset($until)) {
            $messages = $message->all()->whereBetween('date',[$from, $until]);

            return view('message_search',[
                'title' => $title,
                'messages' => $messages,
                'from' => $from,
                'until' => $until,
            ]);
        }

        return view('message_search',[
            'title' => $title,
            'messages' => $messages,
            'from' => $from,
            'until' => $until,
        ]);
    }

    public function deleteUserForm($id) {

        $user = User::find($id);

        return view('/user_delete', compact('user'));
    }


    public function userDelete($id) {

        $user = User::find($id);
        
        $user->delete();

        return redirect('/user_search');
    }

    public function deleteMessageForm($id) {
        $message = Message::find($id);

        return view('/message_delete', compact('message'));
    }

    public function messageDelete($id) {

        $message = Message::find($id);
        
        $message->delete();

        return redirect('/message_search');
    }
}
