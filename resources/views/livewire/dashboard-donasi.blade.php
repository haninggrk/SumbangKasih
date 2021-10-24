

<p>getAllAsiProductDashboardRequest</p>
   @foreach($getAllAsiProductDashboardRequest as $DataAsiRequest)

<p>Nama User Pemilik: {{ $DataAsiRequest->pemilik->name}}</p>
<p>Nama User Penerima: {{ $DataAsiRequest->Users->name }}</p>
<p>Tanggal Melahirkan Pemilik: {{$DataAsiRequest->tanggal_melahirkan  }}</p>
@endforeach

<p>getAllAsiProductDashboardHistory</p>

<br><br><br><br>
<p>getAllAsiProductDashboardHistory</p>
   @foreach($getAllAsiProductDashboardHistory as $DataAsiHistory)

<p>Nama User Pemilik: {{ $DataAsiHistory->pemilik->name}}</p>
<p>Nama User Penerima: {{ $DataAsiHistory->Users->name }}</p>
<p>Tanggal Melahirkan Pemilik: {{$DataAsiHistory->tanggal_melahirkan  }}</p>
<p>Progress: {{ $DataAsiHistory->Users->pivot->progress }}</p>
@endforeach

<br><br><br><br>
<p>getAllAsiProductDashboardInProgress</p>
   @foreach($getAllAsiProductDashboardInProgress as $DataAsiInProgress)

<p>Nama User Pemilik: {{ $DataAsiInProgress->pemilik->name}}</p>
<p>ID User Pemilik: {{ $DataAsiInProgress->pemilik->id}}</p>
<p>Nama User Penerima: {{ $DataAsiInProgress->Users->name }}</p>
<p>Tanggal Melahirkan Pemilik: {{$DataAsiInProgress->tanggal_melahirkan  }}</p>
<p>Progress: {{ $DataAsiInProgress->Users->pivot->progress }}</p>
@endforeach