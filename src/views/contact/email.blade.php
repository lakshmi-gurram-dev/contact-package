@component('mail::message')
# Introduction
This messgae from {{$name}}

MSG :: {{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
