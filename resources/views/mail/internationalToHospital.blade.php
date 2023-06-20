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
        Hi team,<br /><br />

        We received a lead through international patient enquiry form.<br /><br />

        Name: {{ $name }}<br />
        Email: {{ $email }}<br />
        Country code: {{ $country_code }}<br />
        Contact: {{ $contact }}<br />
        Department: {{ $department }}<br />
        Report: <a href="https://{{ config('filesystems.disks.s3.bucket') }}.s3.amazonaws.com/{{ $report }}" target="_blank">View report</a>
    </div>
</body>

</html>
