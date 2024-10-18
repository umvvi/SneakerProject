@component('mail::message')
    # Ticket Bevestiging

    Beste {{ $ticket->name }},

    Bedankt voor het bestellen van je ticket voor {{ $ticket->ticket_type }}.

    ### Event details:
    - Datum: {{ $ticket->event_date }}
    - Locatie: {{ $ticket->city }}

    Uw ticket is bijgevoegd in de e-mail.

    @component('mail::button', ['url' => route('home')])
        Bezoek onze site
    @endcomponent

    Bedankt,<br>
    {{ config('app.name') }}
@endcomponent
