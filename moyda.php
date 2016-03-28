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
                        Moyda
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="">Our Works</a></li>
                        <li><a href="">Onno Products</a></li>
                        <li class="page">Moyda</li>
                    </ol>
                </div>
            </div>
        </div>
        <section id="about-intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">MOYDA</h1>
                        <div class="the-company wow fadeIn">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="project-images">
                                    <a href="#">
                                        <img class="img-responsive" src="upload/moyda.jpg" alt="MOYDA">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-12">
                                <div class="the-company wow fadeIn">
                                    <h2>ময়দা (১ কেজি)</h2>
                                    <p><i class="fa fa-hand-o-right"></i>&nbsp;বাছাইকৃত উন্নত গম থেকে প্রস্তুত</p>
                                    <p><i class="fa fa-hand-o-right"></i>&nbsp;দেশের সর্ববৃহৎ অত্যাধুনিক স্বয়ংক্রিয় মেশিনে প্রক্রিয়াজাত</p>
                                    <p><i class="fa fa-hand-o-right"></i>&nbsp;সুইজারল্যান্ডের বুলার মেশিনে তৈরী ১০০%</p>
                                    <p><i class="fa fa-hand-o-right"></i>&nbsp;ভিটামিন , মিনারেল ও প্রোটিনসমৃদ্ধ</p>
                                    <p><i class="fa fa-hand-o-right"></i>&nbsp;উন্নত প্যাকেটে বাজারকৃত</p>
                                </div>
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