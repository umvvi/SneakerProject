<!DOCTYPE html>
<html>
<head>
    <title>Your Ticket</title>
    <style>
        /* Add custom styles for the PDF */
    </style>
</head>
<body>
<h1>Event Ticket</h1>
<p><strong>Event:</strong> {{ $ticket->event->name }}</p>
<p><strong>Date:</strong> {{ $ticket->event->date }}</p>
<p><strong>Entry Time:</strong> {{ $ticket->entry_time }}</p>
<p><strong>Number of Tickets:</strong> {{ $ticket->number_of_tickets }}</p>
<p><strong>Attendee:</strong> {{ $ticket->visitor->name }}</p>
</body>
</html>
