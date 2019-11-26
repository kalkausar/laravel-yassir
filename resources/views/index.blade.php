@extends('template')
@section('index')
<div class="site-blocks-cover overlay bg-light" id="home-section">

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="text-black">I'm Yassir Nurpatiaguna</h1>
                        <p class="lead">I'm Computer Vision Developer </p>
                        <p><a href="#portfolio-section" class="btn smoothscroll btn-primary">Portfolio</a></p>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <img style="padding-top:5%" src="{{url('cssNew/images/me.jpg')}}" alt="Image" class="img-face" data-aos="fade">


</div>




<div class="site-section" id="services-section">
    <div class="container">
        <div class="row ">
            <div class="col-12 mb-5 position-relative">
                <h2 class="section-title text-center mb-5">My Services</h2>
            </div>

            @foreach($manages as $s)
            <div class="col-md-6 mb-4">
                <div class="service d-flex h-100">
                    <div class="service-number mr-4"><span><i class="{{$s->icon}} my-3"></i></span></div>
                    <div class="service-about">
                        <h3>{{$s->title}}</h3>
                        <p>{{$s->content}}</p>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-business_center"></span></div>
              <div class="service-about">
                <h3>Computer Vision Development</h3>
                <p>It could refer to either the software developers who create vision algorithms for recognizing patterns in images,
                  or engineers who use that software in their applications (in automated manufacturing, quality control,
                  part handling, etc).</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-desktop_windows"></span></div>
              <div class="service-about">
                <h3>Landmark &amp; Image Segmentation</h3>
                <p>In computer vision, image segmentation is the process of partitioning a
                  digital image into multiple segments. The goal of segmentation is to simplify and/or change the representation of
                   an image into something that is more meaningful and easier to analyze.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-layers"></span></div>
              <div class="service-about">
                <h3>Object Recognition</h3>
                <p>Object detection is a computer technology related to computer vision
                  and image processing that deals with detecting instances of semantic objects of a certain class in digital images and videos.
                  Well-researched domains of object detection include face detection and pedestrian detection.</p>
              </div>
            </div>
          </div> -->

        </div>
    </div>
</div>

<div class="site-section" id="about-section">
    <div class="container">
        <div class="row ">
            <div class="col-12 mb-4 position-relative">
                <!-- ------ bagian isi About ------ -->
                <h2 class="section-title">About Me</h2>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0">
                <div class="bg-light pt-5">
                    <img src="{{url('cssNew/images/me.jpg')}}" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 order-2 order-lg-1">
                <p>I am student at gunadarma university</p>
                <p></p>
            </div>
            <div class="col-lg-4 order-3 order-lg-3">
                <p></p>
                <p></p>
                <p><a href="#contact-section" class="btn smoothscroll btn-primary">Contact Me</a></p>
            </div>

        </div>
    </div>
</div>




<section class="site-section block__62272" id="portfolio-section">


    <div class="container">
        <div class="row mb-5">
            <div class="col-12 position-relative">
                <h2 class="section-title text-center mb-5">My Portofolio</h2>
            </div>
        </div>

        <!---Tempat mengisi portofolio menggunakan gambar-->
        <div id="posts" class="row no-gutter">
            <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                <a href="images/self driving.jpeg" class="item-wrap fancybox">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{url('cssNew/images/self driving.jpeg')}}">
                    <p> Self Driving</p>
                </a>
            </div>
            <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                <a href="images/boxing-fisheye.jpg" class="item-wrap fancybox">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{url('cssNew/images/boxing-fisheye.jpg')}}">
                    <p>Video Segmentation</p>
                </a>
            </div>


        </div>
    </div>

</section>


<section class="site-section bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 position-relative">
                <h2 class="section-title text-center mb-5 text-white">Testimonials</h2>
            </div>
        </div>
        <div class="owl-carousel slide-one-item">
            <div class="slide">
                <blockquote>
                    <!--------Bagian slider --------------->
                    <p>Your had great job!</p>
                    <p><cite>&mdash; Harald Krüger as BMW CEO</cite></p>
                </blockquote>
            </div>
            <div class="slide">
                <blockquote>
                    <p>Hell Yeah!!!</p>
                    <p><cite>&mdash; Dana White as UFC CEO</cite></p>
                </blockquote>
            </div>
            <div class="slide">
                <blockquote>
                    <p>Thanks for built our AI architecture of automous quality checker</p>
                    <p><cite>&mdash;James Quincey as Coca cola CEO</cite></p>
                </blockquote>
            </div>
            <div class="slide">
                <blockquote>
                    <p>Great work!!</p>
                    <p><cite>&mdash; Timur Sardarov as MV Agusta CEO</cite></p>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<section class="site-section" id="clients-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 position-relative">
                <h2 class="section-title text-center">Clients</h2>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
                <img src="{{url('cssNew/images/Adidas.jpg')}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
                <img src="{{url('cssNew/images/bmw.jpg')}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
                <img src="{{url('cssNew/images/Coca cola.jpg')}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
                <img src="{{url('cssNew/images/huawei.jpg')}}" alt="Image" class="img-fluid">
            </div>


            <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
                <img src="{{url('cssNew/images/MVAgusta.jpg')}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
                <img src="{{url('cssNew/images/ufc.jpg')}}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>



<section class="site-section" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 position-relative">
                <h2 class="section-title text-center mb-5">Contact Form</h2>
            </div>
        </div>
        <form action="#" class="form">
            <div class="row mb-4">
                <div class="form-group col-6">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="form-group col-6">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>

            <div class="row mb-4">
                <div class="form-group col-12">
                    <input type="email" class="form-control" placeholder="Email address">
                </div>
            </div>

            <div class="row mb-4">
                <div class="form-group col-12">
                    <input type="text" class="form-control" placeholder="Subject of the message">
                </div>
            </div>

            <div class="row mb-4">
                <div class="form-group col-12">
                    <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Type your message here.."></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <input type="submit" class="btn btn-primary" value="Send Message">
                </div>
            </div>

        </form>
    </div>
</section>

<footer class="site-section bg-light footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-3">
                <h3 class="footer-title">My Address</h3>
                <p><span class="d-inline-block d-md-block">Jl. Kelapa Gading 1 ,</span> Citayam, Bojong Gede, ID</p>
            </div>
            <div class="col-md-5 mx-auto">
                <div class="row">
                    <div class="col-lg-4">
                        <h3 class="footer-title">Services</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">----------</a></li>
                            <li><a href="#">----------</a></li>
                            <li><a href="#">----------</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h3 class="footer-title">Follow Me</h3>
                        <a href="#" class="social-circle"><span class="icon-twitter"></span></a>
                        <a href="#" class="social-circle"><span class="icon-facebook"></span></a>
                        <a href="#" class="social-circle"><span class="icon-instagram"></span></a>
                        <a href="#" class="social-circle"><span class="icon-linkedin"></span></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <p>

                            Copyright &copy;Yassir Nurpatiaguna

                        </p>
                    </div>
                </div>
            </div>
</footer>

</div> <!-- .site-wrap -->
@endsection
