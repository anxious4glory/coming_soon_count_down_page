<?php

    if (isset($_POST['submit'])) {
        
        $from = $_POST['email'];
        $to = 'contact.cybermaven@gmail.com';
        $subject = 'Email signup';
        $body = 'Please sign me up to the mailing list';
        
        if (!$_POST['email']) {
            $emailError = '<div class="text-danger"><i class="fas fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid email address</div>';
        }
        
        if (!$emailError) {
            if (mail ($to, $subject, $body, $from)) {
                $result = '<div class="text-success"><i class="fas fa-check" aria-hidden="true"></i> &nbsp;thank you we\'ll keep you updated</div>';
            } else {
                $result = '<div class="text-danger"><i class="fas fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;sorry there has been an error, please try again</div>';
            }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=BioRhyme&display=swap" rel="stylesheet">
    <title>Cybermaven</title>
  </head>
  <body>

    
    <section id="logo">
      <div class="container">
        <div class="row" >
          <div class="col-md-12 text-center">
            <img src="img/lg.png" class="img-fluid"/>
          </div>
        </div>
      </div>
    </section>

    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>We're working hard, we'll be ready to launch in....</p>
          </div>
        </div>
      </div>
    </section>
    
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p id="countDown"></p>
          </div>
        </div>
      </div>
    </section>

    <section id="social">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <a href="https://twitter.com" target="blank"><i class="fab twitter fa-twitter-square fa-3x"></i></a>
            <a href="https://web.facebook.com/?_rdc=1&_rdr" target="blank"><i class="fab facebook fa-facebook-square fa-3x"></i></a>
            <a href="https://github.com/" target="blank"><i class="fab github fa-github-square fa-3x"></i></a>
            <a href="https://web.whatsapp.com/" target="blank"><i class="fab whatsapp fa-whatsapp-square fa-3x"></i></a>
          </div>
        </div>
      </div>
    </section>


    <section id="signup">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <form class="form-inline" role="form" method="post" action="#signup">
                      <input type="email" class="form-control form-control-sm" name="email" placeholder="enter your email">
                      <button type="submit" class="btn btn-info btn-signup btn-sm" name="submit" value="send">find out more</button>
                  </form>
              </div>
          </div>  
      </div>
    </section>

    <?php echo $emailError;?>
    <?php echo $result;?>


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="index.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
