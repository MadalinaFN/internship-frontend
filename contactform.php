<?php
error_reporting(0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$mail = new PHPMailer(true);

$output = '';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $checked = $_POST['newsletter'];

  if ($checked == true) {
    $newsletter = "Subscribed";
  } elseif ($checked == false) {
    $newsletter = "Unsubscribed";
  }

  $contact = $_POST['contact'];

  if ($contact == "1") {
    $how = "Phone";
  } elseif ($contact == "2") {
    $how = "Email";
  } elseif ($contact == "3") {
    $how = "Message";
  }

  $fileport = $_FILES['attachment']['tmp_name'];
  $filename = $_FILES['attachment']['name'];

  try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'in-v3.mailjet.com';                    //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '794c43c28af1fe51d3aa4763e1da42ca';     //SMTP username
    $mail->Password   = 'afc5a339e488960be5b5ed44d2b73053';     //SMTP password
    $mail->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom('larisanegrea5@gmail.com');
    $mail->addAddress('madalinanegrea40@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = "Message from Contact Form";
    $mail->Body    = "<h3>Name: $name <br>Email: $email <br>Phone: $phone <br>Message: $message
    <br>Newsletter: $newsletter <br>Contact by: $how</h3>";
    $mail->addAttachment($fileport, $filename);

    $result = $mail->send();
    $output = '<div class="alert alert-success">
    <h5>Thank you for contacting us!</h5>
  </div>';
  } catch (Exception $e) {
    $output = '<div class="alert alert-danger">
    <h5>' . $e->getMessage() . '</h5>
  </div>';
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <?php include "head&script/head.php"; ?>
</head>

<body>
  <?php include "navbar&footer/navbar.php"; ?>

  <div class="contactform">
    <div class="contact container" data-aos="zoom-in">
      <form enctype="multipart/form-data" action="#" method="POST">
        <h1 class="word"></h1>
        <h5><?= $output; ?></h5>
        <input class="inp" name="name" type="text" placeholder="Your Name" required>
        <input class="inp" name="email" type="email" placeholder="Your Email" required>
        <input class="inp" name="phone" type="phone" placeholder="Your Phone" required>
        <textarea name="message" placeholder="Message" rows="4" required></textarea>
        <div class="col-auto my-1">
          <div class="custom-control custom-checkbox mr-sm-2 margintop">
            <input name="newsletter" type="checkbox" class="custom-control-input" id="customControlAutosizing">
            <label class="custom-control-label fontsize" for="customControlAutosizing">Subscribe to our newsletter</label>
          </div>
        </div>
        <div class="col-auto my-4 margintop">
          <label class="mr-sm-2 fontsize" for="inlineFormCustomSelect">How do you want to be contacted?</label>
          <select name="contact" class="custom-select mr-sm-2 fontsize" id="inlineFormCustomSelect">
            <option selected>Choose...</option>
            <option value="1">Phone</option>
            <option value="2">Email</option>
            <option value="3">Message</option>
          </select>
        </div>
        <div class="form-group margintop fontsize">
          <label class="margin1" for="exampleFormControlFile1">Please attach your CV/resume in PDF format:</label>
          <input name="attachment" type="file" class="form-control-file modify" id="attachment">
        </div>
        <button type="submit" name="submit" value="Send" class="btn btn-danger btn-block" id="sendBtn">SEND MESSAGE</button>
      </form>
    </div>
  </div>

  <?php include "navbar&footer/footer.php"; ?>

  <?php include "head&script/script.php"; ?>
  <script>
    var words = ['CONTACT US FORM'],
      part,
      i = 0,
      offset = 0,
      len = words.length,
      forwards = true,
      skip_count = 0,
      skip_delay = 15,
      speed = 100;
    var wordflick = function() {
      setInterval(function() {
        if (forwards) {
          if (offset >= words[i].length) {
            ++skip_count;
            if (skip_count == skip_delay) {
              forwards = false;
              skip_count = 0;
            }
          }
        } else {
          if (offset == 0) {
            forwards = true;
            i++;
            offset = 0;
            if (i >= len) {
              i = 0;
            }
          }
        }
        part = words[i].substr(0, offset);
        if (skip_count == 0) {
          if (forwards) {
            offset++;
          } else {
            offset--;
          }
        }
        $('.word').text(part);
      }, speed);
    };

    $(document).ready(function() {
      wordflick();
    });
  </script>
</body>

</html>