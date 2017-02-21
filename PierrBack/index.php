<?php
session_start();
require 'db.class.php';
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
                        Calendrier
                        <small>Gestionaire des événements</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                        <li class="active">Calendrier</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                <?php if ($_GET['alert'] == 'errorField') { ?>
                    <div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Erreur!</strong> Vous n'avez pas remplit tous les champs.</div>
                <?php } else if ($_GET['alert'] == 'success') { ?>
                    <div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Succès!</strong> L'évenement a bien été ajoutée.</div>
                <?php } else if ($_GET['alert'] == 'successDel') { ?>
                    <div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Succès!</strong>  L'évenement  a été supprimée.</div>
                <?php } else if ($_GET['alert'] == 'errorDel') { ?>
                    <div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Erreur!</strong>  L'évenement  n'a pas été supprimée.</div>
                <?php } ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h4 class="box-title">Récapitulatif événements</h4>
                                </div>
                                <div class="box-body">
                                    <!-- the events -->
                                    <div id='external-events'> 
                                        <p>les évenements apparaissent sous cette forme dans le calendrier: </p>
                                        <div class='external-event bg-blue' style="cursor: default;">Evenement</div>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /. box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Ajouter un évenement </h3>
                                </div>
                                <div class="box-body">
                                    <form method="post" action="ajouter_commande.php" name="ajouter_commande" id="ajouter_commande">
                                     <div class="form-group">

                                        <label for="nom">Nom de l'évenement :</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom de l'évenement" required>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>

                                        <label for="lieu">Lieu:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="lieu" id="lieu" placeholder="Lieu de l'évenement " required>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>

                                        <label for="desc">Description:</label>
                                        <div class="input-group">
                                            <textarea class="form-control" name="desc" id="desc"></textarea>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>

                                        <label for="prix">Prix:</label>
                                       <div class="input-group">
                                            <input type="text" class="form-control" name="prix" id="prix" placeholder="Prix de l'évenement " required>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>

                                        <label for="date">Date de l'évenement:</label>
                                        <div class="input-group">
                                            <input type="text" class="datepicker form-control" name="date" id="date" placeholder="Sélectionnez la date" required>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>

                                    </div>
                                    <input type="submit" name="ajouter_commande" value="Ajouter" class="btn btn-info pull-center">
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <div class="box box-primary">                                
                                <div class="box-body no-padding">
                                    <!-- THE CALENDAR -->
                                    <div id="calendar"></div>
                                    <!-- Modal -->
                                    <?php 
                                        $commandes = $bdd->query("SELECT * FROM commande");
                                        foreach ($commandes as $commande):
                                            $date = date_create($commande->date_livraison);
                                    ?>
                                    <div class="modal fade" id="fullCalModal<?= $commande->num; ?>" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="exampleModalLabel">Récapitulatif de l'évenement</h4>
                                                </div>
                                                <div class="modal-body" id="printThis">
                                                    <h1 class="titleCom" style="display:none;">Récapitulatif de la commande <br><br></h1>
                                                    <h4>Numéro de l'évenement : <?= $commande->num; ?></h4>
                                                    <h4>Date de l'évenement : <?= date_format($date, 'd / m / Y'); ?></h4>
                                                    <br>
                                                    <h4>Lieu : <?= $commande->patient_id; ?></h4>
                                                    <br>
                                                    <h4>Nom de l'évenement : <?= $commande->prix_produit_id; ?></h4>
                                                    <h4>Prix : <?= $commande->id_praticien ?>€</h4>
                                                    <br>
                                                    <h4>Description : <?= $commande->description; ?></h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#" class="btn btn-danger" style="float: left" data-dismiss="modal" data-toggle="modal" data-target="#fullCalModalDel<?= $commande->num; ?>"><i class="fa fa-2x fa-trash-o"></i></a>
                                                    <a href="#" class="btn btn-default" data-dismiss="modal"><i class="fa fa-2x fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="fullCalModalDel<?= $commande->num; ?>" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form method="post" action="del_commande.php" name="del_commande" id="del_commande">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment supprimer cette évenement ?</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" name="num" value="<?= $commande->num; ?>">
                                                    <h4>Numéro de l'évenement : <?= $commande->num; ?></h4>
                                                    <h4>Date de l'évenement : <?= date_format($date, 'd / m / Y'); ?></h4>
                                                    <br>
                                                    <h4>Lieu : <?= $commande->patient_id; ?></h4>
                                                    <br>
                                                    <h4>Nom de l'évenement : <?= $commande->prix_produit_id; ?></h4>
                                                    <h4>Prix : <?= $commande->id_praticien ?>€</h4>
                                                    <br>
                                                    <h4>Description : <?= $commande->description; ?></h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#" class="btn btn-default" style="float: left" data-dismiss="modal">ANNULER</a>
                                                    <input type="submit" name="del_commande" value="SUPPRIMER" class="btn btn-danger">
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                </div><!-- /.box-body -->
                            </div><!-- /. box -->
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
        <!-- Date Picker -->
        <script src="js/picker.js" type="text/javascript"></script>
        <script src="js/picker.date.js" type="text/javascript"></script>
        <script>
            $('.datepicker').pickadate({
                format: 'd mmmm yyyy',
                firstDay: 1,
                formatSubmit: 'yyyy-mm-dd',
                hiddenName: true,
            })
        </script>
        <script type="text/javascript" src="js/recap.js"></script>
        <script src="js/print.js" type="text/javascript"></script>

    </body>
</html>