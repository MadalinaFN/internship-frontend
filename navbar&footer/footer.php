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

<body>

  <footer>
    <div class="footer">
      <div class="contact container" data-aos-once="true" data-aos="zoom-in">
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
              <option value="1">Phone</option>
              <option value="2">Email</option>
              <option value="3">Message</option>
            </select>
          </div>
          <div class="form-group margintop fontsize row">
            <div class="col-md-5">
              <label class="margin1" for="exampleFormControlFile1">Please attach your CV/resume in PDF format:</label>
            </div>
            <div class="col-md-5">
              <input name="attachment" type="file" class="form-control-file modify" id="attachment">
            </div>
          </div>
          <button type="submit" name="submit" value="Send" class="btn btn-danger btn-block" id="sendBtn">SEND MESSAGE</button>
        </form>
      </div>
      <div class="container">
        <div class="row marginbutton1">
          <div class="col-md text-center background">
            <a href="tel:800-311-7340" class="text-white textdec"><img class="img-padding" src="Imagini/Call.png" alt="call"> Call
              800-311-7340</a>
          </div>
          <div class="col-md text-center background">
            <a href="#" class="text-white textdec"><img class="img-padding" src="Imagini/Get Started.png" alt="get-started">
              Get
              Started</a>
          </div>
          <div class="col-md text-center background">
            <a href="#" class="text-white textdec"><img class="img-padding" src="Imagini/Live Chat.png" alt="live-chat">Live
              Chat</a>
          </div>
        </div>
      </div>

      <div class="container pb-5 pb-0">
        <div class="row textalgncenter">
          <div class="col-md margright text-center">
            <a href="index.php" target="_blank"><img class="padlogo1" src="Imagini/Img1Footer.png" alt="call"></a>
            <p><img class="padlogo2" src="Imagini/Img2Footer.png" alt="call"></p>
            <p>
              <img class="padlogo3" src="Imagini/Img3Footer.png" alt="call">
              <img class="padlogo4" src="Imagini/Img4Footer.png" alt="call">
            </p>
          </div>
          <div class="col-md mt-4 ml-3">
            <h5 class=" mb-4 font-weight-bold text-white">
              Residential
            </h5>
            <p class="marginbottom">
              <a href="#" class="colortext">Bundles</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Internet</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">TV</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Phone</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Rural Internet</a>
            </p>
            <h5 class=" mb-4 font-weight-bold text-white mt-5">
              Contact
            </h5>
            <p class="marginbottom">
              <a href="#" class="colortext">Customer Service</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Advertise with Us</a>
            </p>
          </div>

          <div class="col-md mt-4 ml-3">
            <h5 class="mb-4 font-weight-bold text-white">Business</h5>
            <p class="marginbottom">
              <a href="#" class="colortext">SMB Solutions</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Large-to-Enterprise Solutions</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Business Internet</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Business TV</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Business Phone</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Managed IT</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Phone Systems</a>
            </p>
          </div>

          <div class="col-md mt-4 ml-3">
            <h5 class=" mb-4 font-weight-bold text-white">
              Support
            </h5>
            <p class="marginbottom">
              <a href="#" class="colortext">Help Center</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Availability</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Service Outages</a>
            </p>
            <h5 class=" mb-4 font-weight-bold text-white mt-5">
              Corporate
            </h5>
            <p class="marginbottom">
              <a href="#" class="colortext">Company</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Careers</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Policy Center</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">News (Blog)</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Management Team</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Board of Directors</a>
            </p>
          </div>

          <div class="col-md mt-4 ml-3">
            <h5 class="mb-4 font-weight-bold text-white">Locations</h5>
            <p class="marginbottom">
              <a href="#" class="colortext">Adrian</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Blissfield</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Dundee</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Petersburg</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Tecumseh</a>
            </p>
          </div>

          <div class="col-md mt-4 ml-3">
            <h5 class="mb-4 font-weight-bold text-white">Get Started</h5>
            <h5 class="mb-4 font-weight-bold text-white">Service Area</h5>
            <a href="#!" role="button"><img class="" src="Imagini/YTLogo.png"></img></a>
            <a href="#!" role="button"><img class="" src="Imagini/inlogo.png"></img></a>
            <a href="#!" role="button"><img class="" src="Imagini/TwitterLogo.png"></img></a>
            <a href="#!" role="button"><img class="" src="Imagini/FBLogo.png"></img></a>
          </div>
        </div>
      </div>

      <div class="container2">
        <div class="text-center p-3 border-top border-dark">
          <p class="colortext1">© 2019 D & P Communications. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>