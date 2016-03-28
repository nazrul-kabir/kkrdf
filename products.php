<?php
$arrayProduct = array();
$sqlProduct = "SELECT * FROM product WHERE product_status = 'Active'";
$resultProduct = mysqli_query($con, $sqlProduct);
if ($resultProduct) {
    while ($objProduct = mysqli_fetch_object($resultProduct)) {
        $arrayProduct[] = $objProduct;
    }
} else {
    
}
?>
<?php if (count($arrayProduct) > 0): ?>
    <section id="clients">
        <div class="container">
            <h1 class="section-title" style="font-size: 30px;">OUR PRODUCTS</h1>
            <ul>  
                <div class="col-lg-12 col-md-12 col-sm-12">              
                    <ul id="photodiv">
                        <?php foreach ($arrayProduct AS $product): ?>
                            <li>
                                <div class="thumbnail">
                                    <figure class="">
                                        <a title="<?php echo $product->product_title; ?>" href="viewdetails.php?pid=<?php echo $product->product_id; ?>">
                                            <img src="<?php echo $config['IMAGE_UPLOAD_URL'] . '/product_image/' . $product->product_image; ?>" style="height: 100px;" alt="<?php echo $product->product_title; ?>"/></a>  
                                    </figure>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </ul>            
        </div>
    </section>
<?php endif; ?>