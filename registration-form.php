<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_time = $_POST['time'];
$field_message = $_POST['message'];

$mail_to = 'kevinsun0@gmail.com';
$subject = 'Adagio Reservation for '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Your private Adagio relaxation room is reserved! Come to your local Adagio to begin your reservation.');
        window.location = 'index.html';
    </script>
    <?php
}
else { ?>
        <script language="javascript" type="text/javascript">
            alert('Whoops! Something went wrong. Please send an email to kevinsun0@gmail.com for troubleshooting. Sorry for the inconvenience!');
            window.location = 'index.html';
        </script>
        <?php
}
?>