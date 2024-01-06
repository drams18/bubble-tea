@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/bootstrap.min.css">
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                    </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!--header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="Bienvenue">Welcome to Bubble Moucat - Redefining the Bubble Tea Experience !</h1>
                              <p class="there_text">At Bubble Moucat, we are passionate about crafting a unique and delicious bubble tea experience. Dive into a world of exquisite flavors, fresh ingredients, and customizable options that will tantalize your taste buds and brighten your day.




                              </p>
                              <div class="learnmore_bt"><a href="#">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text"> </h1>
                              <h1 class="coffee_text">A complete immersion</h1>
                              <p class="there_text">Explore our enticing menu, dive into the world of bubble teas, and let yourself be captivated by the art of tasting. At Bubble Moucat, each cup tells a story, and we are delighted to share ours with you. </p>
                              <div class="learnmore_bt"><a href="#">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">
                                 Join us !</h1>
                              <p class="there_text">At Bubble Moucat, we are passionate about crafting a unique and delicious bubble tea experience. Immerse yourself in a world of exquisite flavors, fresh ingredients, and customizable options that will tantalize your taste buds and brighten your day.




                              </p>
                              <div class="learnmore_bt"><a href="#">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <div class="about_taital">About Us</div>
                     <p class="about_text">It all began with a simple idea shared among friends: to create a space where culinary creativity and camaraderie come together.</p>
                     <p class="about_text">Drawing upon our diverse experiences and our shared love for bubble tea, we decided to bring this dream to life by creating Bubble Moucat.</p>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="images/images.jpg"></div>
               </div>


      <div class="services_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="services_taital">Services</h1>
                  <p class="services_text"> Discover our unique and irresistible Bubble Teas at Bubble Moucat. Each creation is a perfect fusion of exquisite flavors and delightful textures. </p>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main active">
                        <div class="house_icon">
                           <img src="images/icon3.png" class="image_1">
                           <img src="images/icon3.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">Handcrafted Creations</h3>
                        <p class="tation_text"> Our bubble teas are handcrafted creations crafted with care and expertise. </p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="images/icon2.png" class="image_1">
                           <img src="images/icon2.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">Infinite Customization</h3>
                        <p class="tation_text">Make your bubble tea a personal masterpiece with our option of infinite customization.</p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="images/icon3.png" class="image_1">
                           <img src="images/icon3.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">Sensory Experience</h3>
                        <p class="tation_text">Immerse yourself in an unparalleled sensory experience with our bubble teas. From intoxicating aromas to playful textures. </p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- testimonial section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="client_taital">Feedback</h1>
                  <p class="client_text">Discover what our delighted customers have to say about their experience at Bubble Moucat. These genuine reviews attest to our commitment to excellence and the satisfaction we bring with every sip of our delicious bubble teas.</p>
               </div>
            </div>
         </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_section_2">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="testimonial_section_2">
                            <h4 class="client_name_text">Sophia M. <span class="quick_icon"><img src="images/quick-icon.png"></span></h4>
                            <p class="customer_text">An exceptional taste experience with every visit to Bubble Moucat! The bubble teas are not only delicious but also artistically presented. I love the variety of flavors and the opportunity to customize my drink each time. A friendly team and creations that push the boundaries of the traditional.
                            </p>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_section_2">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="testimonial_section_2">
                            <h4 class="client_name_text">Alexandre G.<span class="quick_icon"><img src="images/quick-icon.png"></span></h4>
                            <p class="customer_text">As an absolute fan of bubble tea, I can confidently say that Bubble Moucat is the best place in town! The ingredients are fresh, the tapioca pearls are perfectly cooked, and the flavors are always innovative. The relaxed atmosphere and passionate team make every visit a delightful experience. My go-to spot to satisfy my bubble tea cravings!
                            </p>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_section_2">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="testimonial_section_2">
                            <h4 class="client_name_text">Fatima<span class="quick_icon"><img src="images/quick-icon.png"></span></h4>
                            <p class="customer_text">The bubble teas at Bubble Moucat are not just drinks; they are perfect moments of relaxation. I especially appreciate the quality of the teas, easy customization, and the opportunity to discover seasonal limited editions. Each visit is a sensory getaway. Highly recommend to all bubble tea enthusiasts!</p>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
          </div>
        </div>
      </div>
     </div>
      <!-- testimonial section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_text">Contact Us</h1>
         </div>
      </div>
      <div class="contact_section_2 layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 padding_0">
                  <div class="mail_section">
                     <div class="email_text">
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Name" name="Email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Phone Number" name="Email">
                        </div>
                        <div class="form-group">
                           <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="Massage"></textarea>
                        </div>
                        <div class="send_btn">
                           <div type="text" class="main_bt"><a href="#">SEND</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 padding_0">
                  <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="508" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end --> 
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

@endsection
