@component('mail::message')
# Welcome

Hi, kamu meminta untuk mengganti password, ini password sementara kamu

@component('mail::promotion')
<h1 style="color:#1e90ff;font-size:2em;">{{$data['data']}}</h1>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
