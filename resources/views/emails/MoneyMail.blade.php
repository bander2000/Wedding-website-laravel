@component('mail::message')
# Payment recive from {{ $user->name }}

Amount: {{ $money->amount }} 



@component('mail::button', ['url' => config('app.url') , 'color'=>'green'])
Back To Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
