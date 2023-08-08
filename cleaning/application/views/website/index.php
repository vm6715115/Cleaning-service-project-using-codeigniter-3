<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designarc.biz/demos/cleanex/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 17:32:31 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Cleanex - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="<?= base_url('assets/website/images/favicon.ico') ?>" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="<?= base_url('assets/website/css/font-awesome-all.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/flaticon.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/owl.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/jquery.fancybox.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/animate.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/color.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/style.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/responsive.css') ?>" rel="stylesheet">

</head>


<body>
        <!-- banner-section -->

        <?php if( $error=$this->session->flashdata('msg')):   ?>
                  <div class="alert alert-dismissible alert-danger" style="height: 50px;padding: 14px 22px;">
                          <button type="button" class="close" data-dismiss="alert" style="padding: 2px 15px;">&times;</button>
                          <?=$error;  ?>
                  </div>     
            <?php endif; ?>

        <section class="banner-section">
            <div class="bg-layer" style="background-image: url(<?= base_url('assets/website/images/shape/shape-48.png')?>);"></div>
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(<?= base_url('assets/website/images/shape/shape-1.png')?>);"></div>
                <div class="pattern-2" style="background-image: url(<?= base_url('assets/website/images/shape/shape-2.png')?>);"></div>
                <div class="pattern-3" style="background-image: url(<?= base_url('assets/website/images/shape/shape-3.png')?>);"></div>
            </div>
            <figure class="image-layer"><img src="<?= base_url('assets/website/images/banner/banner-img-1.png')?>" alt=""></figure>
            <div class="auto-container">
                <div class="auto-container">
                    <div class="content-box">
                        <h6>Welcome to cleanex company</h6>
                        <h2>Best Cleaning for your better lifestyle</h2>
                        <p>Call for book appointment today and click here to learn more about our professional team</p>
                        <div class="btn-box clearfix">
                            <a href="<?= base_url('index-2.html')?>" class="btn-one">Get appointment</a>
                            <a href="<?= base_url('index-2.html')?>" class="btn-two">our services</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- service-section -->
        <section class="service-section bg-color-1">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="upper-box">
                        <h6>Clenex Featured Services</h6>
                    </div>
                    <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/service/service-1.jpg')?>" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="icon-box"><i class="flaticon-window-cleaning"></i></div>
                                        <h3><a href="<?= base_url('service-details.html')?>">Window <br />Cleaning</a></h3>
                                        <div class="link"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/icons/icon-9.png')?>" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/service/service-2.jpg')?>" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="icon-box"><i class="flaticon-mop"></i></div>
                                        <h3><a href="<?= base_url('service-details.html')?>">Carpet <br />Cleaning</a></h3>
                                        <div class="link"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/icons/icon-9.png')?>" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/service/service-3.jpg')?>" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="icon-box"><i class="flaticon-vacuum"></i></div>
                                        <h3><a href="<?= base_url('service-details.html')?>">Office <br />Cleaning</a></h3>
                                        <div class="link"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/icons/icon-9.png')?>" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/service/service-1.jpg')?>" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="icon-box"><i class="flaticon-window-cleaning"></i></div>
                                        <h3><a href="<?= base_url('service-details.html')?>">Window <br />Cleaning</a></h3>
                                        <div class="link"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/icons/icon-9.png')?>" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/service/service-2.jpg')?>" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="icon-box"><i class="flaticon-mop"></i></div>
                                        <h3><a href="<?= base_url('service-details.html')?>">Carpet <br />Cleaning</a></h3>
                                        <div class="link"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/icons/icon-9.png')?>" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/service/service-3.jpg')?>" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="icon-box"><i class="flaticon-vacuum"></i></div>
                                        <h3><a href="<?= base_url('service-details.html')?>">Office <br />Cleaning</a></h3>
                                        <div class="link"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/icons/icon-9.png')?>" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/service/service-1.jpg')?>" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="icon-box"><i class="flaticon-window-cleaning"></i></div>
                                        <h3><a href="<?= base_url('service-details.html')?>">Window <br />Cleaning</a></h3>
                                        <div class="link"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/icons/icon-9.png')?>" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/service/service-2.jpg')?>" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="icon-box"><i class="flaticon-mop"></i></div>
                                        <h3><a href="<?= base_url('service-details.html')?>">Carpet <br />Cleaning</a></h3>
                                        <div class="link"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/icons/icon-9.png')?>" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/service/service-3.jpg')?>" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="icon-box"><i class="flaticon-vacuum"></i></div>
                                        <h3><a href="<?= base_url('service-details.html')?>">Office <br />Cleaning</a></h3>
                                        <div class="link"><a href="<?= base_url('service-details.html')?>"><img src="<?= base_url('assets/website/images/icons/icon-9.png')?>" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- about-section -->
        <section class="about-section bg-color-1">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div class="image-box">
                                <figure class="image"><img src="<?= base_url('assets/website/images/resource/about-1.png')?>" alt=""></figure>
                                <div class="text-box">
                                    <div class="icon-box"><i class="flaticon-chat"></i></div>
                                    <h2>2500<span>+</span></h2>
                                    <p>Satisfied Customers</p>
                                </div>
                                <div class="image-shape" style="background-image: url(<?= base_url('assets/website/images/shape/shape-4.png')?>);"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h6>about cleanmax company</h6>
                                    <h2>We Are Best Company In Cleaning</h2>
                                </div>
                                <div class="text">
                                    <h3>Release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</h3>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                </div>
                                <ul class="list-style-one clearfix">
                                    <li>100% Satisfaction</li>
                                    <li>Annual Pass Programs</li>
                                    <li>Flexible and Cost-Effective</li>
                                    <li>Trained Emploies</li>
                                </ul>
                                <div class="btn-box">
                                    <a href="<?= base_url('about.html')?>" class="theme-btn btn-one">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- chooseus-section -->
        <section class="chooseus-section">
            <div class="pattern-layer" style="background-image: url(<?= base_url('assets/website/images/shape/shape-5.png')?>);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title light">
                                <h6>why choose us</h6>
                                <h2>Why You Should Hire Us</h2>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <h3><i class="flaticon-mop"></i>Over 28 Years <br />Of Expericence</h3>
                                            <p>Our gutter protection simply works better than any other product.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <h3><i class="flaticon-vacuum"></i>High Quality <br />Equipments</h3>
                                            <p>Our gutter protection simply works better than any other product.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <h3><i class="flaticon-alarm-clock"></i>Work Done <br />On Time</h3>
                                            <p>Our gutter protection simply works better than any other product.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <h3><i class="flaticon-cleaning-service"></i>Expert <br />Cleaners</h3>
                                            <p>Our gutter protection simply works better than any other product.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image"><img src="<?= base_url('assets/website/images/resource/chooseus-1.jpg')?>" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- funfact-section -->
        <section class="funfact-section bg-color-1">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-house-1"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="7088">0</span>
                            </div>
                            <p>Project Completed</p>
                        </div>
                    </div>
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-leader"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="30">0</span> <span>+</span>
                            </div>
                            <p>Team Members</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->


        <!-- testimonial-section -->
        <section class="testimonial-section bg-color-1">
            <div class="auto-container">
                <div class="sec-title">
                    <h6>testimonials</h6>
                    <h2>What They Say About Our Service</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <?php $i=1; foreach($data1 as $value): ?>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="text-inner">
                                <div class="quote"><i class="flaticon-quotation"></i></div>
                                <ul class="rating clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                <p><?= $value->t_description ; ?></p>
                            </div>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="<?= base_url($value->t_image_name); ?>" alt=""></figure>
                                <h5><?= $value->t_name ; ?></h5>
                                <span class="designation"><?= $value->t_designation ; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endforeach; ?>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


        <!-- team-section -->
        <section class="team-section">
            <div class="pattern-layer" style="background-image: url(<?= base_url('assets/website/images/shape/shape-1.jpg')?>);"></div>
            <div class="auto-container">
                <div class="title-inner">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                            <div class="sec-title light">
                                <h6>meet the team</h6>
                                <h2>Our Dedicated Team</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text">
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-inner">
                    <div class="row clearfix">
                    <?php $i=1; foreach($data2 as $value): ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div >
                                        <figure class="image-box"><img src="<?= base_url($value->image_name); ?>" alt="" style="height:480px"></figure>
                                        
                                    </div>
                                    <div class="lower-content inner-box">
                                        <h3><?= $value->name ; ?></h3>
                                        <span class="designation"><?= $value->designation ; ?></span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++; endforeach; ?>
                        
                </div>
            </div>
        </section>
        <!-- team-section end -->


        <!-- contact-section -->
        <section class="contact-section">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6>Contact Us</h6>
                    <h2>Get Touch With Us</h2>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h3>Office Address</h3>
                                <p>117/708 Q Block , Sharada Nagar , Kanpur .</p>
                                <p>Monday - Friday <br />8.00 am - 7.00 pm  /  Sunday <br />(Closed).</p>
                                <div class="support-box">
                                    <figure class="thumb-box"><img src="<?= base_url('assets/website/images/resource/thumb-1.jpg')?>" alt=""></figure>
                                    <span>Have A Question ?</span>
                                    <div class="phone"><a href="<?= base_url('tel:18003654560')?>">+91 9511081531</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                            <div class="form-inner">
                                <form action="<?= base_url('Admin/add_contact')?>" method="post" class="default-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="name" placeholder="Name" required>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email Address" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="phone_number" placeholder="Phone Nmber" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Message "></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button type="submit">Submit now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->

               <!-- scroll to top -->
               <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fal fa fa-arrow-up"></i>
        </button>
        
    </div>


    <!-- jequery plugins -->
    <script src="<?= base_url('assets/website/js/jquery.js')?>"></script>
    <script src="<?= base_url('assets/website/js/popper.min.js')?>"></script>
    <script src="<?= base_url('assets/website/js/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/website/js/owl.js')?>"></script>
    <script src="<?= base_url('assets/website/js/wow.js')?>"></script>
    <script src="<?= base_url('assets/website/js/validation.js')?>"></script>
    <script src="<?= base_url('assets/website/js/jquery.fancybox.js')?>"></script>
    <script src="<?= base_url('assets/website/js/appear.js')?>"></script>
    <script src="<?= base_url('assets/website/js/scrollbar.js')?>"></script>
    <script src="<?= base_url('assets/website/js/isotope.js')?>"></script>
    <script src="<?= base_url('assets/website/js/nav-tool.js')?>"></script>
    <script src="<?= base_url('assets/website/js/jquery.nice-select.min.js')?>"></script> 

    <!-- main-js -->
    <script src="<?= base_url('assets/website/js/script.js')?>"></script>





    

</body><!-- End of .page_wrapper -->

<!-- Mirrored from designarc.biz/demos/cleanex/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 17:51:15 GMT -->
</html>