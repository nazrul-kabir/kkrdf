<?php
$arrayProduct = array();
$sqlProduct = "SELECT * FROM product WHERE product_status = 'Active'";
$resultProduct = mysqli_query($con, $sqlProduct);
if ($resultProduct) {
    while ($objProduct = mysqli_fetch_object($resultProduct)){
        $arrayProduct[] = $objProduct;
    }
} else {
    
}
debug($arrayProduct);
?>
<section id="clients">
    <div class="container">
        <h1 class="section-title" style="font-size: 30px;">OUR PRODUCTS</h1>
        <div class="col-md-12">
            <ul id="flexiselDemo3">
                <li>
                    <a href="">
                        <img src="assets/img/products/1.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="assets/img/products/2.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="assets/img/products/3.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="assets/img/products/4.png" alt="" />
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="assets/img/products/5.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="assets/img/products/6.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="assets/img/products/7.jpg" alt="" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>        