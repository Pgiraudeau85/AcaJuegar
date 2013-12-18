<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf8"/>
        <link rel="stylesheet" type="text/css" href="../_/css/bootstrap-theme.css"/>
        <link rel="stylesheet" type="text/css" href="../_/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="../_/css/flipclock.scss"/>
        <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
        <script type="text/javascript" src="../_/js/acajuegar.js"></script>
        <script type="text/javascript" src="../_/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../_/js/flipclock.js"></script>
        <script type="text/javascript" src="../_/js/flipclock.min.js"></script>
        <script type="text/javascript" src="../_/js/base.js"></script>
        <script type="text/javascript" src="../_/js/es-es.js"></script>
        <script type="text/javascript" src="../_/js/counter.js"></script>
        <script type="text/javascript" src="../_/js/dailycounter.js"></script>
        <script type="text/javascript" src="../_/js/hourlycounter.js"></script>
        <script type="text/javascript" src="../_/js/hourlycounter.js"></script>
        <script type="text/javascript" src="../_/js/minutecounter.js"></script>
        <script type="text/javascript" src="../_/js/twelvehourclock.js"></script>
        <script type="text/javascript" src="../_/js/twentyfourhourclock.js"></script>
        <script type="text/javascript" src="../_/js/chrono.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> <b> <h4 align="center">AcaJuegar - Cuestionario sobre América Latina</h4>  </b></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">


                    <li class="dropdown">


                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">

                    </div>

                </form>
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">


                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <div class="clock" style="margin:2em;"></div>
	<div class="message"></div>

        <?php
        include('c:/wamp/www/AcaJuegar/installs/install01/include.php');
        include(ROOT . 'index.php');
        ?>
    </body>
</html>

