 <?php include("includes/header.php") ?>
 <?php include("includes/navbar.php") ?>
 <div class="container-fluid px-0">
     <header>
         <div class="owl-carousel owl-theme">
             <?php
                $images = array(
                    "https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                    "https://media.architecturaldigest.com/photos/571e97c5741fcddb16b559c9/2:1/w_5127,h_2563,c_limit/modernist-decor-inspiration-01.jpg",
                    "https://media.architecturaldigest.com/photos/57559da869bcf60b7b8646de/master/w_1920%2Cc_limit/0716-shawn-henderson-aspen-house-3.jpg"
                );
                $quotes = array('“is where our story begins…”', '“is not a place…it’s a feeling.”', '“is the starting place of love, hope and dreams.”');
                foreach ($images as $key => $image) {
                ?>
                 <div class="item">
                     <img src=<?php echo $image; ?> alt="images not found">
                     <div class="cover">
                         <div class="container">
                             <div class="header-content">
                                 <div class="line"></div>
                                 <h2>Leading Architecture & Interiors</h2>
                                 <h1>SSARCH</h1>
                                 <h4>Transforming space into dreams come true! You got space, and we got the idea</h4>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>
     </header>
 </div>
 <!-- About Section Start -->
 <div class="section section-padding">
     <div class="container">
         <div class="row learts-mb-n30 mb-3">
             <div class="col-md-6 col-12 align-self-center learts-mb-30">
                 <div class="about-us3">
                     <span class="sub-title mb-0 mt-5">
                         About our company
                     </span>
                     <hr class="mt-1 mb-2 w-50" style="color:#FF0000;" />
                     <h2 class="title">How we deliver the<br> happiness</h2>
                     <div class="desc mb-0">
                         <p>
                             SSARCH INDIA known for Architectural and Interior Design consultancy , Project Management services , Turnkey interior solution and Modular furniture for creating outstanding inspirational spaces and environment
                         </p>
                     </div>
                     <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                         <div class="carousel-inner">
                             <div class="carousel-item active" data-bs-interval="2000">
                                 <h5 class="card-title vpv_cards_head">VALUES</h5><br>
                                 <p class="card-text vpv_cards_desc">
                                     Our Values Are Positive Innovation, Exceed Expectations, Respect, Supportive, Balance, Teamwork, Passionate, Open Communication, Honesty. We Believe Ideas Can Change The World. We Do And Say Things From The Heart And Wish Well To All Those Around Us.
                                 </p>
                             </div>
                             <div class="carousel-item" data-bs-interval="2000">
                                 <h5 class="card-title vpv_cards_head">PRINCIPALS</h5><br>
                                 <p class="card-text vpv_cards_desc">
                                     Our Firm Is Built On The Pillars Of Dedication, Persistence, Efforts And Hard Work. “Do Whatever It Takes” Attitude In All Our Team Members So The Job Gets Done Right To Highest The Standards And Within The Committed Timeline. We Believe Teamwork Enables Ordinary People To Achieve Extra-Ordinary Things.
                                 </p>
                             </div>
                             <div class="carousel-item" data-bs-interval="2000">
                                 <h5 class="card-title vpv_cards_head">VISION</h5><br>
                                 <p class="card-text vpv_cards_desc">
                                     To Be One Of The Most Distinguished, Honest And Ethical Interior, Architecture And Design Company. We More Towards Our Goal Of Being A Top-Class Design Company. We Believe High-Quality, Cost-Effective, Project On Schedule By Employing And Supporting Motivated, Flexible And Focused Team.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-12 text-center learts-mb-30">
                 <img src="assets/images/about_img.png" alt="" class="img-fluid">
             </div>
         </div>
     </div>
 </div>
 <div class="container-fluid p-lg-5">
     <div class="row p-lg-5">
         <h1 class="text-center hww_head mb-lg-5 mt-4">
             HOW WE WORK ?
         </h1>
         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 p-lg-5">
             <p class="hww_desc p-lg-5">
                 “ We design and construct as per clients requirements with high level standard and work enthusiastically with best possible efforts to get the clients satisfaction. We are extremely ambitious, motivated and capable professionals and work very hard to do our utmost best in discharging our duties towards our superiors to build a longer & fruitful relationship. Our organization takes an uncompromising approach to sustainability and corporate responsibility, demanding good moral and ethical practice across all our projects. ”
             </p>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 p-lg-5">
             <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                 <div class="carousel-inner" role="listbox" data-bs-interval="3000">
                     <div class="carousel-item active">
                         <img src="https://images.pexels.com/photos/1404948/pexels-photo-1404948.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-100 d-block img-thumbnail border border-0 rounded-4" alt="First slide">
                     </div>
                     <div class="carousel-item" data-bs-interval="3000">
                         <img src="https://images.pexels.com/photos/4491472/pexels-photo-4491472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-100 d-block img-thumbnail border border-0 rounded-4" alt="Second slide">
                     </div>
                     <div class="carousel-item" data-bs-interval="3000">
                         <img src="https://images.pexels.com/photos/8293720/pexels-photo-8293720.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-100 d-block img-thumbnail border border-0 rounded-4" alt="Third slide">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!--Carousel Gallery-->
 <div class="carousel-gallery py-2 mb-2">
     <h1 class=" text-center pfl_head pb-5">OUR PORTFOLIO</h1>
     <div class="swiper-container">
         <div class="swiper-wrapper">
             <div class="swiper-slide">
                 <a href="https://images.pexels.com/photos/1090638/pexels-photo-1090638.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-fancybox="gallery">
                     <div class="image" style="background-image: url(https://images.pexels.com/photos/1090638/pexels-photo-1090638.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                         <div class="overlay">
                             <em class="mdi mdi-magnify-plus"></em>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="swiper-slide">
                 <a href="https://images.pexels.com/photos/1643384/pexels-photo-1643384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-fancybox="gallery">
                     <div class="image" style="background-image: url(https://images.pexels.com/photos/1643384/pexels-photo-1643384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                         <div class="overlay">
                             <em class="mdi mdi-magnify-plus"></em>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="swiper-slide">
                 <a href="https://images.pexels.com/photos/271816/pexels-photo-271816.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-fancybox="gallery">
                     <div class="image" style="background-image: url(https://images.pexels.com/photos/271816/pexels-photo-271816.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                         <div class="overlay">
                             <em class="mdi mdi-magnify-plus"></em>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="swiper-slide">
                 <a href="https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-fancybox="gallery">
                     <div class="image" style="background-image: url(https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                         <div class="overlay">
                             <em class="mdi mdi-magnify-plus"></em>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="swiper-slide">
                 <a href="https://images.pexels.com/photos/271795/pexels-photo-271795.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-fancybox="gallery">
                     <div class="image" style="background-image: url(https://images.pexels.com/photos/271795/pexels-photo-271795.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                         <div class="overlay">
                             <em class="mdi mdi-magnify-plus"></em>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="swiper-slide">
                 <a href="https://images.pexels.com/photos/271743/pexels-photo-271743.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-fancybox="gallery">
                     <div class="image" style="background-image: url(https://images.pexels.com/photos/271743/pexels-photo-271743.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                         <div class="overlay">
                             <em class="mdi mdi-magnify-plus"></em>
                         </div>
                     </div>
                 </a>
             </div>
         </div>
         <div class="swiper-pagination"></div>
     </div>
 </div>
 <!--#Carousel Gallery-->
 <div class="container">
     <h1 class=" text-center pfl_head py-3">GROUP FIRMS</h1>
     <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner" role="listbox">
             <div class="carousel-item active">
                 <div class="card text-center border border-0">
                     <div class="card-header bg-transparent border border-0 p-0">
                         <img src="https://yourdigilab.com/images/shares/upload/building-logo/6322c189460e5.png" class="d-block mx-auto img-responsive border border-0" alt="First slide" width="100vh">
                     </div>
                     <div class="card-body border border-0">
                         <h5 class="card-title firm_head fw-normal">Ssarch India is Partnership register company established in year 2016 with all compliance which gives services like Architectural and Interior design services and Project management.</h5>
                         <p class="card-text firm_desc">Office add : 106, Ground floor, “B” Center Wing,Express zone Complex, W.E.Highway, Near Dindoshi Junction, Malad east, Mumbai 400 097.</p>
                     </div>
                     <div class="card-footer text-muted border border-0">
                         <h5 class="firm_reachus">
                             Email address : project@ssarchindia.com <br>Contact No : 9820973673
                         </h5>
                     </div>
                 </div>
             </div>
             <div class="carousel-item">
                 <div class="card text-center border border-0">
                     <div class="card-header bg-transparent border border-0 p-0">
                         <img src="https://yourdigilab.com/images/shares/upload/building-logo/6322c189460e5.png" class="d-block mx-auto img-responsive border border-0" alt="First slide" width="100vh">
                     </div>
                     <div class="card-body border border-0">
                         <h5 class="card-title firm_head fw-normal">Ssarch is Partnership company established in year 2003, which give services like turnkey project, modular furniture etc.</h5>
                         <p class="card-text firm_desc">Workshop address: Gala No 115,First Floor, Naman Ind. Est. No 2., Nr. Burma shell Petrol Pump, Sativali, Vasai East, Thane. Pin: 401202</p>
                     </div>
                     <div class="card-footer text-muted border border-0">
                         <h5 class="firm_reachus">
                             Email address :ssarch96@gmail.com <br> Contact No :70211 08505
                         </h5>
                     </div>
                 </div>
             </div>
             <div class="carousel-item">
                 <div class="card text-center border border-0">
                     <div class="card-header bg-transparent border border-0 p-0">
                         <img src="https://yourdigilab.com/images/shares/upload/building-logo/6322c189460e5.png" class="d-block mx-auto img-responsive border border-0" alt="First slide" width="100vh">
                     </div>
                     <div class="card-body border border-0">
                         <h5 class="card-title firm_head fw-normal">Kokan Branch : Vastumitra and Associates is headed by Mr. Jagadish Pawar from Rajapur. This firm gives services like Bungalow design ,Temple design, Town planning work, Estimate and costing ,Municipal approval work and govt project.</h5>
                         <p class="card-text firm_desc">Rajapur address: “Sudarshan”, Mumbai Goa Highway, Near Kodavali Petrol Pump, At Post – Kodavali, Tal – Rajapur, Dist- Ratnagiri, Pin- 416702,</p>
                     </div>
                     <div class="card-footer text-muted border border-0">
                         <h5 class="firm_reachus">
                             Email address :vastumitra4u@gmail.com <br>Contact No :9168543460
                         </h5>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <?php include("includes/footer.php") ?>