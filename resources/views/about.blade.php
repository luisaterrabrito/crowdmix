@extends ('layouts.layout')
@section('content')

<!-- ABOUT -->
<section id="about">
       <!-- CLEAN CODE -->
    {{--<div class="cleancode_block">--}}

        {{--<!-- CONTAINER -->--}}
        {{--<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">--}}

            {{--<!-- CASTOM TAB -->--}}
            {{--<div id="myTabContent" class="tab-content">--}}
                {{--<div class="tab-pane fade in active clearfix" id="tab1">--}}
                    {{--<p class="title"><b>Clean</b> Code</p>--}}
                    {{--<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>--}}
                {{--</div>--}}
                {{--<div class="tab-pane fade clearfix" id="tab2">--}}
                    {{--<p class="title"><b>Technical</b> Support</p>--}}
                    {{--<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>--}}
                {{--</div>--}}
                {{--<div class="tab-pane fade clearfix" id="tab3">--}}
                    {{--<p class="title"><b>Responsive</b></p>--}}
                    {{--<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>--}}
                {{--</div>--}}
                {{--<div class="tab-pane fade clearfix" id="tab4">--}}
                    {{--<p class="title"><b>Documentation</b></p>--}}
                    {{--<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>--}}
                {{--</div>--}}
                {{--<div class="tab-pane fade clearfix" id="tab5">--}}
                    {{--<p class="title"><b>Quality</b></p>--}}
                    {{--<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>--}}
                {{--</div>--}}
                {{--<div class="tab-pane fade clearfix" id="tab6">--}}
                    {{--<p class="title"><b>Support</b></p>--}}
                    {{--<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<ul id="myTab" class="nav nav-tabs">--}}
                {{--<li class="active"><a class="i1" href="#tab1" data-toggle="tab"><i></i><span>Clean Code</span></a></li>--}}
                {{--<li><a class="i2" href="#tab2" data-toggle="tab"><i></i><span>Support</span></a></li>--}}
                {{--<li><a class="i3" href="#tab3" data-toggle="tab"><i></i><span>Responsive</span></a></li>--}}
                {{--<li><a class="i4" href="#tab4" data-toggle="tab"><i></i><span>Documentation</span></a></li>--}}
                {{--<li><a class="i5" href="#tab5" data-toggle="tab"><i></i><span>Quality</span></a></li>--}}
                {{--<li><a class="i6" href="#tab6" data-toggle="tab"><i></i><span>Support</span></a></li>--}}
            {{--</ul><!-- CASTOM TAB -->--}}
        {{--</div><!-- //CONTAINER -->--}}
    {{--</div><!-- //CLEAN CODE -->--}}
</section><!-- //ABOUT -->

<!-- TEAM -->
<section id="team">

    <!-- CONTAINER -->
    <div class="container">
        <h2><b>Our</b> Team</h2>

        <!-- ROW -->
        <div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">

            <!-- TEAM SLIDER -->
            <div class="owl-demo owl-carousel team_slider row">
                <div class="col-md-3">
                    </div>
                <!-- crewman1 -->
                <div class="item col-md-3">
                    <div class="crewman_item">
                        <div class="crewman">
                            <img src="{{ asset('images/luisaBrito.JPG') }}" alt=""/>
                        </div>
                        <div class="crewman_descr center">
                            <div class="crewman_descr_cont">
                                <p>Luísa Brito</p>
                            </div>
                        </div>
                        <div class="crewman_social">
                            <a href="https://pt.linkedin.com/in/luisatbrito" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="www.facebook.com/mluisabrito" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        </div>
                    </div>
                </div><!-- crewman1 -->

                <!-- crewman2 -->
                <div class="item col-md-3">
                    <div class="crewman_item">
                        <div class="crewman">
                            <img src="{{ asset('images/henriqueFerreira.jpg') }}" alt=""/>
                        </div>
                        <div class="crewman_descr center">
                            <div class="crewman_descr_cont">
                                <p>Henrique Ferreira</p>
                            </div>
                        </div>
                        <div class="crewman_social">
                            <a href="https://pt.linkedin.com/in/henrique-ferreira-b335047a" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="twitter.com/The_Henrich" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="www.facebook.com/henriquemanuelferreira" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        </div>
                    </div>
                </div><!-- crewman1 -->
                <div class="col-md-3">
                </div>
            </div><!-- TEAM SLIDER -->
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section><!-- //TEAM -->
@stop