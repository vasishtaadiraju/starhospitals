<?php
if ( isset( $_POST[ 'email' ] ) ) {

    $email_to = "info@starhospitals.in";
    $email_subject = "Orthopedics at Star Hospitals";

    function died( $error ) {
      echo "We are very sorry, but there were error(s) found with the form you submitted. ";
      echo "These errors appear below.<br /><br />";
      echo $error . "<br /><br />";
      echo "Please go back and fix these errors.<br /><br />";
      die();
    }

    $name = $_POST[ 'name' ];
    $email = $_POST[ 'email' ];
    $mobile = $_POST[ 'mobile' ];
     $utm_source = $_POST[ 'utm_source' ];
    $utm_medium = $_POST[ 'utm_medium' ];
    $utm_campaign = $_POST[ 'utm_campaign'];
 

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if ( !preg_match( $email_exp, $email ) ) {
      $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if ( strlen( $error_message ) > 0 ) {
      died( $error_message );
    }
    $email_message = "Form details below.\n\n";

    function clean_string( $string ) {
      $bad = array( "content-type", "bcc:", "to:", "cc:", "href" );
      return str_replace( $bad, "", $string );
    }

    $email_message .= "Name: " . clean_string( $name ) . "\n";
    $email_message .= "Email: " . clean_string( $email ) . "\n";
    $email_message .= "Mobile: " . clean_string( $mobile ) . "\n";
    
    $headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    @mail( $email_to, $email_subject, $email_message, $headers );
    
    $payload_json['name'] = $name;
    $payload_json['email'] = $email;
    $payload_json['phone'] = $mobile;
    $payload_json['business_id'] = "17";
    $payload_json['utm_source'] = $utm_source;
    $payload_json['utm_medium'] = $utm_medium;
    $payload_json['utm_campaign'] = $utm_campaign;
    $payload_json['utm_adgroup'] = '';
    $payload_json['utm_term'] = '';
    $payload_json['status'] = '1';
    $payload_json['lead_by'] = '3';

      $url='https://digileadstudios.com/api/addvmnlead';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload_json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $result = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($result);

    header( 'Location: thank-you.php' );
     } ?>
