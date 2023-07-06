<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Physical Consultation lead</title>
</head>

<body>
    <div>
        Greetings,<br /><br />

        You have received a lead from Physical Consultation. Here are the details.<br /><br />

        Appointment ID: {{ $appointment_id }}<br />
        Patient ID: {{ $patient_id }}<br />
        Patient Name: {{ $patient_name }}<br />
        Patient Email: {{ $patient_email }}<br />
        Doctor: {{ $doctor }}<br />
        Location: {{ $location }}<br />
        Speciality: {{ $speciality }}<br />
        Appointment Date: {{ $appointment_date }}<br />
        Appointment Time: {{ $appointment_time }}<br />
    </div>
</body>

</html>
