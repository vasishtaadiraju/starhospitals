<?php

if (isset($_POST['email'])) {

    $email_to = "sajid@digilitics.in";
    $email_subject = "Star Hospitals";

    function died($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error . "<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (strlen($error_message) > 0) {
        died($error_message);
    }

    // Email message with logo and details in a table structure
    $email_message = "
    <html>
    <head>
        <title>Contact Details</title>
    </head>
    <body>
        <table width='100%' border='0' cellspacing='0' cellpadding='10'>
            
            <tr>
                <td><strong>Name:</strong></td>
                <td>$name</td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td>$email</td>
            </tr>
            <tr>
                <td><strong>Mobile:</strong></td>
                <td>$mobile</td>
            </tr>
        </table>
    </body>
    </html>";

    // Email headers
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Send email
    if (mail($email_to, $email_subject, $email_message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }

    // Constructing payload for API call
    $payload_json['business_id'] = $_POST['business_id'];
    $payload_json['service_id'] = $_POST['service_id'];
    $payload_json['name'] = $_POST['name'];
    $payload_json['email'] = $_POST['email'];
    $payload_json['phone'] = $_POST['mobile'];
    $payload_json['status'] = $_POST['status'];
    $payload_json['call_status'] = $_POST['call_status'];
    $payload_json['location_id'] = $_POST['location_id'];
    $payload_json['utm_source'] = $_POST['utm_source'];
    $payload_json['utm_term'] = $_POST['utm_term'];
    $payload_json['utm_campaign'] = $_POST['utm_campaign'];
    $payload_json['utm_medium'] = $_POST['utm_medium'];
    $payload_json['lead_by'] = $_POST['lead_by'];

    // Making API call to add lead
    $url = 'https://digileadstudios.com/api/addvmnlead';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload_json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $result = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($result);

    header('Location: thank-you.html');
}
?>
