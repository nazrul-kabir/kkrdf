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
                        Technology
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo baseUrl(); ?>index.php">Home</a></li>
                        <li class="page">Technology</li>
                    </ol>
                </div>
            </div>
        </div>

        <section id="about-intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <p style="height: 20px;"></p>
                        <div class="the-company wow fadeIn">
                            <div class="project-images">
                                <a href="#">
                                    <img class="img-responsive" src="upload/technology.jpg" alt="TECHNOLOGY">
                                </a>
                            </div>
                            <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">DEVELOPMENT SKILLS AND EXPERIENCE</h1>
                            <div class="the-company wow fadeIn">
                                <p style="height: 20px;"></p>
                                <p>We have wide experience both in development platforms and business domains.</p>
                                <p>We don’t specialize in particular technologies, but we are definitely proficient and experienced with a
                                    wide array of tools and systems. Every product is unique and we try to fit the right team with the right skills for that particular product.
                                    Our teams have worked on web applications, created desktop applications and built numerous mobile apps.
                                </p>
                            </div>
                            <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">SOME OF THINGS THAT WE HAVE BUILT:</h1>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Social app with localization</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Large financial content portal</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Desktop based tax optimization tool</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Corporate data management application</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Document repository</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Database driven file system</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Content rich web application</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;LDAP management tool</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;iPhone/Android/Windows mobile applications</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Online holiday management tool</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Location content service</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Location based social app platform</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Flex based visio like diagramming tool</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Desktop based diagramming and layouting tool</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Symbian application</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;VoIP billing solution</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Mobile content solution</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;Stock trading portal</p>
                            <p><i class="fa fa-hand-o-right"></i>&nbsp;International trade research and management tool </p>
                        </div>
                    </div>          
                    <?php include './leavemessage.php'; ?>
                </div>
               <?php include './tools.php'; ?>
            </div>
        </section>
        <?php include './footer.php'; ?>
        <?php include './footerscript.php'; ?>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#tab_slider_1").carousel({
                    interval: 4000
                });
                $("#tab_slider_2").carousel({
                    interval: 4000
                });
            });
        </script>
    </body>
</html>