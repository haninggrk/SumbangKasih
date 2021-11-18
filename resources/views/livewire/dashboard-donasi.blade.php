
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


<br><br><br>
/////halaman melihat pesanan asi yang aku pesan sama orang lain
<p>getAllAsiProductDashboardMenungguRequest</p>

@foreach($DataPermintaanAsi as $DataPermintaan)

@if($DataPermintaan->pivot->progress == 1)
<form action="/detail-permintaan-request-asi" method="POST">
    @csrf
<--- --->


<p>Nama pendonor: {{$DataPermintaan->pemilik->name}}</p>

<p>my courir Request: {{$DataPermintaan->pivot->courir_request}}</p>

<p>my Quantity Request: {{$DataPermintaan->pivot->quantity_request}}</p>
<p>Detail address pendonor: {{$DataPermintaan->detail_address}}</p>
<p>Progress: {{$DataPermintaan->pivot->progress}}</p>
<input hidden name="asiBoardId" value="{{$DataPermintaan->pivot->id}}">

<input hidden name="asiId" value="{{$DataPermintaan->id}}">


<br><br><br>
<button type="submit" class="btn btn-primary">See</button>

</form>
@endif
@endforeach



<p>getAllmypesananAsiProductDashboardHistory</p>


@foreach($DataPermintaanAsi as $DataPermintaan)

@if($DataPermintaan->pivot->progress == 2 || $DataPermintaan->pivot->progress == 3)
<form action="/detail-permintaan-histori-asi" method="post">
    @csrf
<p>Nama pendonor: {{$DataPermintaan->pemilik->name}}</p>

<p>my Request: {{$DataPermintaan->pivot->courir_request}}</p>

<p>my Quantity Request: {{$DataPermintaan->pivot->quantity_request}}</p>
<p>Detail address pendonor: {{$DataPermintaan->detail_address}}</p>

<p>Progress: {{$DataPermintaan->pivot->progress}}</p>
<input hidden name="asiBoardId" value="{{$DataPermintaan->pivot->id}}">
<input hidden name="asiId" value="{{$DataPermintaan->id}}">
<br><br><br>
<button type="submit" class="btn btn-primary">See</button>

</form>
@endif
@endforeach





<p>getAllmyPesananAsiProductDashboardInProgress</p>

@foreach($DataPermintaanAsi as $DataPermintaan)

@if($DataPermintaan->pivot->progress == 0)

<form action="/detail-permintaan-inprogress-asi" method="post">
    @csrf

    <p>Nama pendonor: {{$DataPermintaan->pemilik->name}}</p>

<p>my Request: {{$DataPermintaan->pivot->courir_request}}</p>

<p>my Quantity Request: {{$DataPermintaan->pivot->quantity_request}}</p>
<p>Detail address pendonor: {{$DataPermintaan->detail_address}}</p>

<p>Progress: {{$DataPermintaan->pivot->progress}}</p>
<input hidden name="asiBoardId" value="{{$DataPermintaan->pivot->id}}">
<input hidden name="asiId" value="{{$DataPermintaan->id}}">

<br><br><br>
<button type="submit" class="btn btn-primary">See</button>
</form>
@endif
@endforeach





