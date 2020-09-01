@include('website.static.header_read')
@if(isset($book))

    <script>
        document.title = 'قراءة كتاب : {{$book->title}}';
    </script>
    <section id="blogSingleRightSidebar" class="blog blog-single pb-50" style="background-image: url({{asset('images/backgrounds/1.jpg')}}); background-size: cover; background-position: center center;">

        <div class="container">

            <iframe style="width:100%; height:600px;" frameborder="0" src="https://docs.google.com/gview?url={{$book->view_link}}&embedded=true" />


        </div><!-- /.container -->
    </section>

@endif

@include('website.static.footer')
