
          
        
 <p>{{$DataPenerima->name}}</p>
 <p> USER ID:{{ Auth::user()->id }}</p>
 <br>
            <p>Tanggal Melahirkan: {{$DataProdukAsi->tanggal_melahirkan}}</p>
            <br>
            @foreach($DataBoard as $data)
            <p>Courir Request: {{$data->courir_request}}</p>
            @endforeach