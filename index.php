<?php
include './config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './headerscript.php'; ?> 
    </head>
    <body>
        <header id="header-wrap">
            <?php include './topnav.php'; ?>
            <?php include './header.php'; ?>
            
        </header>
        <?php include 'slider.php'; ?>
        <section id="service-block-main">
            
            <div class="container">
                <h5 class="section-title">
                    WELCOME TO KKRDF
                </h5>
                <p style="text-align: justify;">KKRDF is a specialist technology consulting firm that provides advanced & robust solutions to large Multi-National Corporation, Small & Medium Enterprises (SME) and Local Government Agencies across various vertical industries. We are a leading provider of value-added IT Consulting, Innovative Software Development and Business Process Outsourcing (BPO)</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-4 text-center">
                        <div class="service-item wow fadeInUpQuick animated" data-wow-delay=".5s">
                            <div class="icon-wrapper">
                                <i class="fa fa-desktop fa-4x"></i>
                            </div>
                            <h2 style="font-size: 25px;">Business & Technology Consulting</h2>
                            <p>We quickly and efficiently analyse the business processes required to create or deliver information</p>                            
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-4 text-center">
                        <div class="service-item wow fadeInUpQuick animated" data-wow-delay=".8s">
                            <div class="icon-wrapper">
                                <i class="fa fa-area-chart fa-4x"></i>
                            </div>
                            <h2 style="font-size: 25px;">Project Management</h2>
                            <p>We have a vast amount of experience and can assist you with all areas of project management including</p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-4 text-center">
                        <div class="service-item wow fadeInUpQuick animated" data-wow-delay="1.1s">
                            <div class="icon-wrapper">
                                <i class="fa fa-mobile-phone fa-4x"></i>
                            </div>
                            <h2 style="font-size: 25px;">Application Development</h2>
                            <p>In the post recession era, managing end-customer relationships to drive revenue growth is a priority</p>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include './whychooseus.php'; ?>
        <?php include './products.php'; ?>     
        <?php include './footer.php'; ?>
        <?php include './footerscript.php'; ?>
    </body>
</html>