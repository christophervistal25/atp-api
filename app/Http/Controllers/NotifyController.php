<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Message;

class NotifyController extends Controller
{


    /**
     * Display all messages that need to send.
     */
    public function message()
    {

        return Message::where('status', 'active')
                    ->get(['id', 'phone_number', 'message']);
    }

    /**
     * Update a message from status active to in-active
     */
    public function update(Request $request)
    {
        foreach(array_filter(explode(',', $request->message_ids))  as $id) {
            $sms = Message::find($id);
            $sms->status = 'in-active';
            $sms->save();
        }

        return response()->json(['success' => true, 'message' => 'Successfully update the message.']);
    }
}
