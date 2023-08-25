<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request Callback</title>
</head>

<body>
    <div>
        Greetings,<br /><br />

        You have received a lead from the Request a Callback form. Here are the details.<br /><br />

        Name: {{ $name }}<br />
        Email: {{ $email }}<br />
        Contact: {{ $contact }}<br />
        Department: {{ $department }}<br />
        Date: {{ $date }}<br />
        @if ($doctor)
            Doctor: {{ $doctor }}<br />
        @endif
        @if ($branch)
            Branch: {{ $branch }}
        @endif
    </div>
</body>

</html>
