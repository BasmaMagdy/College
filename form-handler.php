<?
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_form = 'ahmedmagdy92@yahoo.com';
    $email_subject = 'New Form Submission';
    $email_body = 'User Name : $name.\n'.
                  'User email : $visitor_email.\n'.
                  'Subject : $subject.\n'.
                  'User message : $message.\n';

    $to = 'basma.magdy998@gmail.com';

    $headers = "From: $email_form \r\n";

    $headers .= "Replay-To:  $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("location: contact.html");
?>
