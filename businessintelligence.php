<?php
include './config/config.php';
$pageID = 3;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>KKRDF | Consulting | Business Intelligence</title>
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
                        Business Intelligence
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo baseUrl(); ?>consulting.php">Consulting</a></li>
                        <li class="page">Business Intelligence</li>
                    </ol>
                </div>
            </div>
        </div>
        <section id="about-intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">BUSINESS INTELLIGENCE</h1>
                        <div class="the-company wow fadeIn">
                            <div class="project-images">
                                <a href="#">
                                    <img class="img-responsive" src="upload/business_intelligence.jpg" alt="BUSINESS INTELLIGENCE">
                                </a>
                            </div>
                            <div class="the-company wow fadeIn">
                                <p><strong>Business Intelligence</strong> Services are becoming crucial due to the challenges faced by business today on how to centralize all the critical data held in internal and external systems and manage it for the right people, at the right time. Business intelligence solutions convert the data in your existing business systems into strategic value through a comprehensive business intelligence environment.</p>

                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Unlock your data to provide historical, current, and predictive views of business operations.</p>

                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Real Time, easy to visualize information for insightful decisions</p>

                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Pre-defined & Ad-hoc reporting</p>

                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Real Time analysis & drill down capabilities</p>

                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Real Time, visually stunning dashboards</p>

                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Data Integration & Data Mining</p>                                                        
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