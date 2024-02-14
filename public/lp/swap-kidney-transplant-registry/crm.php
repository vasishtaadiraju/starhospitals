<?php

if (isset($_POST['demail'])) {

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

    $dname = $_POST['dname'];
    $demail = $_POST['demail'];
    $dmobile = $_POST['dmobile'];
				$daddress = $_POST['raddress'];
    $dage = $_POST['dage'];
    $dblood_group = $_POST['dblood_group'];
    $drelation = $_POST['drelation'];
    $dmedical_history = $_POST['dmedical_history'];
    $rname = $_POST['rname'];
    $rage = $_POST['rage'];
    $rblood_group = $_POST['rblood_group'];
    $rrelation = $_POST['rrelation'];
    $rmedical_history = $_POST['rmedical_history'];
    $raddress = $_POST['raddress'];
    $rmobile = $_POST['rmobile'];
    $remail = $_POST['remail'];


    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $demail)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (strlen($error_message) > 0) {
        died($error_message);
    }
    
    // Constructing the email message with table structure
    $email_message = "
    <html>
    <head>
        <title>Form Details</title>
    </head>
    <body>
        <h2>Donor Details</h2>
        <table border='1'>
            <tr>
                <td>Name</td>
                <td>$dname</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>$demail</td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>$dmobile</td>
            </tr>
												<tr>
                <td>Age</td>
                <td>$dage</td>
            </tr>
            <tr>
                <td>Blood Group</td>
                <td>$dblood_group</td>
            </tr>
            <tr>
                <td>Relation</td>
                <td>$drelation</td>
            </tr>
												<tr>
												<td>Medical History</td>
												<td>$dmedical_history</td>
												</tr>
												<tr>
												<td>Address</td>
												<td>$daddress</td>
												</tr>
           
        </table>
        <h2>Recipient Details</h2>
        <table border='1'>
            <tr>
                <td>Name</td>
                <td>$rname</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>$remail</td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>$rmobile</td>
            </tr>
												<tr>
                <td>Age</td>
                <td>$rage</td>
            </tr>
            <tr>
                <td>Blood Group</td>
                <td>$rblood_group</td>
            </tr>
            <tr>
                <td>Dailysis Start Date</td>
                <td>$rrelation</td>
            </tr>
												<tr>
												<td>Medical History</td>
												<td>$rmedical_history</td>
												</tr>
													<tr>
												<td>Address</td>
												<td>$raddress</td>
												</tr>
												
        
        </table>
    </body>
    </html>";

    // Email headers
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: ' . $demail . "\r\n" .
        'Reply-To: ' . $demail . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Send email
    if (mail($email_to, $email_subject, $email_message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }

    header('Location: thank-you.html');

}

?>
