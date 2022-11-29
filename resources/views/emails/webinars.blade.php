{{-- <x-mail::message>
    # Introduction

    The body of your message.

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message> --}}

@component('mail::message')
# Welcome to the SR Asia Indonesia Webinar
Dear Sir/Madam {{$email}},
You will be joining on Webinar SR Asia Indonesia “Digging to the Root of Sustainability Report” which will be held on:

Day 1
<br>
Date : Thursday, December 15th 2022
<br>
Time : 15.00-16.00 WIB
<br>
Topic : Sustainability Report? What a hurly burly

Day 2
<br>
Date : Friday, December 16th 2022
<br>
Time : 15.00-16.00 WIB
<br>
Topic : Assurance: Exploring the Terrence

Link zoom meeting:
https://us06web.zoom.us/j/7310098758?pwd=SXhyVkozSm5WY1JGejc3SStBQ3Z2UT09

Meeting ID: 731 009 8758
Passcode: NewUnity


Note:
<br>
• Please join the room zoom meeting 30 minutes before
<br>
• Please use virtual background attached to this email

If there is any inquiry, please don’t hesitate to address it by replying to this e-mail.
@component('mail::button', ['url' => 'https://srasia-indo.com'])
SR Asia Indonesia
@endcomponent
Thank you.,<br>
{{-- {{ config('app.name') }} --}}
SR Asia Indonesia
@endcomponent