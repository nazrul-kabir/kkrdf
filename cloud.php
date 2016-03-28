<?php
include './config/config.php';
?>
<!DOCTYPE php>
<php lang="en">
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
                        Cloud
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo baseUrl(); ?>consulting">Consulting</a></li>
                        <li class="page">Cloud</li>
                    </ol>
                </div>
            </div>
        </div>

        <section id="about-intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">CLOUD</h1>
                        <div class="the-company wow fadeIn">
                            <div class="project-images">
                                <a href="#">
                                    <img class="img-responsive" src="upload/cloud.jpg" alt="PRODUCT ENGINEERING">
                                </a>
                            </div>
                            <div class="the-company wow fadeIn">
                                <p><strong>Cloud</strong> is beyond the experimentation stage. New entrants in the market with cloud business models are getting tremendous traction and existing enterprises are starting their journey to the cloud with internal applications and customer facing services. There are several layers of value to be gained from migrating to the cloud: it is driving standardization, creating access for consumers of services from any device at anytime and anywhere, and it is allowing the organization to manage the cost of IT in a more flexible manner.</p>
                                <p>However, this journey to the cloud can be complex. IT teams typically focus on technical issues such as security and scalability; while business stakeholders are eager to deploy cloud solutions fast to be able to capture new revenue streams. KKRDF consultants can be the trusted advisor to look at all aspects such as infrastructure, platform and applications, as well as be a single point of contact to ensure that the journey to the cloud is seamless, cost effective and timely.</p>
                                <p><strong>What we do</strong></p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Develop, deploy and manage cloud solutions</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Consult on cloud analytics solutions</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Scalability and security</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Language localization</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Migration of legacy solutions to cloud ready solutions</p>
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