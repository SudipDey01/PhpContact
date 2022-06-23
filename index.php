<?php

if (isset($_POST['submit'])) {
  $mailto = "sudip.dey713215@gmail.com";  //My email address
  //getting customer data
  $name = $_POST['name']; //getting customer name
  $fromEmail = $_POST['email']; //getting customer email
  $phone = $_POST['tel']; //getting customer Phome number
  $date = $_POST['date']; //getting subject line from client
  $subject = $_POST['name'] . "|" . $_POST['date'];
  $subject2 = "Confirmation: Message was submitted successfully | Sudip"; // For customer confirmation

  //Email body I will receive
  $message = "Client Name: " . $name . "\n"
    . "Email: " . $fromEmail . "\n"
    . "Phone Number: " . $phone . "\n"
    . "Date: " . $date . "\n";
  // . "Date: " . "\n" . $_POST['date']

  //Message for client confirmation
  $message2 = "Dear, " . $name . "\n"
    . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
    . "You submitted the following messages: " . "\n" . "Name: " . $_POST['name'] . "\n" . "Email: " . $_POST['email'] . "\n" . "Phone No: " . $_POST['tel'] . "\n" . "Date: " . $_POST['date'] . "\n\n"
    . "Regards," . "\n" . "- Sudip";

  //Email headers
  $headers = "From: " . $fromEmail; // Client email, I will receive
  $headers2 = "From: " . $mailto; // This will receive client

  //PHP mailer function

  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client

  //Checking if Mails sent successfully

  if ($result1) {
    echo '<script type="text/javascript">alert("Your Message was sent Successfully!")</script>';
  } else {
    echo '<script type="text/javascript">alert("Submission Failed!")</script>';
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Contact Form</title>
</head>

<style type="text/css">
  .translated-ltr{margin-top:-40px;}
.translated-ltr{margin-top:-40px;}
.goog-te-banner-frame {display: none;margin-top:-20px;}

.goog-logo-link {
   display:none !important;
} 

.goog-te-gadget{
   color: transparent !important;
}

</style>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Contact</a>
        <div id="google_translate_element"></div>
      </div>
    </div>
  </nav>

  <div class="container">
    <h3>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur libero voluptatibus animi cupiditate, commodi quaerat possimus. Placeat neque voluptatum ratione omnis? Amet possimus exercitationem voluptatibus dolorum alias aliquid quo omnis doloremque eum repellat sed quaerat consequuntur saepe voluptatem asperiores laudantium, eos numquam vero facere vitae perferendis officia suscipit officiis reiciendis! Sunt temporibus ullam magni totam id recusandae est debitis maxime officia. Sint, commodi quam? Nihil, cupiditate qui, corporis hic sit sed veritatis debitis ut, reiciendis nemo magnam! Harum fuga velit ut quae, veniam eveniet in illum voluptatem sint hic, culpa debitis tempora nihil minus quam qui perferendis porro dolore temporibus unde ipsam expedita amet ad dolorem? Eos similique placeat reprehenderit maxime molestiae tempore sit est architecto, quaerat corrupti aliquam ipsam.
    </h3>
    <form id="contact" action="" method="post">
      <h3>Contact Us</h3>
      <h4>Contact us today, and get reply with in 24 hours!</h4>

      <fieldset>
        <input placeholder="Enter name" name="name" type="text" tabindex="1" autofocus required>
      </fieldset>
      <fieldset>
        <input placeholder="Enter Email Address" name="email" type="email" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input placeholder="Enter Phone Number" name="tel" type="tel" tabindex="3">
      </fieldset>
      <fieldset>
        <input type="date" name="date" placeholder="Select Date">
      </fieldset>

      <fieldset>
        <button type="submit" name="submit" id="contact-submit" data-submit="...Sending">Submit Now</button>
      </fieldset>
    </form>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>