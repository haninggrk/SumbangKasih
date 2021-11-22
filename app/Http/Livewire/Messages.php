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
    public $idasiboard;
    public AsiBoard $asiboard;
 
    public function mount($idasiboard)
    {
        $this->idasiboard = $idasiboard;
    }

    public function render()
    {
       
        $this->asiboard=AsiBoard::findOrFail($this->idasiboard);
        $this->sender= User::findOrFail( AsiBoard::findOrFail($this->idasiboard)->receiver_id);
        $this->allmessages=Message::where('user_id', auth()->id())->where('receiver_id', $this->sender->id)->orWhere('user_id', $this->sender->id)->where('receiver_id', auth()->id())->orderBy('id', 'desc')->get();

        return view('livewire.messages');
    }

    public function mountdata()
    {
        if (isset($this->sender->id)) {
            $getUser = User::findOrFail(auth()->user()->id);

            $dataMessage = [];
            if(isset($getUser->receiverMessages)){
            foreach ($getUser->receiverMessages as $receiverMessage) {
                if ($receiverMessage->id == $this->sender->id) {
                    array_push($dataMessage, $receiverMessage->pivot->message);
                }
            }
            $this->allmessages = $dataMessage;
            $not_seen = Message::where('receiver_id', $this->sender->id)->where('user_id', auth()->id())->where('is_seen', false);
            $not_seen->update(['is_seen' => true]);
        }
        }
    }

    public function resetForm()
    {
        $this->message = '';
    }

    public function SendMessage()
    {
        
            $data = new message();
            $data->message = $this->message;
            $data->user_id = auth()->id();
            $data->receiver_id = $this->sender->id;
            $data->save();

            $this->resetForm();
        
    }
}
