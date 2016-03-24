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
                        Our Story
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo baseUrl(); ?>home">Home</a></li>
                        <li class="page">Our Story</li>
                    </ol>
                </div>
            </div>
        </div>
        <section id="about-intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h1 class="small-title">Chairman’s Message</h1>
                        <div class="the-company wow fadeIn">
                            <p><strong>Welcome to KKRDF System Website</strong></p>              
                            <p>Khan & Khan Research and Development Foundation (<strong>KKRDF</strong>) is a private software development company in collaboration 
                                with its joint venture partner. It has been established in December 1996. Since its inception, <strong>KKRDF</strong> has been 
                                persistently developing skills and expertise in software development and ensures quality projects and products.
                                We provide software solutions using a range of technologies including .NET, J2EE, J2ME, Android, iOS, Windows 
                                Mobile and platforms including Windows, Macintosh, Unix, Linux.</p>
                            <p>In <strong>KKRDF</strong>, we have developed a homogenous team which works as a synonymous of “family”. Here, we translate company rules into practice which ensures the highest level of professionalism. We constantly encourage our employees to thrive by fully utilising their highest potential. KKRDF engages in sustainable practices and look forward to the needs of our clients. Our organization works closely with our clients communicating in every stages of a project – we never let them to feel lonely. Our talented Executives do work hard to give the outstanding services to our clients.</p>
                            <p>Consequently, I am extremely proud of what we have been doing, and even more excited about our outlook for a promising future. Our future includes a consistent growth as well as making a significant difference in IT industry, Asian economy and Global Business.</p>
                            <p>Thank you very much for visiting our website. We hope you find it useful and that you learn of our passion to make Asia a truly global player in IT industry</p>
                            <p><strong>Badal Khan</strong></p>
                            <p><strong>Chairman <br>KKRDF</strong></p>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <section id="about-intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
        </section>
        <?php include './products.php'; ?>
        <?php include './footer.php'; ?>
        <?php include './footerscript.php'; ?>
    </body>
</html>