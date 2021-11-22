@component('mail::message')
# Halo!

Terimakasih sudah berdonasi ke Sumbang Asih, semua donasi anda sangat berharga untuk orang yang membutuhkan.

ID Donasi: {{$transactionId}}

Berikut adalah link pembayaran donasi anda bila ingin membayar di lain waktu.

@component('mail::button', ['url' => $midtransUrl])
Bayar donasi
@endcomponent

Atau anda dapat mengcopy paste URL ini apabila anda tidak dapat menekan tombol diatas [{{$midtransUrl}}]({{$midtransUrl}})

Bila anda sudah membayar, anda dapat mengabaikan email ini

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
