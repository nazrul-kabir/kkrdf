<?php
$totalSC = 0;
$arraySC = array();
$sqlSC = "SELECT * FROM sister_concern WHERE sister_concern_status = 'Active'";
$resultSC = mysqli_query($con, $sqlSC);
if ($resultSC) {
    while ($objSC = mysqli_fetch_object($resultSC)) {
        $arraySC[] = $objSC;
    }
} else {
    
}
?>
<?php if (count($arraySC) > 0): ?>
    <section id="clients">
        <div class="container">
            <h5 class="section-title">
                KKRDF SISTER CONCERN
            </h5>
            <ul>  
                <div class="col-lg-12 col-md-12 col-sm-12">              
                    <ul id="sisterconcern">
                        <?php foreach ($arraySC AS $SC): ?>
                            <li>
                                <div class="thumbnail">
                                    <figure class="">
                                        <a title="<?php echo $SC->sister_concern_name; ?>" href="<?php echo $SC->sister_concern_link; ?>">
                                            <img src="<?php echo $config['IMAGE_UPLOAD_URL'] . '/sister_concern_image/' . $SC->sister_concern_image; ?>" style="height: 150px;" alt="<?php echo $SC->sister_concern_name; ?>"/></a>  
                                    </figure>
                                    <div class="caption">
                                        <h4><?php echo $SC->sister_concern_name; ?></h4>
                                        <a href="<?php echo $SC->sister_concern_link; ?>" target="_blank"><span class="label label-primary">View More</span></a>
                                    </div>
                                </div>

                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </ul>            
        </div>
    </section>
<?php endif; ?>




