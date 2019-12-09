
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<!-- End Left Sidebar  -->
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
                                                                                        <?php
/**
 * This example shows how to handle a simple contact form.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    require 'autoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "cornellekacy4@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "cornellekacy456";
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('from@example.com', 'Site Contact');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('contact@fedex-usa.net', 'Contact');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['fname'])) {
        $mail->Subject = 'FedEx USA Contact';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
First Name: {$_POST['fname']}
Last Name: {$_POST['lname']}
Email: {$_POST['email']}
Phone Number: {$_POST['phone']}
Subject: {$_POST['subject']}
Message: {$_POST['message']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.'. $mail->ErrorInfo;
        } else {
            echo "<div class='alert alert-success'>
  <strong>Sent!</strong> Message successfully send, we will get back to you soon.
</div>";
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
?> 

        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-3">
                 
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-title">

                        </div>
                        <div class="basic-form">
                            <div class="basic-form">
                                <form  method="post" >
                                    <label><b>Jk Name</b></label>
                                    <input type="text" name="jkname" class="form-control" placeholder="Jk Name" required="">
                                </div>
                                <div class="form-group">
                                    <label><b>Jk Email</b></label>
                                    <input type="email" name="email" class="form-control" placeholder="Jk Email" required="">
                                </div>
                                <div class="form-group">
                                    <label><b>Quantity</b></label>
                                    <input type="text" name="gram" class="form-control" placeholder="Quantity" required="">
                                </div>
                                <div class="form-group">
                                    <label><b>Tracking Number</b></label>
                                    <input type="text" name="tracking" class="form-control" placeholder="Tracking Number" required="">
                                </div>
                                <button type="submit"class="btn btn-primary">Mail Tracking</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3">
         
        </div>
    </div>







    <!-- End PAge Content -->
    <?php include 'footer.php'; ?>