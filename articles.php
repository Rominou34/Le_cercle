<?php
   session_start();
   require 'PierrBack/db.class.php';
   $bdd = new DB();
   ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Pierr Cika</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
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
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">

	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.html#home">Pierr Cika</a></h1>
			<i class="fa fa-times menu-close"></i>
			<a href="index.php#lecole" class="smoothScroll">Ecole</a>
			<a href="index.php#actus" class="smoothScroll">Actualité</a>
			<a href="index.php#spectacle" class="smoothScroll">Spectacles</a>
			<a href="index.php#services" class="smoothScroll">Multimédia</a>
			<a href="index.php#contact" class="smoothScroll">Contact</a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-dribbble"></i></a>
			<a href="#"><i class="fa fa-envelope"></i></a>
		</div>

		<!-- Menu button -->
		<div id="menuToggle"><i class="fa fa-bars"></i></div>
	</nav>

	<section id="home" name="home"></section>
	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1>Les actualités</h1>
				</div>
			</div><!--/row !-->
		</div><!--/container !-->
	</div><!--/headerwrap !-->

	<section id="about" name="about"></section>
	<div id="aboutwrap">
		<div class="container">
      <div class="container">
        <?php
          $articles = $bdd->query(" SELECT * FROM articles;");
          $article_num = 0;
          foreach ($articles as $article) {
            if($article_num != 0) {
              ?> <hr style="width: 80%; height: 2px; background-color: red; margin: 1em auto;"/> <?php
            } ?>
  			<div class="row" style="margin: 2em auto;">
  				<div class="col-lg-8-offset-2 centered">
  					<h1><?php echo($article->titre); ?></h1>
  					<h3><?php echo($article->soustitre); ?></h3>
  					<p><?php echo($article->texte); ?></p>
            <?php if ($article->image){ ?>
            <div class="col-md-12">
              <img src="assets/img/img_articles/<?php echo($article->image); ?>" class="img-responsive" alt="Pierre cika sur un tabouret" style="margin: auto">
            </div>
           <?php
              } else {
           ?>
            <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="video-container">
                  <iframe width="100%" height="400" src="https://www.youtube.com/embed/<?php echo($article->video); ?>" frameborder="0" allowfullscreen ></iframe>
                </div>
              </div>
          <?php } $article_num++; ?>
  				</div><!-- /col-lg-8 -->
  			</div><!--/row !-->
        <?php } ?>
		</div><!-- /container -->
	</div><!-- /aboutwrap -->

	<!-- SERVICE SECTION -->
	<section id="contact" name="contact"></section>
	<div id="contactwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p>CONTACTEZ MOI SIMPLEMENT!</p>
					<p>Utilisez le formulaire pour toute demande de renseignement sur l'école ou demande de devis.</p>
					<p>
						<small>46, Rue R. Garros,<br/>
						Mauguio/Lattes.<br/>
						FR.</small>
					</p>
					<p>
						<small>Tel. 07.68.26.61.30<br/>
						Mail. lecercleacademiedemagie@hotmail.fr<br/>
                    </p>

				</div>

				<div class="col-lg-6">
					<form role="form"action="envoi_mail.php" method="post">
					  <div class="form-group">
					    <label for="exampleInputName1">Votre Nom </label>
					    <input type="text" class="form-control" name="nom" id="exampleInputEmail1" placeholder="Entrez un nom">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Entrez une adresse e-mail">
                        <label for="exampleInputobject1">Objet </label><br>
                          <select name="objet">
                            <option value="Ecole">Ecole</option>
                            <option value="Devis">Demande de devis</option>
                            <option value="Autre">Autre</option>
                          </select><br>
					    <label for="exampleInputText1">Message</label>
					    <textarea class="form-control" name="message" rows="3"></textarea>
              <label for="copie">Souhaitez-vous recevoir une copie du mail ?</label>
              <input type="checkbox" name="copie" value="oui" />
					  </div>
					  <button type="submit" class="btn btn-default">Envoyer</button>
					</form>
				</div>

			</div><!--/row !-->
		</div><!-- /container -->
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="assets/js/classie.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/fancybox/jquery.fancybox.js"></script>
	<script src="assets/js/main.js"></script>
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
         });

         var alert = document.querySelector(".alert");
         if(alert) {
           setTimeout(function() {
             alert.parentElement.removeChild(alert);
           }, 3000);
         }

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
       });




      </script>
      <script type="text/javascript" src="PierrBack/js/recap.js"></script>
      <script src="PierrBack/js/print.js" type="text/javascript"></script>

		<script>
		$(function(){
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 40
			});
		});
		</script>

		<script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });
	   </script>

  </body>
</html>
