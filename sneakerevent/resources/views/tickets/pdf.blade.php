<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket PDF</title>
</head>
<body>
<h1>{{ $ticket->ticket_type }}</h1>
<p>Naam: {{ $ticket->name }}</p>
<p>Event datum: {{ $ticket->event_date }}</p>
<p>Locatie: {{ $ticket->city }}</p>
</body>
</html>
