@extends('frontend.layouts.app')
@section('title','About Page')
@section('content')
  <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Courses</h2>
                            <p>Home<span>/</span>Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::review_part start::-->


    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                        <h2>Special Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                    
             
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{asset('uploads/'.$course->image)}} "class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">                                                    {{$course->category->name}}</a>
                                    <h4>${{$course->course_fee}}</h4>
                                        <a href="{{route('order.Details',$course->id)}}">
                                <h3>{{$course->course_name}}</h3>
                                     </a>
                           
                                    <div class="author_info">
                                        <img src="frontend/assets/img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                               
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-warning"><a href="{{route('order.Details',$course->id)}}">Course Details</a></button>
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
                @endforeach
               
                
            </div>
        </div>
    </section>


    <!--::blog_part end::-->

    <!--::review_part start::-->
    <section class="testimonial_part section_padding">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Happy Students</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="frontend/assets/img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="frontend/assets/img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="frontend/assets/img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="frontend/assets/img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="frontend/assets/img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="frontend/assets/img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->
    
@endsection