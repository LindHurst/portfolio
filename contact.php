<?php
// Send confirmation email.
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $body = "Below is the information that you submitted:\n\n";
  $body = "Name: " . $name . "\n\n";
  $body = "Email: " . $email . "\n\n";
  $body = "Message: " . $message . "\n\n";
  mail("LWBetten@gmail.com", 'Confirmation', $body, 'From: LWBetten@gmail.com');
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>LindHurst Developer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:600|Raleway" rel="stylesheet">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

<!--Custom Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Custom styles for this template -->
<link href="css/portfolio.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" >


</head>

<body>
<div class="wrapper">
    <header role="header">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="index.html#home"><img src="img/logo.png" width="65" height="65" class="d-inline-block align-center" alt="">
                LindHurst Dev
              </a>
                <div class="navbar-collapse collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#about">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#services">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Work
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.html#folio">Websites</a>
                        <a class="dropdown-item" href="index.html#graphic">Graphic Designs</a>
                        <a class="dropdown-item" href="index.html#vids">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#contact">Contact Me</a>
                    </li>
                </ul>
            </div>
        </nav>
</div>
</header>

<section id="contact" class="sec-contact">
  <div class="container">
    <h1>Thank you!</h1>

    <hr />

    <div class="row">

      <div class="col-md-4">
      </div>

      <div class="col-md-4">
        <p>Thank you for contacting us.  We will be in touch with you within 24 hrs.</p>
      </div>

      <div class="col-md-4">
      </div>

  </div>
</section>


<footer id="footer">
  <div class="container">
    <ul class="soc-media-ul">
      <li>
        <a href="https://www.instagram.com/_lindhurst_/" class="fa fa-instagram" target="_blank"></a>
      </li>

      <li>
        <a href="https://github.com/LindHurst" class="fa fa-github" target="_blank"></a>
      </li>

      <li>
        <a href="https://plus.google.com/+LindseyBettencourt" class="fa fa-google-plus" target="_blank"></a>
      </li>

      <li>
        <a href="https://www.behance.net/LWBetten3c14" class="fa fa-behance" target="_blank"></a>
      </li>

      <li>
        <a href="mailto:lwbetten@gmail.com" class="fa fa-envelope"></a>
      </li>
    </ul>
            <p class="p-footer">&copy;2018 LindHurst Dev</p>
  </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</div>
</body>
</html>
