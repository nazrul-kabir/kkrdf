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

        <section id="blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="sidebar">
                        <div class="search-box">
                            <form action="" method="get">
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
                        <div class="post">
                            <header class="entry-header">
                                <h1 class="blog-title entry-title">Colorful Easter Eggs</h1>
                            </header>
                            <img src="assets/img/blog/blog-01.jpg" alt="">
                            <div class="post-content">
                                <div class="date">
                                    <a href="#">
                                        <i class="fa fa-user">                      
                                        </i>
                                        Imran
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-clock-o">
                                        </i>
                                        Septemer 13
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-comments">
                                        </i>
                                        9 Comments
                                    </a>
                                </div>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                                <div class="reading clearfix">
                                    <ul class="social-icons-fill light pull-right">   
                                        <li>
                                            <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter">
                                                <i class="fa fa-twitter">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook">
                                                <i class="fa fa-facebook">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Google+">
                                                <i class="fa fa-google-plus">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="LinkedIn">
                                                <i class="fa fa-linkedin">
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- share-btn -->          
                                </div>
                            </div>
                        </div>
                        <div class="author">
                            <div class="author-avatar">
                                <img src="assets/img/blog/avatar.jpg" alt="">
                            </div>              
                            <div class="author-comment">
                                <h4 class="author-name">
                                    Imran
                                </h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <a class="author-link btn btn-common" href="#" rel="author">View all posts by Imran</a>
                            </div>
                            <div class="clear">
                            </div>
                        </div>

                        <nav class="navigation">
                            <div class="nav-links">
                                <div class="nav-previous">
                                    <a href="#">Plain Gallery Post Format</a>
                                </div>
                                <div class="nav-next">
                                    <a href="#">Plain Standard Post</a>
                                </div>
                            </div>
                        </nav>

                        <div id="comments" class="havecomments">
                            <h3>
                                <i class="fa fa-comment-o"></i>
                                5 Comments 
                                <a class="btn btn-success pull-right" href="#respond">
                                    <i class="fa fa-plus"></i>
                                    Comments 
                                </a>
                            </h3>

                            <ol class="commentlist">
                                <li class="comment">
                                    <article class="clearfix comment-container">
                                        <div class="comment-author">
                                            <img src="assets/img/blog/img-1.png" alt="">
                                        </div>
                                        <div class="comment-content">
                                            <cite class="fn"><a href="#">Mohammad Musharrof</a></cite>
                                            <time datetime="2015-04-2"><a href="#">April 2nd, 2015 </a></time>
                                            <section class="comment_content clearfix">
                                                <p>Hey, Nicely Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s</p>
                                            </section>
                                            <a class="comment-reply-link btn btn-danger btn-sm" href="#">Reply</a> 
                                        </div>
                                        <!-- END comment-content -->
                                    </article>
                                    <ul class="children">
                                        <li class="comment byuser comment-author-imranmodel32 bypostauthor odd alt depth-2">
                                            <article id="comment-32" class="clearfix comment-container">
                                                <div class="comment-author">
                                                    <img src="assets/img/blog/img-1.png" alt="">
                                                </div>
                                                <div class="comment-content">
                                                    <cite class="fn"><a href="http://wpbean.com" class="url">Imran</a></cite>
                                                    <time datetime="2015-04-2"><a href="http://graygrids.com/demos/wordpress/plain/colorful-easter-eggs/#comment-32">April 2nd, 2015 </a></time>
                                                    <section class="comment_content clearfix">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.</p>
                                                    </section>
                                                    <a class="comment-reply-link btn btn-danger btn-sm" href="#">Reply</a> 
                                                </div>
                                                <!-- END comment-content -->
                                            </article>
                                            <ul class="children">
                                                <li class="comment byuser comment-author-imranmodel32 bypostauthor even depth-3">
                                                    <article class="clearfix comment-container">
                                                        <div class="comment-author">
                                                            <img src="assets/img/blog/img-1.png" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <cite class="fn"><a href="#" class="url">Imran</a></cite>
                                                            <time datetime="2015-04-2"><a href="#">April 2nd, 2015 </a></time>
                                                            <section class="comment_content clearfix">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500.</p>
                                                            </section>
                                                            <a class="comment-reply-link btn btn-danger btn-sm" href="#">Reply</a> 
                                                        </div>
                                                        <!-- END comment-content -->
                                                    </article>
                                                </li>
                                                <li class="comment odd alt depth-3">
                                                    <article class="clearfix comment-container">
                                                        <div class="comment-author">
                                                            <img src="assets/img/blog/img-1.png" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <cite class="fn"><a href="#" class="url">Mohammad Musharrof</a></cite>
                                                            <time datetime="2015-04-2"><a href="#">April 2nd, 2015 </a></time>
                                                            <section class="comment_content clearfix">
                                                                <p>unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                            </section>
                                                            <a class="comment-reply-link btn btn-danger btn-sm" href="#">Reply</a> 
                                                        </div>
                                                        <!-- END comment-content -->
                                                    </article>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="comment even thread-odd thread-alt depth-1">
                                    <article class="clearfix comment-container">
                                        <div class="comment-author">
                                            <img src="assets/img/blog/img-1.png" alt="">
                                        </div>
                                        <div class="comment-content">
                                            <cite class="fn"><a href="#" class="url">Mohammad Musharrof</a></cite>
                                            <time datetime="2015-04-2"><a href="#">April 2nd, 2015 </a></time>
                                            <section class="comment_content clearfix">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                            </section>
                                            <a class="comment-reply-link btn btn-danger btn-sm" href="#">Reply</a> 
                                        </div>
                                        <!-- END comment-content -->
                                    </article>
                                </li>
                            </ol>
                        </div>

                        <div class="respond">
                            <h3>Leave a Comment</h3>
                            <form action="" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <input class="form-control" name="Name" id="author" value="" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <input class="form-control" name="Email" id="author" value="" type="text" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <input class="form-control" name="web" id="author" value="" type="text" placeholder="Website">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea class="form-control input-lg" name="comment" rows="4" placeholder="Type your comment here..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button class="btn btn-common" type="submit">Post Comment</button>
                                    </div>
                                </div>
                                <p class="comment-subscription-form">
                                    <input name="subscribe_comments" value="s"type="checkbox"> 
                                    <label class="subscribe-label" id="subscribe-label" for="subscribe_comments">Notify me of follow-up comments by email.</label>
                                </p>
                                <p class="comment-subscription-form">
                                    <input name="subscribe_blog" id="subscribe_blog" value="subscribe"  type="checkbox">
                                    <label class="subscribe-label" id="subscribe-blog-label" for="subscribe_blog">Notify me of new posts by email.</label>
                                </p>
                            </form>
                        </div>
                    </div>

                   
                </div>
            </div>
        </section>
        <!-- Blog-page Section End -->

        <?php include './footer.php'; ?>
        <?php include './footerscript.php'; ?>
    </body>
</html>