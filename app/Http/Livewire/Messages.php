<?php

namespace App\Http\Livewire;

use App\Models\AsiBoard;
use App\Models\message;
use Livewire\Component;
use Illuminate\Foundation\Auth\User;

class Messages extends Component
{
    public $allmessages;
    public $message;
    public $sender;
 

    public function render()
    {
        $users=User::all();
        $sender=$this->sender;
        $this->allmessages=message::all();

        return view('livewire.messages', compact('users', 'sender'));
    }

    public function mountdata()
    {
        if (isset($this->sender->id)) {
            $getUser = User::findOrFail(auth()->user()->id);

            $dataMessage = [];
            foreach ($getUser->receiverMessages as $receiverMessage) {
                if ($receiverMessage->id == $this->sender->id) {
                    array_push($dataMessage, $receiverMessage);
                }
            }
            $this->allmessages = $dataMessage;
            $not_seen = Message::where('receiver_id', $this->sender->id)->where('user_id', auth()->id())->where('is_seen', false);
            $not_seen->update(['is_seen' => true]);
        }
    }

    public function resetForm()
    {
        $this->message = '';
    }

    public function SendMessage()
    {
        $inarray = [];

        $getpesanan = AsiBoard::findOrFail($this->idasiboard)->where('progress', '=', 1)->get();
        foreach ($getpesanan as $datauser) {
            array_push($inarray, $datauser->receiver_id);
        }

        if (in_array($this->sender->id, $inarray)) {
            $data = new Message();
            $data->message = $this->message;
            $data->user_id = auth()->id();
            $data->receiver_id = $this->sender->id;
            $data->save();

            $this->resetForm();
        }
    }

    public function getUser($user)
    {
        $user=User::find($user->id);
        
        $this->sender=$user;

    
        $this->allmessages=Message::where('user_id', auth()->id())->where('receiver_id', $user->id)->orWhere('user_id', $user->id)->where('receiver_id', auth()->id())->orderBy('id', 'desc')->get();
    }
}
