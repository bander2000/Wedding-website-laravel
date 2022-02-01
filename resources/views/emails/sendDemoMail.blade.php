@component('mail::message')
# Infromation recive from {{ $user->name }}


**comment:** {{  $information->comment  }} 

**Attend:** {{ $information->attend }} 

**Number of Gustes:** {{ $information->Numberofguests }} 


@component('mail::button', ['url' => config('app.url') , 'color'=>'green'])
Back To Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
