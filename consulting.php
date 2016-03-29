<?php
include 'config/config.php';
$pageID = 3;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>KKRDF | Consulting</title>
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
                        Consulting
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo baseUrl(); ?>index.php">Home</a></li>
                        <li class="page">Consulting</li>
                    </ol>
                </div>
            </div>
        </div>

        <section id="about-intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">MOBILITY</h1>
                        <div class="the-company wow fadeIn">
                            <div class="project-images">
                                <a href="#">
                                    <img class="img-responsive" src="upload/mobility.jpg" alt="MOBILITY">
                                </a>
                            </div>
                            <div class="the-company wow fadeIn">
                                <p>
                                    Mobile devices have become central to the way we work, play, collaborate and interact with others.
                                    Billions of people around the globe will access the Internet for the first time using a mobile platform.
                                    These devices are also unique in that they are highly personalized and can carry significant intelligence 
                                    on our actions and locations. They can also provide us location specific information at the most relevant 
                                    instants. For the first time, consumerization of IT
                                </p>
                                <p><a href="<?php echo baseUrl(); ?>mobility.php"><span class="label label-primary">Read More</span></a></p>

                            </div>
                        </div>
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">BUSINESS INTELLIGENCE</h1>
                        <div class="the-company wow fadeIn">
                            <div class="project-images">
                                <a href="#">
                                    <img class="img-responsive" src="upload/business_intelligence.jpg" alt="BUSINESS INTELLIGENCE">
                                </a>
                            </div>
                            <div class="the-company wow fadeIn">
                                <p>
                                    <strong>Business Intelligence Services</strong> are becoming crucial due to the challenges faced by business
                                    today on how to centralize all the critical data held in internal and external systems and manage it for the right people,
                                    at the right time. Business intelligence solutions convert the data in your existing business systems
                                </p>
                                <p><a href="<?php echo baseUrl(); ?>businessintelligence.php"><span class="label label-primary">Read More</span></a></p>

                            </div>
                        </div>
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">APPLICATION DEVELOPMENT</h1>
                        <div class="the-company wow fadeIn">
                            <div class="project-images">
                                <a href="#">
                                    <img class="img-responsive" src="upload/application_development.jpg" alt="APPLICATION DEVELOPMENT">
                                </a>
                            </div>
                            <div class="the-company wow fadeIn">
                                <p>
                                    In today’s business environment when technology as an enabler can be a powerful competitive advantage. 
                                    Enterprises often build custom applications to meet their unique business needs. 
                                    Often existing package solutions are not a good fit or cost competitive and in 
                                    those scenarios developing customer specific software solutions is the right strategy.
                                </p>
                                <p><a href="<?php echo baseUrl(); ?>applicationdevelopment.php"><span class="label label-primary">Read More</span></a></p>

                            </div>
                        </div>
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">PROJECT MANAGEMENT</h1>
                        <div class="the-company wow fadeIn">
                            <div class="project-images">
                                <a href="#">
                                    <img class="img-responsive" src="upload/project_management.png" alt="PROJECT MANAGEMENT">
                                </a>
                            </div>
                            <div class="the-company wow fadeIn">
                                <p>
                                    We have a vast amount of experience and can assist you with all areas of project management including:
                                </p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Using robust platforms like SAP, Oracle, and Microsoft etc. To develop superior business solutions, information security and enterprise architecture.</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Through our shared services model, ITIL, ITSM and cultural transformation capabilities. We ensure that changes are managed and controlled systematically,
                                    thus minimizing any undue disruption to IT services delivered to the customer.</p>
                                <p><a href="<?php echo baseUrl(); ?>projectmanagement.php"><span class="label label-primary">Read More</span></a></p>

                            </div>
                        </div>
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">PRODUCT ENGINEERING</h1>
                        <div class="the-company wow fadeIn">
                            <div class="project-images">
                                <a href="#">
                                    <img class="img-responsive" src="upload/product_engineering.jpg" alt="PRODUCT ENGINEERING">
                                </a>
                            </div>
                            <div class="the-company wow fadeIn">
                                <p>
                                    We help you reduce your product development cycle and increase capital efficiency.
                                    There is a new norm for technology companies around the world who are building products for a competetive market place.
                                    Businesses need to innovate quicker, go to market faster and simply do more with less.
                                    You can leverage our highly skilled resources to accelerate your product development at a competetive cost structure.
                                </p>
                                <p><a href="<?php echo baseUrl(); ?>projectmanagement.php"><span class="label label-primary">Read More</span></a></p>

                            </div>
                        </div>
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">CLOUD</h1>
                        <div class="the-company wow fadeIn">
                            <div class="project-images">
                                <a href="#">
                                    <img class="img-responsive" src="upload/cloud.jpg" alt="CLOUD">
                                </a>
                            </div>
                            <div class="the-company wow fadeIn">
                                <p>
                                    Cloud is beyond the experimentation stage. New entrants in the market with cloud business models are getting 
                                    tremendous traction and existing enterprises are starting their 
                                    journey to the cloud with internal applications and customer facing services..
                                </p>
                                <p><a href="<?php echo baseUrl(); ?>cloud.php"><span class="label label-primary">Read More</span></a></p>

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