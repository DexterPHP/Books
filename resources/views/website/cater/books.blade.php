@include('website.static.header')

<section id="faq" class="faq pb-70">
    <div class="container">
        <div class="row" id="accordion">
            @foreach($books as $book)
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="accordion-item">
                        <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse{{$book->id}}">
                            <a class="accordion__item-title" href="#">{{$book->title}}</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse{{$book->id}}" class="collapse" data-parent="#accordion">
                            <div class="accordion__item-body post-item ">
                                <div class="post__img">
                                    <a href="/pdf/view/{{$book->title_link}}">
                                        <img src="{{$book->poster}}" class="img-fluid"  alt="{{$book->title}}" />
                                    </a>
                                </div>

                                <p class="post__desc">{{$book->description}}</p>
                                <p>
                                    <a class="btn btn__secondary btn__link" href="/pdf/view/{{$book->title_link}}" title="{{$book->title}}" >Read Online or Download</a>
                                    <b class=" float-right">Downloads: {{$book->download_count	}}</b>
                                </p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                </div><!-- /.col-lg-6 -->
             @endforeach


        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<script>
    document.title = ' تحميل وقراءة كتب {{$title}}';
</script>
@include('website.static.footer')
