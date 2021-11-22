<div>
    <div class="container">
    <div class="row justify-content-center">
       
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"  wire:poll="mountdata">
                @if(isset($sender))
                <p></p><p class="text-center fw-bold">{{$sender->name}} </p>
                @else <p class="font-weight-bolder my-0">&nbsp; </p> @endif
                </div>
                <div class="card-body message-box" wire:poll="mountdata">
                    @if(filled($allmessages))
                     @foreach($allmessages as $moremessages)
                            <div class="single-message @if($moremessages->user_id == auth()->id()) sent @else received @endif">
                                <p class="my-0">{{$moremessages->name}}</p>
                                <p class="fs-7 fw-bold my-0">{{$moremessages->message}}</p>
                                <em class="w-100">{{$moremessages->created_at}}</em>
                            </div>
                        @endforeach
                        @endif
                </div>
                <div class="card-footer">
                @if($asiboard->progress == 0)
                @if(isset($sender))
                    <form wire:submit.prevent="SendMessage">
                    {{ csrf_field() }}
                           
                        
                         
                         
                            <div class="row py-md-2">
                                    <div class="col-md-10">
                                        <input wire:model="message" class="form-control input shadow-none w-100 d-inline-block " placeholder="Type a message" required>
                                    </div> 
                                    <div class="col-md-2 ">
                                        <button type="submit" class="btn btn-primary  btn-outline-danger d-inline-block w-100 "><i class="glyphicon glyphicon-chevron-right"></i> Kirim</button>
                                    </div>
                            </div>  
                         
                  
                 
                    </form>
                    @endif
                    @else
                    <div class="row py-sm-3">
                                <div class="col-md-12">
                                    <p></p>
                                    <p class="text-center fw-bolder">
                                        Pesanan Tidak Sedang Berlangsung
                                    </p>
                                </div>
                                </div>
                                @endif
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>
