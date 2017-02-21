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
    </style>
        
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Ajouter un Article </h3>
                                </div>
                                <div class="box-body">
                                    <form method="post" action="ajouter_commande.php" name="ajouter_commande" id="ajouter_commande">
                                     <div class="form-group">

                                        <label for="nom">Titre de l'article :</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Titre" required>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>

                                        <label for="lieu">Sous Titre de l'article:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="lieu" id="lieu" placeholder="Sous-Titre" required>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>

                                        <label for="desc">Contenu de l'article:</label>
                                        <div class="input-group">
                                            <textarea class="form-control" rows="5" name="desc" id="desc" placeholder="Ajoutez le texte de l'article dans ce cadre"></textarea>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>

                                        <label for="prix">Ajouter une image:</label>
                                       <input id="input-1" type="file" class="file">

                                        <label for="date">Ajouter une vidéo:</label>
                                        <div class="input-group">
                                            <input type="text" class="datepicker form-control" name="date" id="date" placeholder="Ajoutez le lien de la video" required>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>

                                    </div>
                                    <input type="submit" name="ajouter_commande" value="Ajouter" class="btn btn-info pull-center">
                                    </form>
                                </div>
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