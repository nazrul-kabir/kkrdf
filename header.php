<?php 
$addClass = "active";

?>
<section id="header">
    <div class="logo-menu">
        <nav class="navbar navbar-default navbar-plain" role="navigation" data-spy="affix" data-offset-top="50">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar"></button>
                    <a class="navbar-brand" href="<?php echo baseUrl(); ?>index.php">
                        <img src="assets/img/kkrdf.png" alt="KKRDF">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav animated-nav navbar-right">
                        <li class="<?php if($pageID == 1){ echo $addClass;} ?>">
                                <a href="<?php echo baseUrl(); ?>index.php">Home</a>
                            </li>  
                            <li class="dropdown dropdown-toggle <?php if($pageID == 2){ echo $addClass;} ?>">
                                <a href="<?php echo baseUrl(); ?>ourstory.php">Our Story</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a href="<?php echo baseUrl(); ?>whyus.php">Why Us</a></li>
                                </ul>
                            </li>  
                        <li class="dropdown dropdown-toggle <?php if($pageID == 3){ echo $addClass;} ?>">
                            <a href="<?php echo baseUrl(); ?>consulting.php">Consulting</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo baseUrl(); ?>mobility.php">Mobility</a></li>
                                <li><a href="<?php echo baseUrl(); ?>businessintelligence.php">Business Intelligence</a></li>
                                <li><a href="<?php echo baseUrl(); ?>applicationdevelopment.php">Application Development</a></li>
                                <li><a href="<?php echo baseUrl(); ?>projectmanagement.php">Project Management</a></li>
                                <li><a href="<?php echo baseUrl(); ?>productengineering.php">Product Engineering</a></li>
                                <li><a href="<?php echo baseUrl(); ?>cloud.php">Cloud</a></li>
                            </ul>                   
                        </li>
                        <li class="dropdown dropdown-toggle  <?php if($pageID == 4){ echo $addClass;} ?>">
                            <a href="<?php echo baseUrl(); ?>ourworks.php" data-toggle="dropdown">Our Works</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo baseUrl(); ?>enterprisedevelopment.php">Enterprise Development</a></li>
                                <li><a href="<?php echo baseUrl(); ?>ios.php">iOS</a></li>
                                <li><a href="<?php echo baseUrl(); ?>android.php">Android</a></li>

                                <li class="dropdown"><a href="">Onno Products</a>
                                    <ul class="dropdown-menu sub-menu">
                                        <li><a href="<?php echo baseUrl(); ?>atta.php">Atta</a></li>
                                        <li><a href="<?php echo baseUrl(); ?>cinigura.php">Chinigura Chal</a></li>
                                        <li><a href="<?php echo baseUrl(); ?>moyda.php">Moyda</a></li>
                                        <li><a href="<?php echo baseUrl(); ?>suji.php">Suji</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-toggle  <?php if($pageID == 5){ echo $addClass;} ?>">
                            <a href="<?php echo baseUrl(); ?>contact.php">Contact Us</a>
                        </li>
                        <li class="search">
                            <a href="#" class="open-search">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>
                    <form class="full-search">
                        <div class="container">
                            <input type="text" placeholder="Type to Search">
                            <a href="#" class="close-search"><span class="fa fa-times fa-2x"></span></a>
                        </div>
                    </form>
                </div>
            </div>
            <ul class="wpb-mobile-menu">
                <li class="active">
                    <a href="<?php echo baseUrl(); ?>index.php">Home</a>
                </li>                                    
                <li>
                    <a href="<?php echo baseUrl(); ?>ourstory.php">Our Story</a>
                    <ul>
                        <li><a href="<?php echo baseUrl(); ?>whyus.php">Why Us</a></li>
                    </ul>
                </li>             
                <li>
                    <a href="<?php echo baseUrl(); ?>consulting.php">Consulting</a>
                    <ul>
                        <li><a href="<?php echo baseUrl(); ?>mobility.php">Mobility</a></li>
                        <li><a href="<?php echo baseUrl(); ?>businessintelligence.php">Business Intelligence</a></li>
                        <li><a href="<?php echo baseUrl(); ?>applicationdevelopment.php">Application Development</a></li>
                        <li><a href="<?php echo baseUrl(); ?>projectmanagement.php">Project Management</a></li>
                        <li><a href="<?php echo baseUrl(); ?>productengineering.php">Product Engineering</a></li>
                        <li><a href="<?php echo baseUrl(); ?>cloud.php">Cloud</a></li>
                    </ul>
                </li>
                <!--<li><a href="<?php // echo baseUrl();     ?>technology.php">Technology</a></li>-->  
                <li>
                    <a href="<?php echo baseUrl(); ?>ourworks.php" data-toggle="dropdown">Our Works</a>
                    <ul>
                        <li><a href="<?php echo baseUrl(); ?>enterprisedevelopment.php">Enterprise Development</a></li>
                        <li><a href="<?php echo baseUrl(); ?>ios.php">iOS</a></li>
                        <li><a href="<?php echo baseUrl(); ?>android.php">Android</a></li>

                        <li><a href="">Onno Products</a>
                            <ul>
                                <li><a href="<?php echo baseUrl(); ?>atta.php">Atta</a></li>
                                <li><a href="<?php echo baseUrl(); ?>cinigura.php">Chinigura Chal</a></li>
                                <li><a href="<?php echo baseUrl(); ?>moyda.php">Moyda</a></li>
                                <li><a href="<?php echo baseUrl(); ?>suji.php">Suji</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="dropdown dropdown-toggle">
                    <a href="<?php echo baseUrl(); ?>contact.php">Contact Us</a>
                </li>
            </ul>
        </nav>
    </div>

</section>      