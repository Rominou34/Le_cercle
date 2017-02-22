<?php
session_start();
require('db.class.php');
$bdd = new DB();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Back Office Pierr Cika</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <link href="css/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- Select2 -->
        <link href="css/select2.css" rel="stylesheet" type="text/css" />
        <!-- DatePicker -->
        <link href="css/classic.css" rel="stylesheet" type="text/css" />
        <link href="css/classic.date.css" rel="stylesheet" type="text/css" />
        <!-- Print -->
        <link href="css/print.css" rel="stylesheet" type="text/css" media="print" />
        
        <link href="cssBack.css" rel="stylesheet" type="text/css" />
        
    </style>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <?php
     /*
    ***** ENVOI *****
    */
    
        // Lorsque le formulaire a ete envoye
    if(isset($_GET['envoi'])) {
      try {
        // Titre, sous-titre et texte ont été renseignés
        if(!empty($_POST['titre'])) {
          $titre = $_POST['titre'];
          $lien_photo = NULL;
          $video = NULL;

          // On publie l'article
          $url = strtolower($titre);
          $url = str_replace(" ", "-", $url);

          // Verifie si le titre n'existe pas déja (parce que si oui ça déconne sec)
          $valuesT = array ("titre" => $titre);
          $nbTi = $bdd->queryCount("SELECT id FROM medias WHERE titre = :titre;", $valuesT);
          // echo $nbTi;
          if ($nbTi > 0) {
              echo('<div class="soft-notif alert">Titre déja existant, veuillez réessayer avec un autre titre </div>');
          }else{

                // Soit une vidéo, soit une photo a été choisie
                if(!empty($_POST['video']) xor !empty($_FILES['image']['name'])) {

                  // Si c'est une photo, on la met sur le serveur
                  if(!empty($_FILES['image']['name'])) {

                    // Verifie si l'image est valide
                    $target_dir = "../img/img_articles/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    $image_name = basename($_FILES["image"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    $check = getimagesize($_FILES["image"]["tmp_name"]);
                    if($check !== false) {
                        //echo "File is an image - " . $check["mime"] . "\n";
                        $lien_photo = $image_name;
                        $uploadOk = 1;
                    } else {
                        echo "Le fichier n'est pas une image.";
                        $uploadOk = 0;
                    }

                    // Upload de l'image
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                        //echo "Upload de l'image réussi\n";
                    } else {
                        //echo "Echec lors de l'upload\n";
                    }
                  } else {
                    // Si c'est une vidéo, on récupère l'url
                    $video = $_POST['video'];
                  }

                  //Insertion dans la base
                  $mediaValues = array (
                      'url' => $url,
                      'titre' => $titre,
                      'image' => $lien_photo,
                      'video' => $video
                  );
                  $bdd -> queryCreate("INSERT INTO medias (url, titre, image, video) VALUES(:url, :titre, :image, :video)", $mediaValues);

                } else {
                  echo('<div class="soft-notif alert">Veuillez renseigner une photo OU une vidéo</div>');
                }
            }   
          } else {
            echo('<div class="soft-notif alert">Veuillez renseigner les champs requis</div>');
          }

      } catch (Exception $e) {
        echo('<div class="soft-notif alert">Erreur:'.$e.'</div>');
      }
    }

    ?>

    
    
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Pierr Cika
            </a>
            <!-- Header Navbar: style can be found in header.less -->
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/LEAME.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Bonjour</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                         <li class="active">
                            <a href="index.php">
                                <i class="fa fa-calendar"></i> <span>Calendrier</span>
                            </a>
                            <a href="articles.php">
                                <i class="fa fa-magic"></i> <span>Articles</span>
                            </a>
                            <a href="medias.php">
                                <i class="fa fa-comments-o"></i> <span>Medias</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Médias
                        <small>Gestionaire des médias</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                        <li class="active">Medias</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Ajouter un Media </h3>
                                </div>
                                <div class="box-body">
                                    <form method="post" action="?envoi" name="ajouter_media" id="ajouter_media"  enctype="multipart/form-data">
                                     <div class="form-group">

                                        <label for="titre">Titre du Media :</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre" required>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>

                                        <label for="image">Ajouter une image:</label>
                                        <input type="file" class="file" id="image" name="image">

                                        <label for="video">Ajouter une vidéo:</label>
                                        <div class="input-group">
                                            <input type="text" class="datepicker form-control" name="video" id="video" placeholder="Ajoutez le lien de la video">
                                            <span class="input-group-addon"></span>
                                        </div>

                                    </div>
                                    <input type="submit" name="ajouter_media" value="Ajouter" class="btn btn-info pull-center">
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Liste des Médias </h3>
                                </div>
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>#ID</th>
                                      <th>Titre</th>
                                      <th>Date</th>
                                      <th>Modifier</th>
                                      <th>Supprimer</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
    
                                    <?php
                                       $medias = $bdd->query(" SELECT * FROM medias;"); 
                                       foreach ($medias as $media) :
                                     ?>

                                        <td scope="row"><?= $media->id; ?></td>
                                        <td><?= $media->titre; ?></td>
                                        <td><?= $media->date; ?></td>
                                        <td><a href="#" class="btn btn-warning" data-dismiss="modal" data-toggle="modal" data-target="#fullCalModalDel"><i class="fa fa-edit"></i></a></td>
                                        <td><a href="#" class="btn btn-danger" style="float: left" data-dismiss="modal" data-toggle="modal" data-target="#fullCalModalDel"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <?php endforeach ?>
                                  </tbody>
                                </table>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    


                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>
        <script src="js/calendar.js" type="text/javascript"></script>
        <!-- Page specific script -->
        <!-- Select2 -->
        <script src="js/select2.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
              $(".js-example-basic-single").select2();
            });
        </script>
        <script type="text/javascript" src="js/recap.js"></script>
        <script src="js/print.js" type="text/javascript"></script>

    </body>
</html>