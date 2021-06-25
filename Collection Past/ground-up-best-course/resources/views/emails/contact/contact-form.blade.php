@component('mail::message')

# Thank you for your message
<!-- Using the public $data -->
<strong>Name</strong> {{ $data['name'] }}
<strong>Email</strong> {{ $data['email'] }}
<strong>Message</strong>
{{ $data['message'] }}

@endcomponent
