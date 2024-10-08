<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Stand Rented Confirmation</title>
</head>
<body>
<h1>Your stand has been successfully rented!</h1>
<p>Thank you for renting a stand. Here are your stand details:</p>
<ul>
    <li><strong>Stand Level:</strong> {{ $data->stand_level }}</li>
    <li><strong>Location:</strong> {{ $data->location }}</li>
</ul>
<p>We are excited to have you at SneakerCon!</p>
</body>
</html>
