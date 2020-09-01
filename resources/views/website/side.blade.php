
<section id="blogSingleRightSidebar" class="blog blog-single pb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                <span class="pagetitle__subheading">{{$book->created_at}}</span>
                <h1 class="pagetitle__heading">{{$book->title}}</h1>
            </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="post-item">
                    <div class="post__content">
                        <div class="post__desc">

                            <div class="post__img">
                                <a href="#">
                                    <img src="{{$book->poster}}" alt="post image ">
                                </a>
                            </div><!-- /.post-img -->

                            <div class="post__img">
                                <a href="#" class="btn__primary float-right"><i class="fa fa-eye"></i> Read Online </a>
                                <a href="#" class="btn__secondary float-left"><i class="fa fa-download"></i> Download Now!! </a>
                            </div><!-- /.post-img -->


                            <p>
                                {{$book->description}}
                            </p>
                        </div><!-- /.post-desc -->
                    </div><!-- /.post-content -->
                </div><!-- /.post-item -->
                <div class="widget-tags mb-40">
                    <ul class="list-unstyled">
                        <li><a href="#">Responsive</a></li>
                        <li><a href="#">Fresh</a></li>
                        <li><a href="#">Modern</a></li>
                        <li><a href="#">Corporate</a></li>
                        <li><a href="#">Business</a></li>
                    </ul>
                </div>
                <div class="blog-share mb-40">
                    <h5 class="post__share-title">Share:</h5>
                    <ul class="social__icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div><!-- /.post-share -->



            </div><!-- /.col-lg-8 -->


<div class="col-sm-12 col-md-12 col-lg-4">
    <aside class="sidebar">
        <div class="widget widget-search">
            <h5 class="widget__title">Search</h5>
            <div class="widget__content">
                <form class="widget__form-search">
                    <input type="text" class="form-control" placeholder="Type and hit enter ...">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div><!-- /.widget-content -->
        </div><!-- /.widget-search -->
        <div class="widget widget-categories">
            <h5 class="widget__title">categories</h5>
            <div class="widget-content">
                <ul class="list-unstyled mb-0">
                    <li><a href="#">Dinner Recipes <span>(1)</span></a></li>
                    <li><a href="#">Vegan Recipes <span>(3)</span></a></li>
                    <li><a href="#">Healthy Food <span>(2)</span></a></li>
                    <li><a href="#">Italian Food <span>(1)</span></a></li>
                    <li><a href="#">Indian Food <span>(4)</span></a></li>
                    <li><a href="#">Korean Food <span>(2)</span></a></li>
                </ul>
            </div><!-- /.widget-content -->
        </div><!-- /.widget-categories -->
        <div class="widget widget-posts">
            <h5 class="widget__title">Recent Posts</h5>
            <div class="widget__content">
                <!-- post item #1 -->
                <div class="widget-post-item">
                    <div class="widget__post-img">
                        <a href="#"><img src="assets\images\blog\thumbs\1.jpg" alt="product"></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget__post-content">
                        <span class="widget__post-date">Oct 23, 2020</span>
                        <h6 class="widget__post-title"><a href="#">Tiny Apple Pies with Cinnamon Buns for Two</a></h6>
                    </div><!-- /.widget-post-content -->
                </div><!-- /.widget-post-item -->
                <!-- post item #2 -->
                <div class="widget-post-item">
                    <div class="widget__post-img">
                        <a href="#"><img src="assets\images\blog\thumbs\2.jpg" alt="product"></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget__post-content">
                        <span class="widget__post-date">Oct 7, 2020</span>
                        <h6 class="widget__post-title"><a href="#">Healthy &amp; Simple Recipes That Are Perfect for
                                Spring</a></h6>
                    </div><!-- /.widget-post-content -->
                </div><!-- /.widget-post-item -->
            </div><!-- /.widget-content -->
        </div><!-- /.widget-posts -->
        <div class="widget widget-tags">
            <h5 class="widget__title">Tags</h5>
            <div class="widget-content">
                <ul class="list-unstyled">
                    <li><a href="#">Responsive</a></li>
                    <li><a href="#">Fresh</a></li>
                    <li><a href="#">Modern</a></li>
                    <li><a href="#">Corporate</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </div><!-- /.widget-content -->
        </div><!-- /.widget-Tags -->
    </aside><!-- /.sidebar -->
</div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

