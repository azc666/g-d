@component('mail::message')
# New Contact Message

Someone submitted the contact form.<br>
Subject: {{ $subject }}

@component('mail::panel')
{{ $name }} says:<br>
  {{ $message }}
@endcomponent

@component('mail::button', ['url' => route('contact')])
Reply to this email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
