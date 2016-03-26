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
                        Why Us
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo baseUrl(); ?>our-story">Our Story</a></li>
                        <li class="page">Why Us</li>
                    </ol>
                </div>
            </div>
        </div>
        <section id="other-services">
            <div class="container">
                <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">
                    FOUR INGREDIENTS YOU NEED FOR AMAZING SOFTWARE – ALL IN ONE PLACE
                </h1>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <article class="other-service-item wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;">
                            <div class="icon">
                                <i class="icon-Brush icon-medium"></i>
                            </div>              
                            <div class="service-content">
                                <h3>Passion</h3>
                                <p style="text-align: justify">
                                    We just love software development – it’s as simple as that. That love brings in the passion to create something amazing. And the passion gives us the energy that drives us. We call it
                                    “THE PERPETUAL STARTUP SPIRIT”
                                    That’s just the easiest to explain this phenomenon to someone outside KKRDF.
                                    We just love software development – it’s as simple as that. That love brings in the passion to create something amazing. 
                                </p>
                            </div>
                        </article>
                        <article class="other-service-item wow fadeInUp animated" data-wow-delay=".8s" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s;">
                            <div class="icon">
                                <i class="icon-Eyeunhide icon-medium"></i>
                            </div>
                            <div class="service-content">
                                <h3>Culture</h3>
                                <p style="text-align: justify">
                                    We are not just a place where software gets made. We see our space as a place for solving problems, for fun and creativity, 
                                    for crafting things that are as simple to use as they are beautiful to look at. Our culture is open and without hierarchy.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <article class="other-service-item wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;">
                            <div class="icon">
                                <i class="icon-Rotate icon-medium"></i>
                            </div>              
                            <div class="service-content">
                                <h3>Skills</h3>
                                <p style="text-align: justify">
                                    Our technical team represents more than 10 years of software development experience. We are a very mixed group with expertise ranging from device driver developments to style sheets.  On the technology preference front we are equally varied, revolving our lives from Java to .NET to objective C to C++ with occasional dips into something more unusual like erlang or sleeping!
                                </p>
                            </div>
                        </article>
                        <article class="other-service-item wow fadeInUp animated" data-wow-delay=".8s" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s;">
                            <div class="icon">
                                <i class="icon-Palette icon-medium"></i>
                            </div>
                            <div class="service-content">
                                <h3>Process</h3>
                                <p style="text-align: justify">
                                    We are great believers of the agile methodology in software development. 
                                    Everything is bound to change and we are prepared for that change.
                                    We love to develop in small steps – giving our customers something to look at and give us feedback in at every stage.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <?php include './workprocess.php'; ?>
        <section id="about-intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">BEYOND KKRDF</h1>
                        <div class="the-company wow fadeIn">
                            <p>KKRDF provides offshore software development services focusing on Product Development, Mobile and Cloud.</p>   
                            <p>Organizations of all sizes from large multi-nationals to start-ups are increasingly leveraging global talent pool to design, develop and maintain their technology solutions. Offshore software development is no longer a new concept and is recognized to provide a compelling competitive advantage both in terms of cost and access to skills. However the advantages of this model are challenged when issues related to productivity, quality and communication take away from the perceived gain.</p>
                            <p><strong>KKRDF</strong> was conceptualized and designed with the vision to address these issues from the very start in 2009. The company was started by former executives from companies such as Microsoft, GE and IBM who understand the needs of global clients, as well as the need for quality.</p>
                            <p><strong>KKRDF</strong> has adopted the following core strategies to mitigate the typical offshore development challenges:</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Highly competent project managers and architects with experience working for global technology companies are the typical client interface for all projects. This helps mitigate issues related to communication and project management.</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;We are not capable of doing everything, but we do a few things really well. Narrow focus on core services allows for development of deep competency.</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;<strong>KKRDF</strong> maintains an optimal scale so that we never sacrifice quality for the sake of fast uncontrolled growth.</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Leverage multiple geographic locations (Singapore, India, Bangladesh and Croatia) to build skill capacity for optimizing cost as well as competency.</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Invest in communication and collaboration tools to bring together globally distributed teams.</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Ensure ethics and transparency are core values. Transparency allows us to build true partnerships with our clients ultimately delivering better results.</p>
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