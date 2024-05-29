<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth()->user()->id)->get();
        $message = Chat::where('recepient_id', Auth()->user()->id)->orderBy('created_at', 'desc')->first();
        if ($message) {
            $sender = $message->sender;
            $messages = Chat::where([['recepient_id', Auth()->user()->id], ['sender_id', $sender->id]])->orWhere([['sender_id', Auth()->user()->id], ['recepient_id', $sender->id]])->get();
        foreach ($messages as $message) {
            $message->isRead = true;
            $message->update();
        }
        }
        else{
            $sender  = null;
            $messages =Chat::where([['recepient_id', Auth()->user()->id], ['sender_id', 0]])->orWhere([['sender_id', Auth()->user()->id], ['recepient_id', 0]])->get();
        }
        
        $chats = [];
        foreach ($users as $user) {
            $chat = Chat::where('recepient_id', $user->id)->orWhere('sender_id', $user->id)->orderBy('created_at', 'desc')->first();
            if ($chat != null) {
                array_push($chats, ['message' => $chat->message, 'user_id' => $user->id]);
            }
        }
        return view('dashboard.chat', compact('users', 'messages', 'sender', 'chats'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        Chat::create([
            'message'=>request()->message,
            'sender_id'=>Auth()->user()->id,
            'recepient_id'=>request()->recepient_id,
            'isRead'=>false,
        ]);
        return redirect()->back()->with('success','Message sent');
    }

    public function show($id)
    {
        $users = User::where('id', '!=', Auth()->user()->id)->get();
        $sender = User::findOrFail($id);

        $chats = [];
        foreach ($users as $user) {
            $chat = Chat::where('recepient_id', $user->id)->orWhere('sender_id', $user->id)->orderBy('created_at', 'desc')->first();
            if ($chat != null) {
                array_push($chats, ['message' => $chat->message, 'user_id' => $user->id]);
            }
        }
        $messages = Chat::where([['recepient_id', Auth()->user()->id], ['sender_id', $id]])->orWhere([['sender_id', Auth()->user()->id], ['recepient_id', $id]])->get();
        foreach ($messages as $message) {
            $message->isRead = true;
            $message->update();
        }
        return view('dashboard.chat', compact('users', 'messages', 'sender', 'chats'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
