
/////halaman melihat pesanan asi yang dipesan oleh orang lain
<p>getAllAsiProductDashboardRequest</p>


@foreach($DataResipienAsi as $DataResipien)

@if($DataResipien->pivot->progress == 1)
<form action="{{route('DetailDashboardPendonor-RequestAsi')}}" method="POST">
    @csrf
<--- --->


<p>Nama resipien: {{$DataResipien->name}}</p>

<p>Courir Request: {{$DataResipien->pivot->courir_request}}</p>

<p>Quantity Request: {{$DataResipien->pivot->quantity_request}}</p>
<p>Detail address resipien Request: {{$DataResipien->pivot->detail_address_resipien}}</p>
<p>Progress: {{$DataResipien->pivot->progress}}</p>
<input hidden name="asiBoardId" value="{{$DataResipien->pivot->id}}">

<input hidden name="asiId" value="{{$DataResipien->asiResipiens[0]->id}}">


<br><br><br>
<button type="submit" class="btn btn-primary">See</button>

</form>
@endif
@endforeach



<p>getAllAsiProductDashboardHistory</p>


@foreach($DataResipienAsi as $DataResipien)

@if($DataResipien->pivot->progress == 2 || $DataResipien->pivot->progress == 3)
<form action="{{route('DetailDashboardPendonor-HistoriAsi')}}" method="post">
    @csrf
<p>Nama Resipien: {{$DataResipien->name}}</p>

<p>Courir Request: {{$DataResipien->pivot->courir_request}}</p>

<p>Quantity Request: {{$DataResipien->pivot->quantity_request}}</p>
<p>Detail address resipien Request: {{$DataResipien->pivot->detail_address_resipien}}</p>

<p>Progress: {{$DataResipien->pivot->progress}}</p>
<input hidden name="asiBoardId" value="{{$DataResipien->pivot->id}}">
<input hidden name="asiId" value="{{$DataResipien->asiResipiens[0]->id}}">
<br><br><br>
<button type="submit" class="btn btn-primary">See</button>

</form>
@endif
@endforeach





<p>getAllAsiProductDashboardInProgress</p>

@foreach($DataResipienAsi as $DataResipien)

@if($DataResipien->pivot->progress == 0)

<form action="{{route('DetailDashboardPendonor-InProgressAsi')}}" method="post">
    @csrf

<p>Nama resipien: {{$DataResipien->name}}</p>

<p>Courir Request: {{$DataResipien->pivot->courir_request}}</p>

<p>Quantity Request: {{$DataResipien->pivot->quantity_request}}</p>
<p>Detail address resipien Request: {{$DataResipien->pivot->detail_address_resipien}}</p>

<p>Progress: {{$DataResipien->pivot->progress}}</p>
<input hidden name="asiBoardId" value="{{$DataResipien->pivot->id}}">
<input hidden name="asiId" value="{{$DataResipien->asiResipiens[0]->id}}">

<br><br><br>
<button type="submit" class="btn btn-primary">See</button>
</form>
@endif
@endforeach

