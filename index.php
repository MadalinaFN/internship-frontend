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
    $mail->Body    = "Name: $name <br>Email: $email <br>Phone: $phone <br>Message: $message
    <br>Newsletter: $newsletter <br>Contact by: $how";
    $mail->addAttachment($fileport, $filename);

    $result = $mail->send();
    $output = '<div class="alert alert-success text-center">
    <h5>Thank you for contacting us!</h5>
    <h5 class="counting"">Please, wait a few seconds... </h5>
    </div>';
  } catch (Exception $e) {
    $output = '<div class="alert alert-danger">
    <h5>' . $e->getMessage() . '</h5>
  </div>';
  }

  if (isset($_POST['submit'])) {
?>
    <script type="text/javascript">
      window.location = "http://internship-frontend/#footer";
      setTimeout(function() {
        window.location.href = 'http://internship-frontend';
      }, 5100);
    </script>
<?php
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

  <div class="struct1">
    <div class="container">
      <h3 class="font line-space" data-aos-once="true" data-aos="fade-down">WELCOME TO D & P COMMUNICATIONS</h3>
      <div class="style">
        <div class="row">
          <div class="col-xl">
            <h1 class="subt line-sp margin" data-aos-once="true" data-aos="fade-right">Connecting You to What Matters</h1>
          </div>
          <div class="col-xl">
            <p class="text lines text-struct1 margin" data-aos-once="true" data-aos="fade-left">D & P Communications serves residents and
              businesses with a full suite of communication & technology services, including high-speed Internet,
              video entertainment, phone systems, and network management.
            </p>
          </div>
        </div>
      </div>
      <div class="row marginbutton">
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
  </div>

  <div class="struct2 paddingbutton">
    <div class="container pad">
      <h3 class="title col-md-7" data-aos-once="true" data-aos="fade-down">FIBER OPTICS</h3>
      <h1 class="subtit col-md-7">Enjoy the Most Advanced Technology Available with Fiber Optics</h1>
      <p class="text lines text-struct2 col-md-6" data-aos-once="true" data-aos="flip-right">We are continuously expanding and maintaining thousands of miles of
        fiber optic cabeling woven together by a grid of dozens of points of presence and data centers housing smart
        carrier grade switches and routers, connecting the communities we serve to each other and to people and
        places around the globe. We are connected to the Internet backbone at multiple peering points in Chicago,
        Southfield, and Toledo.
      </p>
      <img class="img-fluid img2-style" src="Imagini/Img2.png">
    </div>
  </div>

  <div class="struct3">
    <div class="container" data-aos-once="true" data-aos="zoom-in">
      <div class="style3">
        <img class="img3-style" src="Imagini/ImgCasa.png">
        <div class="padding">
          <h3 class="title col-md-7">HOMES SERVED</h3>
          <h1 class="subtit textdark col-md-12">Serving Over 50,000 Residential Users</h1>
          <p class="lines text textdark text-struct3 col-md-11">We are happy to serve over 9,000 homes and 20,000
            residents
            with Internet, video entertainment, and phone services. This includes residents in the towns of Lenawee
            and Western Monroe counties, as well as remote residences and farms throughout the area. We currently
            offer up to 500 Mbps Internet download speeds in the towns and up to 50 Mbps Internet download speeds in
            remote areas. For video entertainment, we offer many options for every budget and viewing style.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="struct4">
    <div class="container text-center">
      <h3 class="title style4" data-aos-once="true" data-aos="fade-down">LOCAL BUSINESSES SERVED</h3>

      <h1 class="subtit textdark">Serving Over 1,300 Businesses</h1>

      <p class="lines textdark text text-struct4" data-aos-once="true" data-aos="flip-right">We are proud to serve over 1,300 commercial entities in
        the local area, including small-to-large businesses, hospital systems, K-12 school districts, higher
        education,
        non-profits, manufacturing and municipalities including:
      </p>
    </div>
    <div class="container-fluid">
      <div id="mySwiper1" class="swiper grayscale">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="Imagini/Promedica Logo.png"></div>
          <div class="swiper-slide"><img src="Imagini/Promedica Logo.png"></div>
          <div class="swiper-slide"><img src="Imagini/Promedica Logo.png"></div>
          <div class="swiper-slide"><img src="Imagini/Promedica Logo.png"></div>
          <div class="swiper-slide"><img src="Imagini/Promedica Logo.png"></div>
          <div class="swiper-slide"><img src="Imagini/Promedica Logo.png"></div>
        </div>
        <div id="swbn1" class="swiper-button-next"></div>
        <div id="swbp1" class="swiper-button-prev"></div>
      </div>
    </div>
  </div>

  <div class="struct5">
    <div class="container">
      <h3 class="title style-title5" data-aos-once="true" data-aos="fade-down">COMMUNITY PARTNERS</h3>

      <h1 class="subtit textdark">Conecting to Our Community</h1>

      <p class="lines textdark text text-struct" data-aos-once="true" data-aos="flip-right">Our community partners are a key element of our brand. D & P
        Communications is honored to work with over 200
        local organizations and associations, including:
      </p>
    </div>
    <div class="container-fluid">
      <div id="mySwiper" class="swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img class="img-swiper1" src="Imagini/Goodwill_Industries_Logo.png"></div>
          <div class="swiper-slide"><img class="img-swiper2" src="Imagini/lenaweelogo.png"></div>
          <div class="swiper-slide"><img class="img-swiper3" src="Imagini/The_Salvation_Army.png"></div>
          <div class="swiper-slide"><img class="img-swiper4" src="Imagini/CIS_Petersburg.png"></div>
          <div class="swiper-slide"><img class="img-swiper5" src="Imagini/MDA_logo.png"></div>
          <div class="swiper-slide"><img class="img-swiper6" src="Imagini/Habitat_for_humanity.png"></div>
          <div class="swiper-slide"><img class="img-swiper7" src="Imagini/ACLClogo.png"></div>
          <div class="swiper-slide"><img class="img-swiper1" src="Imagini/Goodwill_Industries_Logo.png"></div>
          <div class="swiper-slide"><img class="img-swiper2" src="Imagini/lenaweelogo.png"></div>
          <div class="swiper-slide"><img class="img-swiper3" src="Imagini/The_Salvation_Army.png"></div>
          <div class="swiper-slide"><img class="img-swiper4" src="Imagini/CIS_Petersburg.png"></div>
          <div class="swiper-slide"><img class="img-swiper5" src="Imagini/MDA_logo.png"></div>
          <div class="swiper-slide"><img class="img-swiper6" src="Imagini/Habitat_for_humanity.png"></div>
          <div class="swiper-slide"><img class="img-swiper7" src="Imagini/ACLClogo.png"></div>
        </div>
        <div id="swbn2" class="swiper-button-next grayscale"></div>
        <div id="swbn2" class="swiper-button-prev grayscale"></div>
      </div>
    </div>
  </div>

  <div class="struct6">
    <div class="container text-center">
      <h3 class="title style-title5" data-aos-once="true" data-aos="fade-down">FIBER OPTICS</h3>

      <h1 class="subtit subt-width">Bringing You a Faster, More Reliable Network with Fiber Optics</h1>

      <p class="lines text text-struct" data-aos-once="true" data-aos="flip-right">You deserve the highest levels of availability and performance - and we're
        here
        to
        exceed your expectations. Welcome to D & P Communications.
      </p>
      <div class="row">
        <div class="col-md-6 pos-image" data-aos-once="true" data-aos="zoom-in">
          <div class="img-pad">
            <img src="Imagini/Img6.1.png">
            <button class="button1 btn font-weight-bold" type="button">For Homes</button>
          </div>
        </div>
        <div class="col-md-6 pos-image" data-aos-once="true" data-aos="zoom-in">
          <div class="img-pad">
            <img src="Imagini/Img6.2.png">
            <button class="button1 btn font-weight-bold" type="button">For Businesses</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="struct7">
    <div class="container">
      <div class="text-center">
        <h3 class="title style-title7" data-aos-once="true" data-aos="fade-down">LOCALLY INVESTED</h3>

        <h1 class="subtit subt-width">We're In Your Neighborhood</h1>

        <p class="lines text text-struct" data-aos-once="true" data-aos="flip-right">You deserve the highest levels of availability and performance - and we're
          here
          to exceed your expectations. Welcome to D & P Communications.
        </p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row mx-auto justify-content-center">
        <div class="text-image7">
          <div class="col-md padding7">
            <img src="Imagini/Adrian.png">
            <div class="centered">ADRIAN</div>
          </div>
        </div>
        <div class="text-image7">
          <div class="col-md padding7">
            <img src="Imagini/Blissfield.png">
            <div class="centered">BLISSFIELD</div>
          </div>
        </div>
        <div class="text-image7">
          <div class="col-md padding7">
            <img src="Imagini/Dundee.png">
            <div class="centered">DUNDEE</div>
          </div>
        </div>
        <div class="text-image7">
          <div class="col-md padding7">
            <img src="Imagini/Petersburg.png">
            <div class="centered">PETERSBURG</div>
          </div>
        </div>
        <div class="text-image7">
          <div class="col-md padding7">
            <img src="Imagini/Tecumseh.png">
            <div class="centered">TECUMSEH</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="struct8">
    <div class="container text-center">
      <h3 class="title style-title7" data-aos-once="true" data-aos="fade-down">SUCCESS STORIES</h3>
      <h1 class="subtit subt-width1">Find Out What People Are Saying About D & P Communications</h1>
      <p class="lines text text-struct textdark" data-aos-once="true" data-aos="flip-right">Our mission is to serve you. It's all about our community. Find out
        what
        others are saying about their experiences with D & P Communications.
      </p>
      <button class="button1 btn font-weight-bold btn-margin" type="button">Read Testimonials</button>
    </div>
    <div class="container">
      <div class="card-columns">
        <div class="card" data-aos-once="true" data-aos="fade-up">
          <img class="card-img-top" src="Imagini/Img8.1.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title subtit text-center textdark margtop line-height">"I Can Use Multiple Devices without
              Interruption"</h3>
            <h5 class="title line text-center">Review from Lexi Murray</h5>
            <p class="cardtext1 lines">D & P Communications has been my service provider for several years following
              their buyout of TC3net. They have excellent customer service at their local service locations. They have
              great Internet service, which is reliable and with the new fiber optic lines installed and high DSL, I
              am able to work from home for my clients without interruptions and run multiple devices on my home Wi-Fi
              systems withoyt lag time.
            </p>
            <p class="cardtext1 lines">The folks at D&P are knowledgeable and very customer service
              orientated. I would recommend their services to anyone new to the area!
            </p>
          </div>
        </div>
        <div class="card" data-aos-once="true" data-aos="fade-up">
          <img class="card-img-top" src="Imagini/Img8.3.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title subtit text-center textdark cardwidth margtop line-height">"Great Reliable Service"
            </h3>
            <h5 class="title line text-center">Review from Kevon Binder</h5>
            <p class="cardtext3 lines">We have D & P for our home in Blissfield. Great reliable service! Also have a
              business account in Tecumseh for symmetrical fiber, and it's been almost 100% without interruption. The
              one time we slowed speed for a couple hours, we were warned 48hrs in advance. Great company!
            </p>
          </div>
        </div>
        <div class="card" data-aos-once="true" data-aos="fade-up">
          <img class="card-img-top" src="Imagini/Img8.2.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title subtit text-center textdark cardwidth margtop line-height">"Wish I'd Switched to D &
              P Sooner"</h3>
            <h5 class="title line text-center">Review from Robert S.</h5>
            <p class="cardtext2 lines">Fantastic! D&P advertised 110 MBPS download. I am getting - through
              my router 107 MBPS. Upload speed is 23 MBPS. Can't argue with that can you? Compare to Frontier DSL
              which was 3.5 MBPS download (they promised 10 I think) and 0.25 MBPS upload. Pathetic! They started out
              with at about 8.5 MBPS and then after a couple weeks I was lucky to hit 4 MBPS! This was after they
              begged for me to stay with them! Well finally I switched. I wish I would have done it sooner! D&P came
              out, installed the equipment quickly an efficiently. The installer was knowledgeable and professional.
              They arrived around the time they said they would - a little earlier actually. I'm so happy! I'll update
              later if anything changes but, freak'n awesome so far...
            </p>
          </div>
        </div>
        <div class="card" data-aos-once="true" data-aos="fade-up">
          <img class="card-img-top" src="Imagini/Img8.2.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title subtit text-center textdark cardwidth margtop line-height">"Wish I'd Switched to D &
              P Sooner"
            </h3>
            <h5 class="title line text-center">Review from Robert S.</h5>
            <p class="cardtext2 lines">Fantastic! D&P advertised 110 MBPS download. I am getting - through
              my router 107 MBPS. Upload speed is 23 MBPS. Can't argue with that can you? Compare to Frontier DSL
              which was 3.5 MBPS download (they promised 10 I think) and 0.25 MBPS upload. Pathetic! They started out
              with at about 8.5 MBPS and then after a couple weeks I was lucky to hit 4 MBPS! This was after they
              begged for me to stay with them! Well finally I switched. I wish I would have done it sooner! D&P came
              out, installed the equipment quickly an efficiently. The installer was knowledgeable and professional.
              They arrived around the time they said they would - a little earlier actually. I'm so happy! I'll update
              later if anything changes but, freak'n awesome so far...
            </p>
          </div>
        </div>
        <div class="card" data-aos-once="true" data-aos="fade-up">
          <img class="card-img-top" src="Imagini/Img8.2.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title subtit text-center textdark cardwidth margtop line-height">"Wish I'd Switched to D &
              P Sooner"</h3>
            <h5 class="title line text-center">Review from Robert S.</h5>
            <p class="cardtext2 lines">Fantastic! D&P advertised 110 MBPS download. I am getting - through
              my router 107 MBPS. Upload speed is 23 MBPS. Can't argue with that can you? Compare to Frontier DSL
              which was 3.5 MBPS download (they promised 10 I think) and 0.25 MBPS upload. Pathetic! They started out
              with at about 8.5 MBPS and then after a couple weeks I was lucky to hit 4 MBPS! This was after they
              begged for me to stay with them! Well finally I switched. I wish I would have done it sooner! D&P came
              out, installed the equipment quickly an efficiently. The installer was knowledgeable and professional.
              They arrived around the time they said they would - a little earlier actually. I'm so happy! I'll update
              later if anything changes but, freak'n awesome so far...
            </p>
          </div>
        </div>
        <div class="card" data-aos-once="true" data-aos="fade-up">
          <img class="card-img-top" src="Imagini/Img8.3.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title subtit text-center textdark cardwidth margtop line-height">"Great Reliable Service"
            </h3>
            <h5 class="title line text-center">Review from Kevon Binder</h5>
            <p class="cardtext3 lines">We have D & P for our home in Blissfield. Great reliable service! Also have a
              business account in Tecumseh for symmetrical fiber, and it's been almost 100% without interruption. The
              one time we slowed speed for a couple hours, we were warned 48hrs in advance. Great company!
            </p>
          </div>
        </div>
        <div class="card" data-aos-once="true" data-aos="fade-up">
          <img class="card-img-top" src="Imagini/Img8.3.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title subtit text-center textdark cardwidth margtop line-height">"Great Reliable Service"
            </h3>
            <h5 class="title line text-center">Review from Kevon Binder</h5>
            <p class="cardtext3 lines">We have D & P for our home in Blissfield. Great reliable service! Also have a
              business account in Tecumseh for symmetrical fiber, and it's been almost 100% without interruption. The
              one time we slowed speed for a couple hours, we were warned 48hrs in advance. Great company!
            </p>
          </div>
        </div>
        <div class="card" data-aos-once="true" data-aos="fade-up">
          <img class="card-img-top" src="Imagini/Img8.1.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title subtit text-center textdark margtop line-height">"I Can Use Multiple Devices without
              Interruption"</h3>
            <h5 class="title line text-center">Review from Lexi Murray</h5>
            <p class="cardtext1 lines">D & P Communications has been my service provider for several years following
              their buyout of TC3net. They have excellent customer service at their local service locations. They have
              great Internet service, which is reliable and with the new fiber optic lines installed and high DSL, I
              am able to work from home for my clients without interruptions and run multiple devices on my home Wi-Fi
              systems withoyt lag time.
            </p>
            <p class="cardtext1 lines">The folks at D&P are knowledgeable and very customer service
              orientated. I would recommend their services to anyone new to the area!
            </p>
          </div>
        </div>
        <div class="card" data-aos-once="true" data-aos="fade-up">
          <img class="card-img-top" src="Imagini/Img8.1.png" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title subtit text-center textdark margtop line-height">"I Can Use Multiple Devices without
              Interruption"</h3>
            <h5 class="title line text-center">Review from Lexi Murray</h5>
            <p class="cardtext1 lines">D & P Communications has been my service provider for several years following
              their buyout of TC3net. They have excellent customer service at their local service locations. They have
              great Internet service, which is reliable and with the new fiber optic lines installed and high DSL, I
              am able to work from home for my clients without interruptions and run multiple devices on my home Wi-Fi
              systems withoyt lag time.
            </p>
            <p class="cardtext1 lines">The folks at D&P are knowledgeable and very customer service
              orientated. I would recommend their services to anyone new to the area!
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="struct9">
      <div class="container" data-aos-once="true" data-aos="zoom-in">
        <div class="style3">
          <img class="img3-style" src="Imagini/Background9.png">
          <div class="padding">
            <h3 class="subtit textdark">How May We Help You?</h3>
            <div class="row margin-top">
              <div class="col-md-6">
                <p><a class="color" href="#" role="button">Check Availability</a></p>
                <p><a class="color" href="#" role="button">Service Outages</a></p>
                <p><a class="color" href="#" role="button">Get Started</a></p>
                <p><a class="color" href="#" role="button">Help Center</a></p>
              </div>
              <div class="col-md-6">
                <p><a class="color" href="#" role="button"> News </a></p>
                <p><a class="color" href="#" role="button"> Careers at D & P </a></p>
                <p><a class="color" href="#" role="button"> Locations </a></p>
                <p><a class="color" href="#" role="button"> Customer Service </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

  <?php include "navbar&footer/footer.php"; ?>

  <?php include "head&script/script.php"; ?>
  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <script>
    var words = ['CONTACT US FORM'],
      part,
      i = 0,
      offset = 0,
      len = words.length,
      forwards = true,
      skip_count = 0,
      skip_delay = 0,
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
  <script>
  $('#form').click(function() {
    //optionally remove the 500 (which is time in milliseconds) of the
    //scrolling animation to remove the animation and make it instant
    $('html, body').animate({
      scrollTop: $("#footer").offset().top
    }, 2000);
    return false;
  });
</script>
</body>

</html>