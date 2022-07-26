<!doctype html>
<html lang="en">

<body>
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/java.js"></script>
    <script type="text/javascript">
        function validateName() {

            var name = document.getElementById('contact-name').value;

            if (name.length == 0) {

                producePrompt('Name is required', 'name-error', 'red')
                return false;

            }

            producePrompt('Valid', 'name-error', 'green');
            return true;

        }

        function validateEmail() {

            var email = document.getElementById('contact-email').value;

            if (email.length == 0) {

                producePrompt('Email is required.', 'email-error', 'red');
                return false;

            }

            if (!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {

                producePrompt('Email Invalid', 'email-error', 'red');
                return false;

            }

            producePrompt('Valid', 'email-error', 'green');
            return true;

        }

        function validatePhone() {

            var phone = document.getElementById('contact-phone').value;

            if (phone.length == 0) {
                producePrompt('Phone number is required.', 'phone-error', 'red');
                return false;
            }

            producePrompt('Valid', 'phone-error', 'green');
            return true;

        }

        function validateMessage() {
            var message = document.getElementById('contact-message').value;
            var required = 10;
            var left = required - message.length;

            if (left > 0) {
                producePrompt(left + ' more characters required', 'message-error', 'red');
                return false;
            }

            producePrompt('Valid', 'message-error', 'green');
            return true;

        }

        function validateForm() {
            if (!validateName() || !validatePhone() || !validateEmail() || !validateMessage()) {
                jsShow('submit-error');
                producePrompt('Please fix errors to submit.', 'submit-error', 'red');
                setTimeout(function() {
                    jsHide('submit-error');
                }, 2000);
                return false;
            } else {

            }
        }

        function jsShow(id) {
            document.getElementById(id).style.display = 'block';
        }

        function jsHide(id) {
            document.getElementById(id).style.display = 'none';
        }


        function producePrompt(message, promptLocation, color) {

            document.getElementById(promptLocation).innerHTML = message;
            document.getElementById(promptLocation).style.color = color;

        }
    </script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/cc5b02c2a0.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>