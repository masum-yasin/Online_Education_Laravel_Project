@extends('frontend.layouts.app')
@section('title','Order Page')
@section('content')
   <!-- breadcrumb start-->
   <section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>COURSE ENROLL NOW</h2>
                        <p>Home<span>-</span>BOOK</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<!--================Blog Area =================-->
<section class="blog_area single-post-area section_padding">
  <div class="container">
     <div class="row">
        <div class="col-lg-8 posts-list">
           <div class="single-post">
              <div class="feature-img">
                 <img class="img-fluid" src="frontend/assets/img/blog/single_blog_1.png" alt="">
              </div>
              
           </div>
         
         
           <div class="comment-form">
              <h4>Enroll Now</h4>
              <form class="form-contact comment_form" action="#" id="commentForm">
                 <div class="row">
                    <div class="col-12">
                       
                    </div>
                    <div class="col-sm-6">
                       <div class="form-group">
                          <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                       </div>
                    </div>
                    <div class="col-sm-6">
                       <div class="form-group">
                          <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                       </div>
                    </div>
                    <div class="col-sm-6">
                       <div class="form-group">
                          <input class="form-control" name="phone" id="phone" type="number" placeholder="Phone">
                       </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                           <input class="form-control" name="course" id="course" type="text" placeholder="Course Name">
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="form-group">
                           <textarea class="form-control w-100" name="comment" id="comment" cols="15" rows="6"
                              placeholder="Write Subject"></textarea>
                        </div>
                     </div>
                 </div>
                 <div class="form-group">
                    <button type="submit" class="button btn_1 button-contactForm">Send Message</button>
                 </div>
              </form>
           </div>
        </div>
        <div class="col-lg-4">
           <div class="blog_right_sidebar">
              <aside class="single_sidebar_widget search_widget">
                 <form action="#">
                    <div class="form-group">
                       <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder='Search Keyword'
                             onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                          <div class="input-group-append">
                             <button class="btn" type="button"><i class="ti-search"></i></button>
                          </div>
                       </div>
                    </div>
                    <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
                 </form>
              </aside>
            
              <aside class="single_sidebar_widget popular_post_widget">
                 <h3 class="widget_title">Recent Post</h3>
                 <div class="media post_item">
                    <img src="frontend/assets/img/post/post_1.png" alt="post">
                    <div class="media-body">
                       <a href="single-blog.html">
                          <h3>From life was you fish...</h3>
                       </a>
                       <p>January 12, 2019</p>
                    </div>
                 </div>
                 <div class="media post_item">
                    <img src="frontend/assets/img/post/post_2.png" alt="post">
                    <div class="media-body">
                       <a href="single-blog.html">
                          <h3>The Amazing Hubble</h3>
                       </a>
                       <p>02 Hours ago</p>
                    </div>
                 </div>
                 <div class="media post_item">
                    <img src="frontend/assets/img/post/post_3.png" alt="post">
                    <div class="media-body">
                       <a href="single-blog.html">
                          <h3>Astronomy Or Astrology</h3>
                       </a>
                       <p>03 Hours ago</p>
                    </div>
                 </div>
                 <div class="media post_item">
                    <img src="frontend/assets/img/post/post_4.png" alt="post">
                    <div class="media-body">
                       <a href="single-blog.html">
                          <h3>Asteroids telescope</h3>
                       </a>
                       <p>01 Hours ago</p>
                    </div>
                 </div>
              </aside>
             
              <aside class="single_sidebar_widget instagram_feeds">
                 <h4 class="widget_title">Instagram Feeds</h4>
                 <ul class="instagram_row flex-wrap">
                    <li>
                       <a href="#">
                          <img class="img-fluid" src="frontend/assets/img/post/post_5.png" alt="">
                       </a>
                    </li>
                    <li>
                       <a href="#">
                          <img class="img-fluid" src="frontend/assets/img/post/post_6.png" alt="">
                       </a>
                    </li>
                    <li>
                       <a href="#">
                          <img class="img-fluid" src="frontend/assets/img/post/post_7.png" alt="">
                       </a>
                    </li>
                    <li>
                       <a href="#">
                          <img class="img-fluid" src="frontend/assets/img/post/post_8.png" alt="">
                       </a>
                    </li>
                    <li>
                       <a href="#">
                          <img class="img-fluid" src="frontend/assets/img/post/post_9.png" alt="">
                       </a>
                    </li>
                    <li>
                       <a href="#">
                          <img class="img-fluid" src="frontend/assets/img/post/post_10.png" alt="">
                       </a>
                    </li>
                 </ul>
              </aside>
              <aside class="single_sidebar_widget newsletter_widget">
                 <h4 class="widget_title">Newsletter</h4>
                 <form action="#">
                    <div class="form-group">
                       <input type="email" class="form-control" onfocus="this.placeholder = ''"
                          onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                    </div>
                    <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Subscribe</button>
                 </form>
              </aside>
           </div>
        </div>
     </div>
  </div>
</section>
<!--================Blog Area end =================--> 
@endsection