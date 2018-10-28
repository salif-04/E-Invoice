<?php

echo '<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
        </head>
        </html>';

//require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';
require_once 'vendor/autoload.php';

//echo "inside emailer";
$cust_email = 'kiodeba11@gmail.com';
$name = 'Zanark';
$inv_id = 'INV000111';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465 , 'ssl'))
  ->setUsername('einvoice898@gmail.com')
  ->setPassword('admin@admin')
  ;

/*
You could alternatively use a different transport such as Sendmail:

// Sendmail
$transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');
*/

date_default_timezone_set("Asia/Calcutta");
$date = date("d/m/Y H:i:s");

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('The Invoice generated on ' . $date))
  ->setFrom(['einvoice898@gmail.com' => 'Alucard'])
  ->setTo([$cust_email => $name])
  ->setBody(" Record Time : " . $date . "\n\nThe pdf is attacthed with this email. \nThank you for choosing us." , 'text/plain')
  ;

$message->attach(Swift_Attachment::fromPath('../../../public/user_pdfs/' . $inv_id .'.pdf' ));

// Send the message
$result = $mailer->send($message);

if($result):
echo '<div class="wrapper">
                <nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="" style="color:#fff;">Assista</a>
                        </div>
                        
        
                    </div>
                </nav>
            </div>
            <div style="text-align: center; margin-top:100px;">
            <div class="alert alert-success text-center"><b>E-mail successfully sent</b </div><br/><br/>
            <a class="btn btn-dark" href="index.php">Choose next patient</a>  <a class="btn btn-success" href="index4.php">Continue</a>  
            </div>';//For email sent
else:
echo '<div class="wrapper">
                <nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="" style="color:#fff;">Assista</a>
                        </div>
                        
        
                    </div>
                </nav>
            </div>
            <div style="text-align: center; margin-top:100px;">
            <div class="alert alert-warning text-center"><b>E-mail failed to send</b </div><br/><br/>
            <a class="btn btn-dark" href="index.php">Choose next patient</a>  <a class="btn btn-warning" href="index3.php">Go back</a>  <a class="btn btn-success" href="index4.php">Continue</a>

            </div>';//For email not sent

endif;

?>