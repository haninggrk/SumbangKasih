
<p>getAllAsiProductDashboardRequest</p>

<form action="{{route('DetailDashboardRequestAsi')}}" method="post">
    @csrf
@foreach($getAllAsiProductDashboardRequest as $DataAsiRequest)

<input type="hidden" name="idProductAsi" value="{{$DataAsiRequest->id}}"><p>Nama Pemilik: {{$DataAsiRequest->pemilik->name}}</p>

<--- --->

@foreach($DataAsiRequest->Users as $DataResepien)
<p>Nama User Penerima: {{$DataResepien->name}}</p>

<p>Courir Request: {{$DataResepien->pivot->courir_request}}</p>

<p>Quantity Request: {{$DataResepien->pivot->quantity_request}}</p>
<p>Detail address resipien Request: {{$DataResepien->pivot->detail_address_resipien}}</p>
<input type="hidden" name="idBoard" value="{{$DataResepien->pivot->id}}">
<input type="hidden" name="idUserpenerima" value="{{$DataResepien->id}}">

<br><br><br>
<button type="submit">See</button>
@endforeach

@endforeach
</form>


<p>getAllAsiProductDashboardHistory</p>

@foreach($getAllAsiProductDashboardHistory as $DataAsiHistory)

<p>Nama Pemilik: {{$DataAsiHistory->pemilik->name}}</p>

<--- DIBAWAH INI PENERIMA --->

@foreach($DataAsiHistory->Users as $DataResepien)
<p>Nama User Penerima: {{$DataResepien->name}}</p>

<p>Courir Request: {{$DataResepien->pivot->courir_request}}</p>

<p>Quantity Request: {{$DataResepien->pivot->quantity_request}}</p>
<p>Detail address resipien Request: {{$DataResepien->pivot->detail_address_resipien}}</p>

<p>Progress: {{$DataResepien->pivot->progress}}</p>


@endforeach

@endforeach



<p>getAllAsiProductDashboardInProgress</p>

@foreach($getAllAsiProductDashboardInProgress as $DataAsiInProgress)

<p>Nama Pemilik: {{$DataAsiInProgress->pemilik->name}}</p>

<--- DIBAWAH INI PENERIMA --->

@foreach($DataAsiInProgress->Users as $DataResepien)
<p>Nama User Penerima: {{$DataResepien->name}}</p>

<p>Courir Request: {{$DataResepien->pivot->courir_request}}</p>

<p>Quantity Request: {{$DataResepien->pivot->quantity_request}}</p>
<p>Detail address resipien Request: {{$DataResepien->pivot->detail_address_resipien}}</p>

<p>Progress: {{$DataResepien->pivot->progress}}</p>


@endforeach

@endforeach

