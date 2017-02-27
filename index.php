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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script>
         $(document).ready(function() {
         	$('.js-scrollTo').on('click', function() { // Au clic sur un élément
         		var page = $(this).attr('href'); // Page cible
         		var speed = 1750; // Durée de l'animation (en ms)
         		$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
         		return false;
         	});
         });
      </script>
   </head>
   <body>
      <header class="header" id="home">
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
                     <li><a class="js-scrollTo" href="#home" class="pierrnav"><font color="white" >Pierr</font><font color="red"> Cika</font></a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                     <li><a class="js-scrollTo" href="#ecole"><font color="red">Ecole</font></a></li>
                     <li><a class="js-scrollTo" href="#actu">Actualités</a></li>
                     <li><a class="js-scrollTo" href="#spectacle">Spectacle</a></li>
                     <li><a class="js-scrollTo" href="#">Multimédia</a></li>
                     <li><a class="js-scrollTo" href="#">Contact</a></li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
      </header>
      <section style="height: 100%;">
         <div class="header-unit">
            <div id="video-container">
               <video autoplay loop muted class="fillWidth" style="bottom: 0px;">
                  <source src="img/videomagic.mp4" type="video/mp4"/>
                  Votre navigateur ne supporte pas la lecture de vidéo.
               </video>
            </div>
            <!-- end video-container -->
         </div>
         <!-- end .header-unit -->
      </section>
      <section id="bio" class="bio">
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-5">
               <h2><font color="red">L’artiste</font></h2>
               <h3>Pierr Cika</h3>
               <h5>Voici pour vous, l'histoire de la création du "Cercle" Académie de Magie et également pour les plus curieux un rapide cours sur l'histoire de la magie.</h5>
               <hr class="rectanglerouge">
               <p>Magicien	depuis	l’adolescence, il est persuadé que	les	arts de	la	scène,	deviennent	réellement	magiques	que	lorsqu’on	les	partage	avec les spectateurs, c’est	pourquoi	tous ces	show	sont	axés sur	l’interactivité.<br>
                <br>Pierr	Cika	est	né	en	France	à	Montpellier,	le	29	Décembre	1983.A	l’âge	de	15ans,	il	croise	la	route	d’un	magicien	qui	lui	enseigne	une	simple	disparition	de	pièce,	mais qui deviendra	pour lui le	début	d’une	passion,	d’un	métier,	d’une	vie.<br>
                <br>Autodidacte	c’est	seule face	à	ses	livre	et	vidéo spécialisé	qu’il	apprend	jour	après	jour. Puis	rapidement	on	lui	donne sa chance	de	faire	ses	armes devant un	vrai public	dans	l’hôtel	d’un grand	groupe	hôtelier en	Savoie.	C’est donc aux pieds des pistes	qu’il se perfectionne	et	apprend	la	gestion	des	spectateurs et se met à	étudier	la	psychologie	inhérente au spectacle scénique
                  <br>
               </p>
               <a href="#" class="btn btn-danger"> Découvrir la suite...</a>
            </div>
            <div class="col-md-5">
               <div class="imgbio"><img src="img/cikabio.jpg" class="img-responsive" alt="Pierre cika sur un tabouret"></div>
            </div>
         </div>
      </section>
      <section id="ecole" class="ecole">
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-5">
               <h2><font color="red">Presentation</font></h2>
               <h3><font color="white">Mon école de magie</font></h3>
               <hr class="rectanglerouge">
               <p><font color="white">Le Cercle, en tant qu'académie de magie, dispense des cours adaptés à tous à partir de 6 ans. Plusieurs formules sont à choisir selon vos objectifs, votre expérience et votre budget. Jetez donc un coup d'oeil sur la page dédiée pour en savoir plus.
                  </font>
               </p>
               <a href="#" class="btn btn-danger"> En savoir plus </a>
               <iframe width="100%" height="315" src="https://www.youtube.com/embed/VRbwSg1Zaw0" frameborder="0" allowfullscreen style="margin-top: 2%;"></iframe>
            </div>
            <div class="col-md-5">
               <div class="imgbio"><img src="img/cikabio.jpg" class="img-responsive" alt="Pierre cika sur un tabouret"></div>
            </div>
         </div>
      </section>
      <section id="actu" class="actu">
         <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
               <h2><font color="red">Actualites</font></h2>
               <h3>A ne pas manquer</h3>
               <hr class="rectanglerouge">
               <div class="col-md-12">
                  <?php
                     $articles = $bdd->query(" SELECT * FROM articles ORDER BY date DESC LIMIT 2 ");

                      foreach ($articles as $article) :
                     ?>
                  <div class="col-md-6"><img src="img/img_articles/<?= $article->image; ?>" class="img-responsive" alt="Pierre cika sur un tabouret">
                  </div>
                  <div class="col-md-6" id="<?= $article->id; ?>">
                     <h3 class="titrearticle"><?= $article->titre; ?></h3>
                     <h4 class="soustitre"><?= $article->soustitre; ?></h4>
                     <p class="date">
                       Publié le <?php echo date("d/m/y à G:i:s", strtotime($article->date)); ?>
                     </p>
                     <p class ="contenu"><?= $article->texte; ?></p>
                  </div>
                  <div class="col-md-12">
                     <hr>
                  </div>
                  <?php endforeach ?>
               </div>
            </div>
            <div class="col-md-2"></div>
         </div>
      </section>
      <section id="spectacle" class="Spectacle">
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 articlesspe" style="opacity:0.8;">
               <h2><font color="red">Spectacles</font></h2>
               <h3>Découvrez les 3 spectacles</h3>
               <hr class="rectanglerouge">
               <div class="" id="">
                  <h4><a onclick="raconte()">Raconte-moi ta Magie </a>/<a onclick="magiechiant()"> Le Magie Chiant </a>/<a onclick="hypnose()"> Hypnose Xperience </a></h4>
                  <p class ="contenu" id="demo">Ladies and Gentlemen, we are so happy to introduce the great... ok ok !<br><br>
                      Le stand up n’est pas que l’affaire des américains, encore plus lorsqu’il s’agit de stand up magique pour enfants. C’est en réalité l’affaire de Pierr Cika, qui va durant une heure zigzaguer le long de sa vie de magicien et nous en raconter quelques anecdotes, du premier tour de sa vie, jusqu’à la recherche de son successeur, en passant par la fée avec qui il s’est marié, il vous racontera tout.<br>
                      Un moment plein de rire et d’émotion à partager en famille, à partir de 4ans, avec en final un grande illusion (vu à la télé).<br>
                      Conseillé pour les C.E et les collectivité. Ideal pour un spectacle de Noël.<br></p>
               </div>
                <script>
                function raconte() {
                    document.getElementById("demo").innerHTML = "Ladies and Gentlemen, we are so happy to introduce the great... ok ok !<br><br>Le stand up n’est pas que l’affaire des américains, encore plus lorsqu’il s’agit de stand up magique pour enfants. C’est en réalité l’affaire de Pierr Cika, qui va durant une heure zigzaguer le long de sa vie de magicien et nous en raconter quelques anecdotes, du premier tour de sa vie, jusqu’à la recherche de son successeur, en passant par la fée avec qui il s’est marié, il vous racontera tout.<br>Un moment plein de rire et d’émotion à partager en famille, à partir de 4ans, avec en final un grande illusion (vu à la télé).<br>Conseillé pour les C.E et les collectivité. Ideal pour un spectacle de Noël.<br>";
                }
                function magiechiant() {
                    document.getElementById("demo").innerHTML = "Le Magichiant<br><br> À l’adolescence, Pierr Cika croise la route d’un magicien qui lui enseigne un simple tour de disparition de pièce, mais qui deviendra pour lui le début d’une passion, d’un métier, d’une vie.<br> Aujourd’hui, il met ses talents de grand magicien au service d’un spectacle composé de ses plus célèbres tours, dans une ambiance intimiste, le tout avec humour et dérision.<br> Soirée bluffante en perspective !";
                }
                function hypnose() {
                    document.getElementById("demo").innerHTML = "Durant	près	de	deux	heures	vous	partagerez	en	groupe,	une	expérience	hors	du	commun.<br><br>	Des	plus	interactif	ce	spectacle	d'hypnose	aborde	cette	discipline	comme	rarement	elle	a	déjà	était	abordé.Endormissement	en	rafale,	modification	des	sens,	de	la	mémoire et	du	comportement,inductions	hypnotiques	liées	à	des	sons	d’ambiancespour	plonger	les	sujets	ainsi	que	les	spectateurs	encore	plus	loin	dans	l’action,	présence	d’une	application	web	pour	repousser	les	limites	de	l’interactivité,	le	tout	saupoudré	de	beaucoup	d’humour	et	réalisé	dans	le	respect	le	plus	total	des	sujets	et	des	spectateurs.<br><br>Tel	est	le	programme	d’Hypnose	Xpérience.";
                }


                </script>
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
      <script>
         $(document).ready(function() {
         $('.js-scrollTo').bind('click', function(event) {
         var $anchor = $(this);
         $('html, body').stop().animate({
             scrollTop: ($($anchor.attr('href')).offset().top -40)
         }, 1250, 'easeInOutExpo');
         event.preventDefault();
         });
         });

      </script>
      <script type="text/javascript" src="PierrBack/js/recap.js"></script>
      <script src="PierrBack/js/print.js" type="text/javascript"></script>
   </body>
</html>
