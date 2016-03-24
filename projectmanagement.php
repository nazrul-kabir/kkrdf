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
                        Project Management
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="">Consulting</a></li>
                        <li class="page">Project Management</li>
                    </ol>
                </div>
            </div>
        </div>

        <section id="about-intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">PROJECT MANAGEMENT</h1>
                        <div class="the-company wow fadeIn">
                            <div class="project-images">
                                <a href="#">
                                    <img class="img-responsive" src="upload/project_management.png" alt="PROJECT MANAGEMENT">
                                </a>
                            </div>
                            <div class="the-company wow fadeIn">
                                <p style="height: 20px;"></p>
                                <p>We have a vast amount of experience and can assist you with all areas of project management including:</p>
                                
                                
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Using robust platforms like SAP, Oracle, and Microsoft etc. To develop superior business solutions, information security and enterprise architecture.</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Through our shared services model, ITIL, ITSM and cultural transformation capabilities. We ensure that changes are managed and controlled systematically, thus minimizing any undue disruption to IT services delivered to the customer.</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Converged and mobile technology, Virtualization, and technical architecture – through our partnerships with Microsoft, Cisco, Citrix and VMware.</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Planning, Estimating & Forecasting of Time & Cost</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Vendor Selection & Management</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Dependency Management</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Project Tracking & Reporting</p>
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