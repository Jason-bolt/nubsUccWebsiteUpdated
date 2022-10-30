@component('mail::message')
# {{ $message_type }}

A message from {{ $last_name }} {{ $other_names }} with the email address {{ $email_address }}.

{{ $message }}

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

{{--Thanks,<br>--}}
{{ config('app.name') }}
@endcomponent
