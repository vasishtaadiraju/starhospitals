<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>International Patient Enquiry Form</title>
</head>

<body>
    <div>
        Greetings,<br /><br />

        Thank you for choosing STAR Hospitals for your healthcare needs. Your form has been successfully submitted and
        received by our dedicated team. Here are the details.<br /><br />

        Name: {{ $name }}<br />
        Email: {{ $email }}<br />
        Country code: {{ $country_code }}<br />
        Contact: {{ $contact }}<br />
        Department: {{ $department }}<br />
        Report: <a href="https://{{ config('filesystems.disks.s3.bucket') }}.s3.amazonaws.com/{{ $report }}"
            target="_blank">View report</a><br /><br />

        Our expert professionals are now working diligently to review your information and provide you with the
        assistance you require.<br /><br />

        Our team will get back to you shortly.<br /><br />

        Thank you!
    </div>
</body>

</html>
