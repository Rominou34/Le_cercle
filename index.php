<?php
session_start();
require 'PierrBack/db.class.php';
$bdd = new DB();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>FRONT Office Pierr Cika</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="PierrBack/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="PierrBack/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="PierrBack/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <link href="PierrBack/css/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
        <!-- Select2 -->
        <link href="PierrBack/css/select2.css" rel="stylesheet" type="text/css" />
        <!-- DatePicker -->
        <link href="PierrBack/css/classic.css" rel="stylesheet" type="text/css" />
        <link href="PierrBack/css/classic.date.css" rel="stylesheet" type="text/css" />
        <!-- Print -->
        <link href="PierrBack/css/print.css" rel="stylesheet" type="text/css" media="print" />
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="header">
            <nav class="navbar navbar-default navbar-fixed-top" style="border-bottom-width: 0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">
          <li><a href="#" class="pierrnav"><font color="white" >Pierr</font><font color="red"> Cika</font></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#ecole"><font color="red">Ecole</font></a></li>
        <li><a href="#actu">Actualités</a></li>
        <li><a href="#">Spectacle</a></li>
        <li><a href="#">Multimédia</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        </header>
        <section style="height: 100%;">
            <div class="header-unit">
            <div id="video-container">
            <video autoplay loop class="fillWidth">
            <source src="https://scontent-cdg2-1.cdninstagram.com/t50.2886-16/16471928_404148309920976_7314148220676866048_n.mp4" type="video/webm"/>
            Your browser does not support the video tag. I suggest you upgrade your browser.
            </video>
            </div><!-- end video-container -->
            </div><!-- end .header-unit -->
        </section>
        <section id="bio" class="bio">
            <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-5"><h2><font color="red">Biographie</font></h2>
                                    <h1>Pierr Cika</h1>
                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis tellus, consequat at urna id, sollicitudin mollis velit. Sed vehicula sem ut velit dapibus, eu tempus ex porta. Nulla vitae tortor ac eros mollis scelerisque at ac augue. Maecenas pellentesque quam nec ex volutpat gravida. Donec accumsan fermentum sapien, ut congue odio molestie id. Aenean commodo sagittis magna, sed mattis sapien vulputate et. Maecenas sed urna non eros eleifend auctor.</p>
                </div>
            <div class="col-md-5"><div class="imgbio"><img src="img/cikabio.jpg" class="img-responsive" alt="Pierre cika sur un tabouret"></div></div>
            </div>
        </section>
        <section id="ecole" class="ecole">
        <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-5"><h2><font color="red">Presentation</font></h2>
                <h1><font color="white">Mon école de magie</font></h1>
                                <hr>
                <p><font color="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis tellus, consequat at urna id, sollicitudin mollis velit. Sed vehicula sem ut velit dapibus, eu tempus ex porta. Nulla vitae tortor ac eros mollis scelerisque at ac augue. Maecenas pellentesque quam nec ex volutpat gravida. Donec accumsan fermentum sapien, ut congue odio molestie id. Aenean commodo sagittis magna, sed mattis sapien vulputate et. Maecenas sed urna non eros eleifend auctor</font>.</p>
            </div>
        <div class="col-md-5"><div class="imgbio"><img src="img/cikabio.jpg" class="img-responsive" alt="Pierre cika sur un tabouret"></div></div>
        </div>
        </section>
        <section id="actu" class="actu">
        <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8"><h2><font color="red">Actualites</font></h2>
                                <h1>A ne pas manquer</h1>
                                <hr>
                <div class="col-md-12"><img src="img/cikalive.png" class="img-responsive" alt="Pierre cika sur un tabouret"></div>
                               <div class="articles" id="">
                                <h3>Titre</h3>
                                <p class="date">22 fevrier 2017</p>
                                <p class ="contenu">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis tellus, consequat at urna id, sollicitudin mollis velit. Sed vehicula sem ut velit dapibus, eu tempus ex porta. Nulla vitae tortor ac eros mollis scelerisque at ac augue. Maecenas pellentesque quam nec ex volutpat gravida. Donec accumsan fermentum sapien, ut congue odio molestie id. Aenean commodo sagittis magna, sed mattis sapien vulputate et.</p>
                                
                                </div>
            </div>
        <div class="col-md-2"></div>
        </div>
        </section>
        <!-- jQuery UI 1.10.3 -->
        <script src="PierrBack/js/jquery.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="PierrBack/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="PierrBack/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="PierrBack/js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>
        <script src="PierrBack/js/calendar.js" type="text/javascript"></script>
        <!-- Page specific script -->
        <!-- Select2 -->
        <script src="PierrBack/js/select2.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
              $(".js-example-basic-single").select2();
            });
        </script>
        <!-- Date Picker -->
        <script src="PierrBack/js/picker.js" type="text/javascript"></script>
        <script src="PierrBack/js/picker.date.js" type="text/javascript"></script>
        <script>
            $('.datepicker').pickadate({
                format: 'd mmmm yyyy',
                firstDay: 1,
                formatSubmit: 'yyyy-mm-dd',
                hiddenName: true,
            })
            
            var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#polina button");

if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
}

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 


pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "Pause";
  } else {
    vid.pause();
    pauseButton.innerHTML = "Paused";
  }
})


        </script>
        <script type="text/javascript" src="PierrBack/js/recap.js"></script>
        <script src="PierrBack/js/print.js" type="text/javascript"></script>

    </body>
</html>