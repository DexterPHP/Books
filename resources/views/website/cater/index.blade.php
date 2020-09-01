@include('website.static.header')
<section id="blogGrid" class="blog blog-grid pb-60 bg-overlay-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-50">
                    <span class="heading__subtitle">Our Category</span>
                    <h2 class="heading__title">Descover Our Category </h2>
                    <div class="heading__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <path d="M515,925a10,10,0,1,0,10,10A10.011,10.011,0,0,0,515,925Zm7,13.865a2.568,2.568,0,0,1-.651-0.549,3.235,3.235,0,0,0-5.209,0,1.449,1.449,0,0,1-1.146.683,1.419,1.419,0,0,1-1.2-.695,3.2,3.2,0,0,0-2.548-1.3,3.345,3.345,0,0,0-2.605,1.316,2.625,2.625,0,0,1-.64.544,7.953,7.953,0,0,1-.928-2.86h15.862A7.926,7.926,0,0,1,522,938.863ZM507.069,934a7.948,7.948,0,0,1,.928-2.859,2.617,2.617,0,0,1,.64.543A3.345,3.345,0,0,0,511.242,933a3.2,3.2,0,0,0,2.548-1.3,1.423,1.423,0,0,1,1.2-.7,1.452,1.452,0,0,1,1.146.685,3.237,3.237,0,0,0,5.209,0,2.575,2.575,0,0,1,.651-0.55,7.939,7.939,0,0,1,.932,2.865H507.069ZM515,927a7.975,7.975,0,0,1,5.8,2.509,5.325,5.325,0,0,0-.914.806,1.3,1.3,0,0,1-2.292,0,3.287,3.287,0,0,0-5.289.035,1.286,1.286,0,0,1-1.066.648,1.452,1.452,0,0,1-1.145-.683,5.348,5.348,0,0,0-.9-0.8A7.972,7.972,0,0,1,515,927Zm0,16a7.97,7.97,0,0,1-5.808-2.516,5.3,5.3,0,0,0,.9-0.8,1.452,1.452,0,0,1,1.145-.685,1.288,1.288,0,0,1,1.066.649,3.288,3.288,0,0,0,5.289.036,1.3,1.3,0,0,1,2.292,0,5.241,5.241,0,0,0,.914.806A7.972,7.972,0,0,1,515,943Z" transform="translate(-505 -925)"></path>
                        </svg>
                    </div>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <!-- Post Item #1 -->
            @foreach($data as $cater)
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="/Cater/{{$cater->title_link}}">
                                <img src="{{$cater->icon}}" alt="post image">
                            </a>
                        </div><!-- /.post__img -->
                        <div class="post__content">
                            <h4 class="post__title"><a href="/Cater/{{$cater->title_link}}" title="{{$cater->title}}">{{$cater->title}}</a></h4>
                            <p class="post__desc">{{$cater->description}}</p>
                            <a href="/Cater/{{$cater->title_link}}" class="btn btn__secondary btn__link">View Book</a>
                        </div><!-- /.post__content -->
                    </div><!-- /.post-item -->
                </div><!-- /.col-lg-4 -->

            @endforeach



        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@include('website.static.footer')
