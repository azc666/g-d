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

{{-- @component('mail::button', ['url' => route('contactus')]) --}}
@component('mail::button', ['url' => \URL::to('https://www.g-d.com/contactus')])
LEAVE ANOTHER MESSAGE
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
