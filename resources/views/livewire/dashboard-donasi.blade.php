
<p>getAllAsiProductDashboardRequest</p>

@foreach($getAllAsiProductDashboardRequest as $DataAsiRequest)

<p>Nama Pemilik: {{$DataAsiRequest->pemilik->name}}</p>

<--- --->

@foreach($DataAsiRequest->Users as $DataResepien)
<p>Nama User Penerima: {{$DataResepien->name}}</p>

<p>Courir Request: {{$DataResepien->pivot->courir_request}}</p>

<p>Quantity Request: {{$DataResepien->pivot->quantity_request}}</p>
<p>Detail address resipien Request: {{$DataResepien->pivot->detail_address_resipien}}</p>

<br><br><br>
<a href="{{ route('DetailDashboardRequestAsi',['id=>$DataResepien->pivot->id'])}}">See</a>
@endforeach

@endforeach


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

