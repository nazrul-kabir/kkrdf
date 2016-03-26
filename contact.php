<?php
include './config/config.php';
$contact_name = '';
$contact_email = '';
$contact_subject = '';
$contact_message = '';
if (isset($_POST['btnSave'])) {
    extract($_POST);
    $contact_name = validateInput($contact_name);
    $contact_email = validateInput($contact_email);
    $contact_subject = validateInput($contact_subject);
    $contact_message = validateInput($contact_message);
    $custom_array = '';
    $custom_array .= 'contact_name = "' . $contact_name . '"';
    $custom_array .= ',contact_email = "' . $contact_email . '"';
    $custom_array .= ',contact_subject = "' . $contact_subject . '"';
    $custom_array .= ',contact_message = "' . $contact_message . '"';


    $sql = "INSERT INTO contact SET $custom_array";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $success = "Thank you for your query. We will get back to you soon";
        $contact_name = '';
        $contact_email = '';
        $contact_subject = '';
        $contact_message = '';
    } else {
        $error = "Something went wrongF";
    }
}
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
                        <div class="col-md-12">
                            <?php include './message.php'; ?>
                        </div>
                        <div class="col-md-6 contact-form wow fadeIn">

                            <h3 class="small-title">
                                Send us a Message
                            </h3>

                            <form role="form" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control radius-input" id="contact_name" name="contact_name" placeholder="Enter Name" value="<?php echo $contact_name; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control radius-input" id="contact_email" name="contact_email" placeholder="Enter Email" value="<?php echo $contact_email; ?>" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control radius-input" id="contact_subject" name="contact_subject" placeholder="Enter Subject" value="<?php echo $contact_subject; ?>" required />
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea id="contact_message" name="contact_message" class="form-control flat-input" rows="11" placeholder="Enter Message"><?php echo $contact_message; ?></textarea>
                                </div>
                                <button type="submit" id="form-submit" name="btnSave" class="btn btn-common btn-lg">Send</button>
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