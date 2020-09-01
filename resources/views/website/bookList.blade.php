<!-- ========================
        Menu layout 6
    =========================== -->
@if(isset($data))
<section id="shop3Columns" class="shop shop-grid shop-grid-3col pb-90">
    <div class="container">
        @foreach ($data as $cater)
            <div class="row filtered-items-wrap">
                @foreach ($cater->BooksInCater->take(6) as $Book)
                    <!-- book  -->
                    <div class="col-sm-6 col-md-6 col-lg-4 mix filter-salads">
                        <div class="product-item">
                            
                            <div class="ribbon ribbon-top-left"><span>Free Download</span></div>
                            
                            <div class="product__img">
                                <img data-src="{{$Book->poster}}" alt="{{$Book->title}}" class="lazy lazyload">
                                <div class="product__hover">
                                    <div class="product__action">
                                        <a href="/pdf/view/{{$Book->title_link}}" target="_self" title="{{$Book->title}}" class="btn btn__primary btn__hover2">Read or Download</a>
                                    </div><!-- /.product__action -->
                                </div><!-- /.product__hover-->
                            </div><!-- /.product-img -->
                            <div class="product__content">
                                <div class="product__cat">
                                    <a  target="_self" title="{{$cater->title}}" href="/Cater/{{$cater->title_link}}">{{$cater->title}}</a>

                                </div>
                                <h4 class="product__title"><a  target="_self" href="/pdf/view/{{$Book->title_link}}">{{$Book->title}}</a></h4>
                                <span class="product__price">{{$Book->size}}</span>
                            </div><!-- /.product-content -->
                        </div><!-- /.product-item -->
                    </div><!-- /.col-lg-4 -->
                    <!-- //book  -->
                @endforeach
             </div><!-- /.row -->
        @endforeach
        <!-- /<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center mt-20">
                <a href="Cater/" class="btn-custom">View All Categories</a>
            </div>
        </div>.row -->
    </div><!-- /.container -->
</section><!-- /.shop 4 Columns -->
@endif