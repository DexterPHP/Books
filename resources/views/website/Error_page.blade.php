@include('website.static.header')

  <link rel="stylesheet" href="{{asset('css/404.css')}}">
  <style>
      html{    overflow-x: hidden;}
  </style>




    <section class="wrapper-404">

        <div class="container">

            <div id="scene" class="scene" data-hover-only="false">


                <div class="circle" data-depth="1.2"></div>

                <div class="one" data-depth="0.9">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>

                <div class="two" data-depth="0.60">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>

                <div class="three" data-depth="0.40">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>

                <p class="p404" data-depth="0.50">404</p>
                <p class="p404" data-depth="0.10">404</p>

            </div>

            <div class="text">
                <article>
                    <p>Sorry, the page you requested was not found </p>
                    <a href="/"><button>Home Page</button></a>
                </article>
            </div>

        </div>
    </section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="{{asset('js/404.js')}}"></script>



@include('website.static.footer')
