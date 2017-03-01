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
      <style>
        .fixed-top {
          position: fixed;
          top: 1em;
          width: 80vw;
          margin: 0 10vw;
          z-index: 150;
        }
      </style>
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
			<a href="#lecole" class="smoothScroll">Ecole</a>
			<a href="#actus" class="smoothScroll">Actualité</a>
			<a href="#spectacle" class="smoothScroll">Spectacles</a>
			<a href="#services" class="smoothScroll">Multimédia</a>
			<a href="#contact" class="smoothScroll">Contact</a>
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
					<h1>PIERR CIKA</h1>
				</div>
			</div><!--/row !-->
		</div><!--/container !-->
	</div><!--/headerwrap !-->

  <!-- ALERTES DE CONFIRMATION MAIL !-->
  <?php
  if(isset($_GET['alert'])) {
     if ($_GET['alert'] == 'envoye') { ?>
   <div class="alert alert-success fade in fixed-top"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Le message a bien été envoyé</div>
    <?php } else if ($_GET['alert'] == 'non_envoye') { ?>
    <div class="alert alert-danger fade in fixed-top"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Erreur !</strong> Le message n'a pas été envoyé à cause d'un rpbolème interne</div>
    <?php } else if ($_GET['alert'] == 'invalide') { ?>
    <div class="alert alert-danger fade in fixed-top"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Erreur !</strong> Certains champs du formulaire sont invalides</div>
    <?php } } ?>
	<section id="about" name="about"></section>
	<div id="aboutwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 name">
					<img class="img-responsive" src="assets/img/pic.png">
					<p>Pierr Cika</p>
					<div class="name-label"></div>
				</div><!--/col-lg-4 !-->
				<div class="col-lg-8 name-desc">
					<h2>L’artiste <br/>Pierr Cika <br/></h2>
					<div class="name-zig"></div>

					<div class="col-md-6">
						<p>Voici pour vous, l'histoire de la création du "Cercle" Académie de Magie et également pour les plus curieux un rapide cours sur l'histoire de la magie..</p>
						<p>Magicien	depuis	l’adolescence, il est persuadé que	les	arts de	la	scène, deviennent	réellement	magiques	que	lorsqu’on	les	partage	avec les spectateurs, c’est	pourquoi	tous ces	show	sont	axés sur	l’interactivité.</p>
					</div>
					<div class="col-md-6">
						<p>Pierr	Cika	est	né	en	France	à	Montpellier,	le	29	Décembre	1983.A	l’âge de	15ans,	il	croise	la	route	d’un	magicien	qui	lui	enseigne	une	simple disparition	de	pièce,	mais qui deviendra	pour lui le	début	d’une	passion, d’un	métier,	d’une	vie.</p>
						<p> Autodidacte	c’est	seule face	à	ses	livre	et	vidéo spécialisé	qu’il	apprend jour	après	jour. Puis	rapidement	on	lui	donne sa chance	de	faire	ses armes devant un	vrai public	dans	l’hôtel	d’un grand	groupe	hôtelier en Savoie.	C’est donc aux pieds des pistes	qu’il se perfectionne	et	apprend la	gestion	des	spectateurs et se met à	étudier	la	psychologie	inhérente au spectacle scénique  </p>
                        <a href="#" class="btn"> Découvrir la suite...</a>
					</div>
				</div><!--/col-lg-8 !-->

			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /aboutwrap -->

	<!-- ABOUT SEPARATOR !-->
	<div class="sep about" data-stellar-background-ratio="0.5"></div>

      	<!-- SERVICE SECTION !-->
	<section id="lecole" name="services"></section>
	<div id="servicewrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8-offset-2 centered">
					<h1>L'école</h1>
					<h3>Presentation</h3>
					<p>DES FORFAITS ADAPTÉS À TOUS ET POUR TOUS LES GOÛTS, VENEZ VITE VOUS RENSEIGNER</p>
				</div><!-- /col-lg-8 -->
			</div><!--/row !-->

			<div class="row mt">
				<div class="col-lg-12 service">
					<p class="text">Le Cercle, en tant qu'académie de magie, dispense des cours adaptés à tous à partir de 6 ans. Plusieurs formules sont à choisir selon vos objectifs, votre expérience et votre budget. Jetez donc un coup d'oeil sur la liste ci-dessous.</p>
				</div>
			</div><!--/row !-->
			<div class="row mt">
                <div class="col-lg-4 service">
                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo6"><h3>Heure de cours particulier</h3></button>
                    <div id="demo6" class="collapse">
                    <p class="text">Ideal pour celles et ceux qui veulent découvrir la magie, avoir des conseils ponctuels ou tout simplement ne pas s'engager, en cours particulier.<br/>

                        - Cours Adultes (11 ans et +) -<br/>

                        Durée : 1h00 -49 €<br/>


                        - Cours Enfants (6 - 10 ans) -<br/>

                        Durée : 1h00 -29 €</p>
                  </div>
				</div>

                <div class="col-lg-4 service">
                  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo4"><h3>Les Packs horaires cours particulier</h3></button>
                  <div id="demo4" class="collapse">
                    <p class="text">Les packs horaires sont des heures de cours de magie à prendre quand l’envie vous prends, matériels non fournis ;
                        plusieurs sont disponible :<br/>

                        - Cours Adultes (11 ans et +) -<br/>

                        Pack horaire 5 heures -200 €<br/>

                        Pack horaire 10 heures -350 €<br/>


                        - Cours Enfants (6 - 10 ans) -<br/>

                        Pack horaire 5 heures -115 €<br/>

                        Pack horaire 10 heures -200 €</p>
                  </div>
                </div>

                  <div class="col-lg-4 service">
                  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo5"><h3>Heures de cours collectif</h3></button>
                  <div id="demo5" class="collapse">
                    <p class="text">Moins cher que les cours individuels, ils permettrons au plus grand nombres de pouvoir essayer l'art magique.
                            Ces cours sont destinés aux adultes et ados de plus de 12 ans, mais aussi aux enfants de 6 à 12 ans.<br/>
                            Tout comme le programme traditionel, ce sont des cours de manipulations d'objets tel que les cartes, les pieces, les balles, les cordes, etc... pour les grands. Et nos ateliers Créatif magique pour les petits.<br/>
                            - Cours Adultes (11 ans et +) -<br/>

                            Durée : 1 h/semaine, 33 Séances par an. -59 €/ mois*<br/>

                            *après une 1ère mensualité de 157,5€ à l’inscription, suivi de 10 mensualités (octobre à juillet)<br/>


                            - Cours Enfants (6 - 10 ans) -<br/>

                            Durée : 1 h/semaine, 33 Séances par an. -29 €/ mois*<br/>

                            *après une 1ère mensualité de 82€ à l’inscription, suivi de 10 mensualités (octobre à juillet).</p>
                    </div>
                    </div>
			</div><!--/row -->

		</div><!--/container !-->
	</div><!--/servicewrap !-->
    	<!-- PORTFOLIO SEPARATOR !-->
	<div class="sep portfolio" data-stellar-background-ratio="0.5"></div>


	<div id="testimonials">
    <section id="actus" name="actus"></section>
    <div class="col-lg-12 mt centered"><h1>ACTUALITÉ</h1></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 mt">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">

                    <?php
                    $articles = $bdd->query(" SELECT * FROM articles ORDER BY date DESC LIMIT 3 ");
                    ?>

					    <div class="item active mb centered" id="<?php echo($articles[0]->id); ?>">
                          <div class="col-lg-12">
                          <div class="col-lg-12"><h3><?php echo $articles[0]->titre; ?></h3><br><h6><?php echo($articles[0]->soustitre); ?></h6><br></div>
                          <div class="col-lg-6"><img class="img-responsive" src="assets/img/img_articles/<?php echo $articles[0]->image; ?>"></div>
                          <div class="col-lg-6"><p>Le: <?php echo $articles[0]->date; ?></p><br><p><?php echo $articles[0]->texte; ?></p></div>
                          <div class="col-lg-12"></div>
                          </div>
					    </div>

                        <div class="item  mb centered" id="<?php echo $articles[1]->id; ?>">
                          <div class="col-lg-12">
                          <div class="col-lg-12"><h3><?php echo $articles[1]->titre; ?></h3><br><h6><?php echo $articles[1]->soustitre; ?></h6><br></div>
                          <div class="col-lg-6"><img class="img-responsive" src="assets/img/img_articles/<?php echo $articles[1]->image; ?>"></div>
                          <div class="col-lg-6"><p>Le: <?php echo $articles[1]->date; ?></p><br><p><?php echo $articles[1]->texte; ?></p></div>
                          <div class="col-lg-12"></div>
                          </div>
					    </div>

                        <div class="item  mb centered" id="<?php echo $articles[2]->id; ?>">
                          <div class="col-lg-12">
                          <div class="col-lg-12"><h3><?php echo $articles[2]->titre; ?></h3><br><h6><?php echo $articles[2]->soustitre; ?></h6><br></div>
                          <div class="col-lg-6"><img class="img-responsive" src="assets/img/img_articles/<?php echo $articles[2]->image; ?>"></div>
                          <div class="col-lg-6"><p>Le: <?php echo $articles[2]->date; ?></p><br><p><?php echo $articles[2]->texte; ?></p></div>
                          <div class="col-lg-12"></div>
                          </div>
					    </div>



					  </div>
					  <!-- Indicators -->
                        <div class="col-lg-12">
                        					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>
                        </div>
					</div>

				</div><!--/col-lg-8 !-->
			</div><!--/row !-->
		</div><!--/container !-->
	</div><!--/testimonials !-->
	<div class="sep portfolio" data-stellar-background-ratio="0.5"></div>
	<!-- PORTFOLIO SECTION !-->
	<section id="spectacle" name="spectacle"></section>
	<div id="portfoliowrap">
        		<div class="container">
			<div class="row mt centered">
				<h1>Spectacles</h1>
                <h3>Découvrez les 3 spectacles</h3>
				<div class="col-lg-4 proc">
                  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"><h3>Raconte-moi ta Magie</h3></button>
                  <div id="demo" class="collapse">
                    <p>Ladies and Gentlemen, we are so happy to introduce the great... ok ok !<br><br>Le stand up n’est pas que l’affaire des américains, encore plus lorsqu’il s’agit de stand up magique pour enfants. C’est en réalité l’affaire de Pierr Cika, qui va durant une heure zigzaguer le long de sa vie de magicien et nous en raconter quelques anecdotes, du premier tour de sa vie, jusqu’à la recherche de son successeur, en passant par la fée avec qui il s’est marié, il vous racontera tout.<br>Un moment plein de rire et d’émotion à partager en famille, à partir de 4ans, avec en final un grande illusion (vu à la télé).<br>Conseillé pour les C.E et les collectivité. Ideal pour un spectacle de Noël.<br></p>
                  </div>
				</div>
                <div class="col-lg-4 proc">
                  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1"><h3>Le Magie Chiant</h3></button>
                  <div id="demo1" class="collapse">
					<p>Le Magichiant<br><br> À l’adolescence, Pierr Cika croise la route d’un magicien qui lui enseigne un simple tour de disparition de pièce, mais qui deviendra pour lui le début d’une passion, d’un métier, d’une vie.<br> Aujourd’hui, il met ses talents de grand magicien au service d’un spectacle composé de ses plus célèbres tours, dans une ambiance intimiste, le tout avec humour et dérision.<br> Soirée bluffante en perspective !</p>
                  </div>
                </div>
                <div class="col-lg-4 proc">
                  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2"><h3>Hypnose Xperience</h3></button>
                  <div id="demo2" class="collapse">
					<p>Durant près de deux heures vous partagerez en groupe, une expérience	hors du	commun.<br><br>	Des	plus interactif ce spectacle d'hypnose aborde cette discipline comme rarement elle a déjà était abordé.Endormissement en rafale,	modification des sens, de la mémoire et	du	comportement,inductions	hypnotiques	liées à	des	sons d’ambiancespour	plonger	les	sujets	ainsi que les spectateurs encore plus loin dans l’action, présence d’une application	web	pour repousser les limites	de	l’interactivité, le	tout saupoudré de beaucoup d’humour et réalisé dans le	respect	le	plus total des sujets et des spectateurs.<br><br>Tel est le programme d’Hypnose Xpérience.</p>
                  </div>
				</div>
                <div class="col-lg-12"></div>
                <div class="col-lg-4"></div>
				<div class="col-lg-4"><div id="calendar"></div></div>
                <!-- Modal -->
                <?php
                    $commandes = $bdd->query("SELECT * FROM commande");
                    foreach ($commandes as $commande):
                        $date = date_create($commande->date_livraison);
                ?>
                <div class="modal fade" id="fullCalModal<?php $commande->num; ?>" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">Récapitulatif de l'évenement</h4>
                            </div>
                            <div class="modal-body" id="printThis">
                                <h1 class="titleCom" style="display:none;">Récapitulatif de la commande <br><br></h1>
                                <h4>Date de l'évenement : <?php date_format($date, 'd / m / Y'); ?></h4>
                                <br>
                                <h4>Lieu : <?php $commande->patient_id; ?></h4>
                                <br>
                                <h4>Nom de l'évenement : <?php $commande->prix_produit_id; ?></h4>
                                <h4>Prix : <?php $commande->id_praticien ?>€</h4>
                                <br>
                                <h4>Description : <?php $commande->description; ?></h4>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-default" data-dismiss="modal"><i class="fa fa-2x fa-times"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                <div class="col-lg-4"></div>
			</div><!--/row !-->
		</div><!--/container !-->
		<div class="container">
			<div class="row">
				<h1>MEDIAS</h1>
                <?php
                    $medias = $bdd->query(" SELECT * FROM medias ORDER BY date DESC LIMIT 3 ");
                    ?>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="<?php echo $medias[0]->titre; ?>" onclick="window.open(this.href); return false;"><img class="img-responsive" src="assets/img/img_medias/<?php echo $medias[0]->image; ?>" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div><!-- col-lg-4 -->

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="<?php echo $medias[1]->titre; ?>" onclick="window.open(this.href); return false;"><img class="img-responsive" src="assets/img/img_medias/<?php echo $medias[1]->image; ?>" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div><!-- col-lg-4 -->

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="<?php echo $medias[2]->titre; ?>" onclick="window.open(this.href); return false;"><img class="img-responsive" src="assets/img/img_medias/<?php echo $medias[2]->image; ?>" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div><!-- col-lg-4 -->
			</div><!-- /row -->
		</div><!--/container !-->
	</div><!--/Portfoliowrap !-->

	<!-- SERVICE SECTION -->
	<section id="contact" name="contact"></section>
	<!-- CONTACT SEPARATOR !-->
	<div class="sep contact" data-stellar-background-ratio="0.5"></div>

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
