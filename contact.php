<?php
include './config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './headerscript.php'; ?>
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
                        Contact us
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo baseUrl(); ?>home">Home</a></li>
                        <li class="page">Contact us</li>
                    </ol>
                </div>
            </div>
        </div>
        <section id="contact2">
            <div class="contact-form-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 contact-form wow fadeIn">
                            <h3 class="small-title">
                                Send us a Message
                            </h3>
                            <form role="form">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control radius-input" id="name" placeholder="Enter name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control radius-input" id="email" placeholder="Enter email" required >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control radius-input" id="msg_subject" placeholder="Message Subject" required>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea id="message" class="form-control flat-input" rows="11" placeholder="Enter your message"></textarea>
                                </div>
                                <button type="submit" id="form-submit" class="btn btn-common btn-lg">Send</button>
                            </form>
                        </div>

                        <div class="contact-info col-md-6 wow fadeIn" data-wow-delay=".5s">
                            <h3 class="small-title">
                                Contact Information
                            </h3>
                            <div class="contact-info-wrapper clearfix">
                                <div class="contact-item-wrapper preset-bg">
                                    <h4>
                                        <i class="fa fa-envelope"></i>info@kkrdf.com
                                    </h4>
                                    <i class="fa fa-phone"></i>
                                    <h4>01626535406</h4>
                                    <i class="fa fa-map-marker"></i>
                                    <h4>House: 27, Road: 3, Nikunja 1, Dhaka- 1229</h4>
                                </div>
                                <div class="contact-item-wrapper dark-bg" style="background: #666;">
                                    <h4>
                                        <i class="fa fa-clock-o"></i>
                                        10AM to 6PM, Sat to Thr
                                    </h4>
                                    <h4>
                                        <i class="fa fa-info-circle"></i>
                                        Love to hear from you, KKRDF are always ready to response. 
                                    </h4>

                                </div>
                            </div>
                        </div>
                        

                    </div>
                    <p style="height: 30px;"></p>
                    <div class="col-md-12 hidden-xs hidden-sm">
                        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7299.6740374666815!2d90.41979663678828!3d23.82439393644111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65a3d9b9649%3A0xff4da0194c977480!2sNikunja+1%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1437369262336" width="1150" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></p>
                    </div>

                </div>
            </div>
        </section>

        <?php include './footer.php'; ?>
        <?php include './footerscript.php'; ?>


    </body>

</html>