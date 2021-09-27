<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>



<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Holy trinity contact us page - contact us</title>
    <link rel="icon" type="image" href="img/logo1.png">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>  
    <script type="text/javascript" src="donate.js"></script>    
    <link rel="icon" href="../images/icon.png" type="image/x-icon">
  </head>
\
  <body class="size-1140">
  <header>
    <div class="wrapper row0">
      <div id="topbar"  class="clear"> 
        <!-- ################################################################################################ -->
        <nav>
          <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../logout.php">Log Out</a></li>
          </ul>
        </nav>
        <!-- ################################################################################################ --> 
      </div>
    </div>
  </header>
      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section background-white">
            <div class="line text-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Contact Us</h1>
              <p class="margin-bottom-0 text-size-16 text-dark">Hallo, welcome to Holy Trinity Secondary School Nkozi contact us page, we always happy communicating with us.<br>
              We shall always be there when you need us, use the email links below to contact us, thanks.</p>
            </div>  
          </header>
          <section class="full-width background-dark">
            <div class="s-12 m-12 l-6">
              <!-- Change the background image -->  
              <div style="background-image: url(../images/pic.jpg);" class="contact-image" ></div>
            </div>
            <div class="s-12 m-12 l-6 text-center">
              <div class="padding-2x">
                <i class="icon-sli-location-pin text-white text-size-30 center"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">School address</h2>                
                <p>Africa - Uganda</p>
                <p>Mpigi - Nkozi </p>
                <p>Kawango</p>
                <i class="icon-sli-envelope text-white text-size-30 center margin-top-20"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">E-mail</h2>                
                <a class="text-primary-hover" href="mailto:holytrinity453@gmail.com">holytrinity453@gmail.com</a><br>
                <a class="text-primary-hover" href="mailto:summitsmith842@gmail.com">summitsmith842@gmail.com</a>
                <i class="icon-sli-earphones-alt text-white text-size-30 center margin-top-20"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">Phone Numbers</h2>                
                <p>+256 757 839 407</p>
                <p>+256 703 309 253</p>
                <p>+256 776 646 550</p>
                
              </div>
            </div>
          </section>
          
        
        </article>
      </main>
      
      
        <!-- Bottom Footer -->
        <section class="padding background-dark full-width">
          <div class="text-center">
            <p class="text-size-12">Copyright 2021, - Uganda</p>
            <p class="text-size-12">All rights reserved to Ssembatya Shafic.</p>
          </div>
        </section>
      </footer>
    </div>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="js/jquery.events.touch.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
    <script type="text/javascript">
      (function () {
          var options = {
              whatsapp: "+256757839407", 
              call_to_action: "Message Teacher", 
              position: "right",
          };
          var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
          var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
          s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
          var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
      })();
    </script>
  </body>
</html>
