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
                    <h1 class="section-title page-title">Mobility</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo baseUrl(); ?>consulting.php">Consulting</a></li>
                        <li class="page">Mobility</li>
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
                                <p>Mobile devices have become central to the way we work, play, collaborate and interact with others. Billions of people around the globe will access the Internet for the first time using a mobile platform. These devices are also unique in that they are highly personalized and can carry significant intelligence on our actions and locations. They can also provide us location specific information at the most relevant instants. For the first time, consumerization of IT is driving enterprise strategies where the individual can define how they would like their workflow to be organized.</p>
                                <p>For enterprises, mobile platforms can drive new possibilities to increase efficiency, but also allow them to connect with their end customers in ways that was never possible. A successful mobile strategy can be of great significance for today’s enterprises.</p>
                                <p>When it comes to consumer applications, there are new business models that leverage both the existing social media trends as well as geo-specific intelligence. We believe we are in the beginning of many innovative consumer applications beyond games and basic two-way communication, that will fundamentally change the way we shop, consume content, share and socialize.</p>
                                <p>The KKRDF Mobile Team understands that mobility is not about creating a single stand-alone app when it comes to the enterprise. The success of the application will depend on how well you integrate it with existing applications. We will help you develop a strategy both at a business and technology level to create an optimal solution. Our team of highly creative UI designers can build compelling prototypes that will help define a solution starting at conceptual level. Once the UI is finalized, our team of experienced developers both front and back-end technologist can build applications that fit your needs.</p>
                                <p><strong>What we do</strong></p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Strategy development</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;User Interface and User Experience design</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Application development</p>
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