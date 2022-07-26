<footer>
  <div class="footer">
    <div id="footer" class="contact container" data-aos-once="true" data-aos="zoom-in">
      <form enctype="multipart/form-data" action="#" method="POST">
        <h1 class="word"></h1>
        <h5><?= $output; ?></h5>
        <input id="contact-name" class="inp" name="name" type="text" placeholder="Your Name">
        <span class='error-message' id='name-error'></span>
        <input id="contact-phone" class="inp" name="phone" type="number" placeholder="Your Phone">
        <span class='error-message' id='phone-error'></span>
        <input id="contact-email" class="inp" name="email" type="email" placeholder="Your Email">
        <span class='error-message' id='email-error'></span>
        <input id='contact-message' class="inp" name="message" placeholder="Message" rows="4">
        <span class='error-message' id='message-error'></span>
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
            <input name="attachment" type="file" class="form-control-file modify" id="attachment" onchange="fileValidation()">
          </div>
        </div>
        <button onclick='return validateForm()' type="submit" name="submit" value="Send" class="btn btn-danger btn-block" id="sendBtn">SEND MESSAGE</button>
        <span class='error-message' id='submit-error'></span>
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
          <a href="index.php"><img class="padlogo1" src="Imagini/Img1Footer.png" alt="call"></a>
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