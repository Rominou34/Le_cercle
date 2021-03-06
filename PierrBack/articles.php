<?php
   session_start();
    require 'db.class.php';
   $bdd = new DB();?>
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
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
   </head>
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
                  Articles
                  <small>Gestionaire des articles</small>
               </h1>
               <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                  <li class="active">Articles</li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <?php
               if(isset($_GET['alert'])) {
                  if ($_GET['alert'] == 'errorField') { ?>
                <div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Erreur !</strong>  Vous n'avez pas remplit tous les champs.</div>
                 <?php } else if ($_GET['alert'] == 'errorVisu') { ?>
                 <div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Erreur !</strong>  Veuillez ajouter une image ou une vidéo.</div>
                 <?php } else if ($_GET['alert'] == 'success') { ?>
                 <div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Succès !</strong>  L'article a bien été ajouté.</div>
                 <?php } else if ($_GET['alert'] == 'successDel') { ?>
                 <div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Succès !</strong>  L'article  a bien été supprimé.</div>
                 <?php } else if ($_GET['alert'] == 'errorDel') { ?>
                 <div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Erreur !</strong>  L'article  n'a pas été supprimé.</div>
                <?php } else if ($_GET['alert'] == 'successEdit') { ?>
                 <div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Succès !</strong>  L'article  a bien été modifié.</div>
                 <?php } else if ($_GET['alert'] == 'errorEdit') { ?>
                 <div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Erreur !</strong>  L'article  n'a pas été modifié.</div>
                 <?php } else if ($_GET['alert'] == 'errorUploadImg') { ?>
                 <div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Erreur !</strong>  L'image n'a pas été uploadée.</div>
                 <?php } else if ($_GET['alert'] == 'errorPubliArticle') { ?>
                 <div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Erreur !</strong> L'article n'a pas été mis en ligne.</div>
                 <?php
                 } } ?>
               <div class="row">
                  <div class="col-md-6">
                     <div class="box box-primary">
                        <div class="box-header">
                           <h3 class="box-title">Ajouter un Article </h3>
                        </div>
                        <div class="box-body">
                           <form method="post" action="ajouter_article.php" name="ajouter_article" id="ajouter_article"  enctype="multipart/form-data">
                              <div class="form-group">
                                 <label for="titre">Titre de l'article :</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <label for="soustitre">Sous Titre de l'article:</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="soustitre" id="soustitre" placeholder="Sous-Titre" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <label for="texte">Contenu de l'article:</label>
                                 <div class="input-group">
                                    <textarea class="form-control" rows="5" name="texte" id="texte" placeholder="Ajoutez le texte de l'article dans ce cadre" required></textarea>
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
                              <input type="submit" name="ajouter_article" value="Ajouter" class="btn btn-info pull-center">
                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                     <div class="box box-primary">
                        <div class="box-header">
                           <h3 class="box-title">Liste des Articles </h3>
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
                                    $articles = $bdd->query(" SELECT * FROM articles;");
                                    foreach ($articles as $article) :
                                    ?>
                                 <td scope="row"><?= $article->id; ?></td>
                                 <td><?= $article->titre; ?></td>
                                 <td><?= $article->date; ?></td>
                                 <td>
                                    <a href="#" class="btn btn-warning" data-dismiss="modal" data-toggle="modal" data-target="#edit-<?php echo($article->id); ?>">
                                    <i class="fa fa-edit"></i>
                                    </a>
                                 </td>
                                 <td><a href="#" class="btn btn-danger" style="float: left" data-dismiss="modal" data-toggle="modal" data-target="#fullCalModalDel<?= $article->id; ?>"><i class="fa fa-trash-o"></i></a></td>
                              </tr>
                              <div class="modal fade" id="fullCalModalDel<?= $article->id; ?>" role="dialog" aria-labelledby="myModalLabel">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <form method="post" action="del_article.php" name="del_article" id="del_article">
                                          <div class="modal-header">
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                             <h4 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment supprimer cette article ?</h4>
                                             <input type="hidden" name="num" value="<?= $article->id; ?>">
                                          </div>
                                          <div class="modal-body">
                                              <h3><?php echo($article->titre); ?><h3>
                                              <h4><?php echo($article->soustitre); ?><h4>
                                              <p><?php echo($article->texte); ?><p>
                                              <?php
                                                if($article->image != NULL) {
                                                  ?>
                                                  <img src="../assets/img/img_articles/<?php echo($article->image) ?>" style="max-width: 100%; display: block; margin: auto;"></img>
                                                  <?php
                                                } else {
                                                  ?>

                                                  <?php
                                                }
                                              ?>
                                              </div>
                                          <div class="modal-footer">
                                             <a href="#" class="btn btn-default" style="float: left" data-dismiss="modal">ANNULER</a>
                                             <input type="submit" name="del_article" value="SUPPRIMER" class="btn btn-danger">
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                              <?php endforeach ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </section>
            <!-- /.content -->
         </aside>
         <!-- /.right-side -->
      </div>

      <!-- MODAL DE MODIFICATION !-->
      <?php
        foreach ($articles as $article) {
      ?>

      <div class="modal fade" tabindex="-1" role="dialog" id="edit-<?php echo($article->id); ?>">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Article #<?php echo($article->id); ?></h4>
            </div>
            <div class="modal-body">
              <form method="post" action="modifier_article.php?id=<?php echo($article->id)?>" name="edit_<?php echo($article->id) ?>" id="ajouter_article"  enctype="multipart/form-data">
               <div class="form-group">

                  <label for="titre">Titre de l'article :</label>
                  <div class="input-group">
                      <input type="text" class="form-control" name="titre" id="titre" value="<?php echo($article->titre); ?>" required>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                  </div>

                  <label for="soustitre">Sous Titre de l'article:</label>
                  <div class="input-group">
                      <input type="text" class="form-control" name="soustitre" id="soustitre" value="<?php echo($article->soustitre); ?>" required>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                  </div>

                  <label for="texte">Contenu de l'article:</label>
                  <div class="input-group">
                      <textarea class="form-control" rows="5" name="texte" id="texte" required><?php echo($article->texte); ?></textarea>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                  </div>
                  <?php
                    if($article->image != NULL) {
                      ?>
                      <img src="../assets/img/img_articles/<?php echo($article->image) ?>" style="max-width: 100%;"></img>
                      <?php
                    } else {
                      ?>
                      <label for="video">Vidéo:</label>
                      <div class="input-group">
                          <input type="text" class="datepicker form-control" name="video" id="video" value="<?php echo($article->video); ?>" required>
                          <span class="input-group-addon"></span>
                      </div>
                      <?php
                    }
                  ?>
              </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
              <button type="button" class="btn btn-danger" onclick='document.forms["<?php echo("edit_".$article->id)?>"].submit();'>Sauvegarder</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <?php } ?>

      <!-- ./wrapper -->
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
      <script>
        var alert = document.querySelector(".alert");
        if(alert) {
          setTimeout(function() {
            alert.parentElement.removeChild(alert);
          }, 3000);
        }
      </script>
   </body>
</html>
