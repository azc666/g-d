@component('mail::message')
# Your Message Confirmation

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
