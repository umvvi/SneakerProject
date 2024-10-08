<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ticket Confirmation</title>
</head>
<body>
<h1>Thank you for purchasing a ticket, {{ $data->first_name }}!</h1>
<p>Here are the details of your ticket:</p>
<ul>
    <li><strong>Name:</strong> {{ $data->first_name }} {{ $data->last_name }}</li>
    <li><strong>Ticket Type:</strong> {{ $data->ticket_type }}</li>
    <li><strong>Location:</strong> {{ $data->location }}</li>
</ul>
<p>We look forward to seeing you at the event!</p>
</body>
</html>
