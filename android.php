<?php
include './config/config.php';
$pageID = 4;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>KKRDF | Our Works | Android</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php include './headerscript.php'; ?>
        <style>
            p{text-align: justify;}
        </style>
    </head>
    <body>
        <header id="header-wrap">
            <?php include './topnav.php'; ?>
            <?php include './header.php'; ?>

        </header>
        <div class="page-header">
            <div class="page-header-inner">
                <div class="container">
                    <h1 class="section-title page-title">
                        Android
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="">Our Works</a></li>
                        <li class="page">Android</li>
                    </ol>
                </div>
            </div>
        </div>
        <section id="about-intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">ANDROID</h1>
                        <div class="the-company wow fadeIn">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="project-images">
                                <a href="#">
                                    <img class="img-responsive" src="upload/android.png" alt="ANDROID">
                                </a>
                            </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-12">
                                <div class="the-company wow fadeIn">
                                <h2>kLOCU$</h2>
                                <p>kLOCU$ is a cool and interactive app based on location finder that allows users to interact over great distance. 
                                    Find your friends in the crowd, have fun with them and  assured about their whereabouts and safety.
                                </p>
                            </div>
                            </div>                            
                        </div>
                    </div>          
                    <?php include './leavemessage.php'; ?>
                </div>
            </div>
        </section>
        <?php include './footer.php'; ?>
        <?php include './footerscript.php'; ?>
    </body>
</html>