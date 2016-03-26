<?php
include './config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
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
                        iOS
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo baseUrl(); ?>our-works">Our Works</a></li>
                        <li class="page">iOS</li>
                    </ol>
                </div>
            </div>
        </div>
        <section id="about-intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">iOS</h1>
                        <div class="the-company wow fadeIn">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="project-images">
                                    <a href="#">
                                        <img class="img-responsive" src="upload/ios.png" alt="iOS">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-12">
                                <div class="the-company wow fadeIn">
                                    <h2>K$ALTdOWN</h2>
                                    <p>This app helps to secure the specific data and contents saved mobile phone when it will be theft or lost.</p>
                                    <p>K$ALTdOWN Benefits:</p>
                                    <p><strong>What we do</strong></p>
                                    <p><i class="fa fa-hand-o-right"></i>&nbsp;Always active on background and auto start on Device boot</p>
                                    <p><i class="fa fa-hand-o-right"></i>&nbsp;Auto lock on SIM change and can lock remotely by sending SMS</p>
                                    <p><i class="fa fa-hand-o-right"></i>&nbsp;SMS notification on SIM Change to your predefined number</p>
                                    <p><i class="fa fa-hand-o-right"></i>&nbsp;Recover contacts from lost phone and delete Contacts, SMS, Calendar items, Images, Videos, Sound files remotely</p>
                                    <p><i class="fa fa-hand-o-right"></i>&nbsp;GPS tracking</p>
                                </div>
                            </div>
                        </div>
                    </div>          
                    <?php include './leavemessage.php'; ?>
                </div>
            </div>
        </section>
        <?php include './products.php'; ?>
        <?php include './footer.php'; ?>
        <?php include './footerscript.php'; ?>
    </body>
</html>