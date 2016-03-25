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
                        Application Development
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo baseUrl(); ?>consulting">Consulting</a></li>
                        <li class="page">Application Development</li>
                    </ol>
                </div>
            </div>
        </div>



        <section id="about-intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">APPLICATION DEVELOPMENT</h1>
                        <div class="the-company wow fadeIn">
                            <div class="project-images">
                                <a href="#">
                                    <img class="img-responsive" src="upload/application_development.jpg" alt="APPLICATION DEVELOPMENT">
                                </a>
                            </div>
                            <div class="the-company wow fadeIn">
                                <p>In today’s business environment when technology as an enabler can be a powerful competitive advantage. Enterprises often build custom applications to meet their unique business needs. Often existing package solutions are not a good fit or cost competitive and in those scenarios developing customer specific software solutions is the right strategy. Genweb2 can architect, design, develop and deploy custom built solutions to meet your specification. We will often use reusable components to make the process more efficient and help you choose the right tools and technology platforms to align with your organization’s business and IT architecture.</p>
                                <p>There are two possible approaches to custom application development:</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;<strong>Full life-cycle application development: We are responsible, start-to-finish, for analysis, design, implementation, testing and integration of systems.</strong></p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;<strong>Co-development: Our technical leads and analysts will work with your IT lead to jointly analyze, design, implement, test and integrate new systems</strong></p>
                                <p>Independent of technology platform used, we are often focused on issues such as scalability, security, usability and extensibility. Genweb2’s senior technical leadership has a long track record of building complex applications for many high-profile companies with global reach. While delivering technology is our passion, we always make sure that whatever we do is aligned with your business needs.</p>
                                <p><strong>What we do</strong></p> 
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Application design, development and implementation</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Re-engineering, performance tuning and porting services</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Implementation of packages</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;Consulting and requirement gathering for business cases</p>
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