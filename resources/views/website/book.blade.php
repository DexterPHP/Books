@include('website.static.header')
@if(isset($book))


    <section id="blogSingleRightSidebar" class="blog blog-single pb-50" style="background-image: url(https://www.pdfiles.net/images/backgrounds/1.jpg); background-size: cover; background-position: center center;">

        <div class="container">
            <div class="reservation__wrapper">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="reservation__banner">
                            <img class="reservation__banner-img" src="{{$book->poster}}" alt="background" style="height: auto;">

                        </div><!-- /.reservation__banner -->
                        <div class="menu__block">
                            <h4 class="menu__block-title">Related Books</h4>
                            @foreach($related as $rela)
                                <div class="menu-item">
                                    <h4 class="menu__item-title">
                                        <a href="/c/{{$rela->id}}" title="{{$rela->title}}">{{$rela->title}}</a>
                                    </h4>
                                </div><!-- /.menu-item -->
                                <br />
                            @endforeach
                        </div><!-- /.menu__block -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <form class="reservation__form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="reservation__form-heading  mb-30">

                                        <div class="d-flex justify-content-between">
                                            <h5>{{$book->title}}</h5>

                                        </div>
                                        <p class="heading__desc">{{$book->description}}</p>
                                    </div><!-- /.heading -->
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="reservation__banner">

                                        <div class="reservation__banner-inner">
                                            <h5 class="reservation__banner-inner-title">Book Details</h5>
                                            <ul class="list-unstyled">
                                                <li><span>Category:</span><span> <a href="/Cater/{{$cater->title_link}}">{{$cater->title}}</a></span></li>
                                                <li><span>Doc Type:</span><span> PDF [ Portable Document Format ]</span></li>
                                                <li><span>Count Of Pages:</span><span> {{$book->pages}}</span></li>
                                                <li><span>Size:</span><span> {{$book->size}}</span></li>
                                                <li><span>md5 :</span><span> {{md5($book->title)}}</span></li>
                                                <li><span>Last Update :</span><span> {{ $book->updated_at}}</span></li>
                                                <li><span>Downloaded:</span><span> {{$book->download_count}}</span></li>
                                                <li><span>Last Updated:</span><span> {{$book->updated_at}}</span></li>
                                            </ul>

                                        </div><!-- /.reservation__banner-inner -->

                                    </div>

                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="widget-tags mb-40">
                                        <ul class="list-unstyled">
                                            @php
                                                $vars = explode(' ',$book->title);
                                                foreach ($vars as $tags){
                                                    $result = preg_replace("/[^a-zA-Z0-9]+^[\u0621-\u064A0-9 ]+$/", "", $tags);
                                                    if(strlen($result) > 2){
                                                        echo '<li>
                                                                <a href="/search?query='.$tags.'" style="text-decoration: none;" class="subject-label" title="'.$tags.'">'.$tags.'
                                                                  <i class="fa fa-tags"></i>
                                                                 </a>
                                                               </li>
                                                         ';
                                                    }
                                                }
                                            @endphp

                                        </ul>
                                    </div>
                                    <div class="blog-share mb-40">
                                        <h5 class="post__share-title">Share:</h5>
                                        <ul class="social__icons">
                                            @php
                                                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                            @endphp
                                            <li><a href="https://facebook.com/sharer/sharer.php?u={{$actual_link}}"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://twitter.com/intent/tweet/?text={{$book->title}}&url={{$actual_link}}"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="mailto:?subject={{$book->title}}&body={{$actual_link}}"><i class="fa fa-envelope-square"></i></a></li>
                                            <li><a href="https://api.whatsapp.com/send?text={{$actual_link}}"><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </div>




                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <a href="/pdf/read/{{$book->title_link}}" class="btn btn__primary btn__block"><i class="fa fa-eye"></i> Read Online</a>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-sm-4 col-md-4 col-lg-4 float-right">
                                    <a href="{{$book->download_link}}" class="btn btn__secondary btn__block"><i class="fa fa-download"></i> Download Now </a>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-sm-4 col-md-4 col-lg-4 float-right">
                                    <a href="/report?reportFor={{$book->title}}&SeNumber={{$book->id}}" class="btn btn__primary btn__bordered btn__lg btn__block"><i class="fa fa-exclamation-triangle"></i> Abuse This Book! </a>
                                </div><!-- /.col-lg-12 -->

                                <div class="readBook" style="display: none">
                                    <h3>{{$book->title}}</h3>


                                </div>
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <script>
        document.title = 'كتاب  {{$book->title}} Free';
    </script>
@endif

@include('website.static.footer')


