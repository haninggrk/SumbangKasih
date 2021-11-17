
/////halaman melihat pesanan asi yang dipesan oleh orang lain
<p>getAllAsiProductDashboardRequest</p>

<form action="{{route('DetailDashboardRequestAsi')}}" method="post">
    @csrf
@foreach($DataResipienAsi as $DataResipien)

@if($DataResipien->pivot->progress == 1)

<--- --->


<p>Nama resipien: {{$DataResipien->name}}</p>

<p>Courir Request: {{$DataResipien->pivot->courir_request}}</p>

<p>Quantity Request: {{$DataResipien->pivot->quantity_request}}</p>
<p>Detail address resipien Request: {{$DataResipien->pivot->detail_address_resipien}}</p>
<p>Progress: {{$DataResipien->pivot->progress}}</p>
<input type="hidden" name="idBoard" value="{{$DataResipien->pivot->id}}">
<input type="hidden" name="idUserpenerima" value="{{$DataResipien->id}}">

<br><br><br>
<button type="submit">See</button>
@endif
@endforeach
</form>


<p>getAllAsiProductDashboardHistory</p>


@foreach($DataResipienAsi as $DataResipien)

@if($DataResipien->pivot->progress == 2 || $DataResipien->pivot->progress == 3)
<p>Nama Resipien: {{$DataResipien->name}}</p>

<p>Courir Request: {{$DataResipien->pivot->courir_request}}</p>

<p>Quantity Request: {{$DataResipien->pivot->quantity_request}}</p>
<p>Detail address resipien Request: {{$DataResipien->pivot->detail_address_resipien}}</p>

<p>Progress: {{$DataResipien->pivot->progress}}</p>

@endif
@endforeach





<p>getAllAsiProductDashboardInProgress</p>

@foreach($DataResipienAsi as $DataResipien)

@if($DataResipien->pivot->progress == 0)

<p>Nama resipien: {{$DataResipien->name}}</p>

<p>Courir Request: {{$DataResipien->pivot->courir_request}}</p>

<p>Quantity Request: {{$DataResipien->pivot->quantity_request}}</p>
<p>Detail address resipien Request: {{$DataResipien->pivot->detail_address_resipien}}</p>

<p>Progress: {{$DataResipien->pivot->progress}}</p>
@endif
@endforeach

