<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>

<body>
    <div>
        Greetings,<br /><br />

        You have received a lead from the Contact Us form. Here are the details.<br /><br />

        Type: {{ ucfirst($type) }}<br />
        Name: {{ $name }}<br />
        Email: {{ $email }}<br />
        Contact: {{ $contact }}<br />
        Subject: {{ $sub }}<br />
        Message: {{ $query }}
    </div>
</body>

</html>
