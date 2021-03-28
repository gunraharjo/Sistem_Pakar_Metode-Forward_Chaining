@component('mail::message')
# Welcome,

Hi ini adalah hasil diagnosa kamu.

@component('mail::button', ['url' => config('app.url').'/cetak'."/".$data["data"]."/edit" ])
Download PDF
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
