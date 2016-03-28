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
                        Product Engineering
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo baseUrl(); ?>consulting.php">Consulting</a></li>
                        <li class="page">Product Engineering</li>
                    </ol>
                </div>
            </div>
        </div>
        <section id="about-intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">PRODUCT ENGINEERING</h1>
                        <div class="the-company wow fadeIn">
                            <div class="project-images">
                                <a href="#">
                                    <img class="img-responsive" src="upload/product_engineering.jpg" alt="PRODUCT ENGINEERING">
                                </a>
                            </div>
                            <div class="the-company wow fadeIn">
                                <p>We help you reduce your product development cycle and increase capital efficiency. There is a new norm for technology companies around the world who are building products for a competetive market place. Businesses need to innovate quicker, go to market faster and simply do more with less. You can leverage our highly skilled resources to accelerate your product development at a competetive cost structure.</p>
                                <p>Building amazing products not only requires leading-edge technology skills, but also good understanding of end markets. Many of our product managers are ex-Silicon Valley professionals with deep appreciation of product innovation and the need for agility. We understand the DNA of start-ups and high growth companies, where a disciplined approach must be complemented with a constant need to evolve.</p>
                                <p>Our teams are passionate about the work they do and that becomes the key to the notion of ‘shared responsibility’. It is hard enough when your team members are sitting right next to you, and it’s even harder when your remote engineering team is sitting in different time zones. We deal with this issue up front by leveraging many real-time collaboration tools, in-person workshops at the client’s location among key team members, and agile methodologies.</p>
                                <p>Transparency is one of the key values that drive productivity in the long run. We ensure that issues are communicated early when they occur. We spend a lot of time sensitizing our team members on global project management practices and communication styles. We view communication as a key element that drives success and we invest in improving this skill at all layers of the company.</p>
                                <p><strong>What we do</strong></p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;System architecture design</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Software development</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;QA & testing</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Language localization</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Project management</p>
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