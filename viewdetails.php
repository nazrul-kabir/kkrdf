<?php
include './config/config.php';
$pid = '';
$product_title = '';
$product_details = '';
$product_image = '';
if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];
}

if ($pid > 0 && $pid != '') {
    $sql = "SELECT * FROM product WHERE product_id = $pid";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $obj = mysqli_fetch_object($result);
        $product_title = $obj->product_title;
        $product_details = $obj->product_details;
        $product_image = $obj->product_image;
    } else {
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>KKRDF | <?php echo $product_title; ?></title>
        <meta charset="utf-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php include './headerscript.php'; ?>
    </head>
    <body>
        <header id="header-wrap">
            <?php include './topnav.php'; ?>
            <?php include './header.php'; ?>
        </header>
        <section id="blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="sidebar">
                            <div class="search-box">
                                <form action="" method="POST">
                                    <fieldset>
                                        <div class="input-group">
                                            <input name="s" class="form-control" type="text" placeholder="SEARCH...">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn plain-search-btn">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <?php if ($count > 0): ?>
                            <div class="post">
                                <header class="entry-header">
                                    <h1 class="blog-title entry-title"><?php echo $product_title; ?></h1>
                                </header>
                                <div class="custom-carousel">              
                                    <div id="carousel-about-us" class="owl-carousel" role="listbox">
                                        <div class="item active">
                                            <img src="<?php echo $config['IMAGE_UPLOAD_URL'] . '/product_image/' . $product_image; ?>" alt="<?php echo $product_title; ?>" alt="...">
                                        </div>                 
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p style="text-align: justify;">
                                        <?php echo html_entity_decode(html_entity_decode($product_details, ENT_QUOTES | ENT_IGNORE, "UTF-8")); ?>
                                        <?php // echo html_entity_decode($product_details); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php include './leavemessage.php'; ?>
                </div>
            </div>
        </section>
        <?php include './footer.php'; ?>     
        <?php include './footerscript.php'; ?>
    </body>
</html>