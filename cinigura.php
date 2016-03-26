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
                        Cinigura Cal
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo baseUrl(); ?>our-works">Our Works</a></li>
                        <li><a href="<?php echo baseUrl(); ?>our-works">Onno Products</a></li>
                        <li class="page">Cinigura Cal</li>
                    </ol>
                </div>
            </div>
        </div>
        <section id="about-intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">CINIGURA CAL</h1>
                        <div class="the-company wow fadeIn">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="project-images">
                                <a href="#">
                                    <img class="img-responsive" src="upload/cinigura.jpg" alt="CINIGURA CAL">
                                </a>
                            </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-12">
                                <div class="the-company wow fadeIn">
                                <h2>চিনি-গুড়া চাল (১ কেজি)</h2>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;শতকরা দৈনিক চাহিদা ২০০০ ক্যালরি ডায়েটের উপর নির্ভরশীল</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;কন্ট্রাক্ট ফার্মিং-এর মাধ্যমে উৎপাদিত এবং স্বাস্থ্যসম্মত উপায়ে কম্পিউটারাইজড সর্টিং ও ডিস্টোনিং মেশিনে প্রক্রিয়াজাতকৃত</p>
                                <p><i class="fa fa-hand-o-right"></i>&nbsp;বিরিয়ানি, পোলাও, ফিরনি, ক্ষির, , খিচুরী, ও ভাত রান্নার উপযোগী</p>
                            </div>
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