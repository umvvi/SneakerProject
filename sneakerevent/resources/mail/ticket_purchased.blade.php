<!DOCTYPE html>
<html>
<head>
    <title>Ticket Purchase Confirmation</title>
</head>
<body>
<h1>Thank you for your purchase, {{ $ticket->visitor->name }}!</h1>
<p>Your ticket for the event "{{ $ticket->event->name }}" has been confirmed.</p>

<p><strong>Event:</strong> {{ $ticket->event->name }}</p>
<p><strong>Date:</strong> {{ $ticket->event->date }}</p>
<p><strong>Entry Time:</strong> {{ $ticket->entry_time }}</p>
<p><strong>Number of Tickets:</strong> {{ $ticket->number_of_tickets }}</p>

<p>Attached is your ticket in PDF format. Please bring it with you to the event.</p>

<p>We look forward to seeing you there!</p>
</body>
</html>
