@foreach($getInfo as $dataPesananResipien)
@if($dataPesananResipien->pivot->id == $asiBoardId)
<br>
Nama Resipien={{$dataPesananResipien->name}}
<br>
quantity yang direquest = {{$dataPesananResipien->pivot->quantity_request}}
<br>
jumlah botol yg dimlki oleh pendonor saat ini={{ $dataPesananResipien->asiResipiens[0]->quantityupdated }}
<br>
detail almat rsipien={{$dataPesananResipien->pivot->detail_address_resipien}}
<br>
tanggal dipesan={{$dataPesananResipien->pivot->created_at}}
@endif
@endforeach