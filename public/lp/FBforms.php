<?php
$name = $_POST['Name']; // required
$phone = $_POST['Phone']; // required
$Adset = $_POST['Adset']; // required
$Leadsrc = $_POST['Leadsrc']; // required
$Email = $_POST['Email']; // required

$payload_json['name'] = $name;
$payload_json['email'] = $Email;
$payload_json['phone'] = $phone;
$payload_json['business_id'] = "17";
$payload_json['utm_source'] = $Leadsrc;
$payload_json['utm_medium'] = "FacebookForm";
$payload_json['utm_campaign'] = $Adset;
$payload_json['utm_adgroup'] = '';
$payload_json['utm_term'] = '';
$payload_json['status'] = '1';
$payload_json['lead_by'] = '2';


 $url='https://digileadstudios.com/api/addvmnlead';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload_json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $result = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($result);

//header('Location: thank-you.php');
?>
