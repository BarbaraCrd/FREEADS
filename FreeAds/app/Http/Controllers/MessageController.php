<?php

namespace App\Http\Controllers;

use Notification;
use App\Models\Post;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Notifications\SendEmailNotification;
  


class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('bar'); //METHODE DE RECALAGE SI PAS LOG ! ICI FOO AVEC LOG BAR SANS LOG
    }

    public function create(Request $request)
    {
        $seller_id = $request["seller_id"];
        $ad_id = $request["ad_id"];

        return view('message', compact('seller_id', 'ad_id'));
    }

    public function store(Request $request)
    {   
        $message = new Message();
        $message->content = $request['content'];
        $message->seller_id = $request['seller_id'];
        $message->buyer_id = $request['buyer_id'];
        $message->ad_id = $request['ad_id'];
        $message->sendto = $request['sendto'];
        $message->save();

        $user=User::find($message->seller_id);
        $sellername=$user->name;
    
        $userb=User::find($message->buyer_id);
        $buyername=$userb->name;
    
        $adfind=Post::find($message->ad_id);
        $adname= $adfind->title;
 
 
       $details=[
           'greeting' => 'Hi ' . $sellername,
           'body' => 'You have received a new message from ' . $buyername . ' for your ' . $adname . "'s ads",
           'actiontext' => 'GO TO YOUR MESSAGE',
           'actionurl' => 'http://127.0.0.1:8000/message-read',
           'lastline' => '',
       ];
 
       Notification::send($user, new SendEmailNotification($details));



        return redirect()->route('message.readA')
                         ->with('success','Your message has been sent successfully');
    }

    public function createA(Request $request)
    {
        $buyer_id = $request['buyer_id'];
        $ad_id = $request["ad_id"];

        return view('messageA', compact('buyer_id', 'ad_id'));
    }

    public function storeA(Request $request)
    {   
        $message = new Message();
        $message->content = $request['content'];
        $message->seller_id = $request['seller_id'];
        $message->buyer_id = $request['buyer_id'];
        $message->ad_id = $request['ad_id'];
        $message->sendto = $request['sendto'];
        $message->save();

        $user=User::find($message->seller_id);
        $sellername=$user->name;
    
        $userb=User::find($message->buyer_id);
        $buyername=$userb->name;
    
        $adfind=Post::find($message->ad_id);
        $adname= $adfind->title;
 
 
       $details=[
           'greeting' => 'Hi ' . $buyername,
           'body' => 'You have received a new message from ' . $sellername . ' for your ' . $adname . "'s ads",
           'actiontext' => 'GO TO YOUR MESSAGE',
           'actionurl' => 'http://127.0.0.1:8000/message-read',
           'lastline' => '',
       ];
 
       Notification::send($user, new SendEmailNotification($details));

        return redirect()->route('message.read')
                         ->with('success','Your message has been sent successfully');
    }

    public function destroy(Message $message)
    {
        $message->delete();


            return redirect()->route('readglobal')->with('success','Message deleted successfully');

    
     
    }

}
