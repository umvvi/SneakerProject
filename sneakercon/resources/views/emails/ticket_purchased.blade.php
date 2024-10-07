
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Confirmation</title>
</head>
<body>
<h1>Ticket Purchased Successfully!</h1>
<p>Thank you, {{ $data['first_name'] }} {{ $data['last_name'] }}!</p>
<p>Your ticket type: {{ $data['ticket_type'] }}</p>
<p>Location: {{ $data['location'] }}</p>
<p>We look forward to seeing you at the event!</p>
</body>
</html>
