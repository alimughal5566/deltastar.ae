
<?php
    $main_slider=\App\Models\HomePage::all();
?>

<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-75" data-loop="true">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">


            @foreach($main_slider as $main)
            <div class="swiper-slide">
                <div class="container">
                    <div class="slider-caption">
                        <div>
                            <h2>{{$main->title}}</h2>
                            <!-- <p class="d-none d-sm-block">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your own Canvas.</p> -->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide-bg" style="background-image: url({{asset('assets/demos/construction/images/slider/'.$main->thumbnail)}}); background-position: center top;"></div>
            </div>
            @endforeach
        </div>
        <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
        <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
    </div>

</section>
