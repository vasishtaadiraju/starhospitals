<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video Consultation lead</title>
</head>

<body>
    <div>
        Greetings,<br /><br />

        You have received a lead from the Video Consultation form. Here are the details.<br /><br />

        First Name: {{ $firstname }}<br />
        Last Name: {{ $lastname }}<br />
        Guardian Name: {{ $guardian_name }}<br />
        Country code: {{ $country_code }}<br />
        Contact: {{ $contact }}<br />
        Email: {{ $email }}<br />
        Branch: {{ $branch }}<br />
        Centre of Excellence: {{ $coe }}<br />
        Speciality: {{ $speciality }}<br />
        Doctor: {{ $doctor }}<br />
        Date: {{ $date }}
    </div>
</body>

</html>
