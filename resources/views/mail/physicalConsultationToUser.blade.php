<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Physical Consultation Confirmation</title>
</head>

<body>
    <div>
        Greetings,<br /><br />

        Thank you for choosing STAR Hospitals for your healthcare needs. Your request has been successfully submitted
        and received by our dedicated team. Here are the details.<br /><br />

        Appointment ID: {{ $appointment_id }}<br />
        Patient ID: {{ $patient_id }}<br />
        Patient Name: {{ $patient_name }}<br />
        Patient Email: {{ $patient_email }}<br />
        Doctor: {{ $doctor }}<br />
        Location: {{ $location }}<br />
        Speciality: {{ $speciality }}<br />
        Appointment Date: {{ $appointment_date }}<br />
        Appointment Time: {{ $appointment_time }}<br /><br />

        Our expert professionals are now working diligently to review your information and provide you with the
        assistance you require.<br /><br />

        Our team will get back to you shortly.<br /><br />

        Thank you!
    </div>
</body>

</html>
