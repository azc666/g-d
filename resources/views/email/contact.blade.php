@component('mail::message')
# {{ $name }},
# Your Message Has been sent!
We will be in contact ASAP!

{{ $name }}  ({{ $email }}) submitted a message.<br>
Subject: {{ $subject }}

@component('mail::panel')
{{ $name }} says:<br>
  {{ $message }}
@endcomponent

@component('mail::button', ['url' => route('contactus')])
Reply to this email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
