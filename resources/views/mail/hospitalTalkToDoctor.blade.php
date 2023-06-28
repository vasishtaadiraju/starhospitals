<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talk to a Doctor</title>
</head>

<body>
    <div>
        Greetings,<br /><br />

        You have received a lead from the Talk to a Doctor form. Here are the details.<br /><br />

        Name: {{ $name }}<br />
        Email: {{ $email }}<br />
        Contact: {{ $contact }}<br />
        Speciality: {{ $speciality }}<br />
        Message: {{ $query }}
    </div>
</body>

</html>
