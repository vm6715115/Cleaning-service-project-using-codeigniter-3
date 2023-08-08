<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designarc.biz/demos/cleanex/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 18:28:22 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Cleanex - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="<?= base_url('assets/website/images/favicon.ico')?>" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="<?= base_url('assets/website/css/font-awesome-all.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/flaticon.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/owl.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/bootstrap.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/jquery.fancybox.min.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/animate.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/timePicker.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/color.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/style.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/responsive.css')?>" rel="stylesheet">

</head>


        <!-- page-title -->
        <section class="page-title">
            <div class="pattern-layer" style="background-image: url(<?= base_url('assets/website/images/shape/shape-45.png')?>);"></div>
            <figure class="image-layer"><img src="<?= base_url('assets/website/images/resource/page-title-1.png')?>" alt=""></figure>
            <div class="shape">
                <div class="shape-1" style="background-image: url(<?= base_url('assets/website/images/shape/shape-46.png')?>);"></div>
                <div class="shape-2" style="background-image: url(<?= base_url('assets/website/images/shape/shape-47.png')?>);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Contact Us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url('Home/index')?>">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- contact-page-section -->
        <section class="contact-page-section">
            <div class="auto-container">
                <div class="sec-title">
                    <h6>get in touch</h6>
                    <h2>We Love to Hear From You</h2>
                </div>

                <?php if( $error=$this->session->flashdata('msg')):   ?>
                  <div class="alert alert-dismissible alert-success" style="height: 50px;padding: 14px 22px;">
                          <button type="button" class="close" data-dismiss="alert" style="padding: 2px 15px;">&times;</button>
                          <?=$error;  ?>
                  </div>     
            <?php endif; ?>


                <div class="row clearfix">
                    <div class="col-lg-7 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <form method="post" action="<?= base_url('Admin/add_contact')?>" id="contact-form"> 
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone_number" required="" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="message"></textarea>
                                </div>
                                <div class="form-group message-btn">
                                    <button class="theme-btn btn-two" type="submit" >submit now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="text">
                                <h2>Our Address</h2>
                                <p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service.</p>
                            </div>
                            <ul class="info-list clearfix">
                                <li>
                                    <div class="icon-box"><img src="<?= base_url('assets/website/images/icons/icon-60.png')?>" alt=""></div>
                                    <h4>Address :</h4>
                                    <p>117/708 'Q' Block , Sharada nagar , Kanpur , Uttar pradesh , 208025</p>
                                </li>
                                <li>
                                    <div class="icon-box"><img src="<?= base_url('assets/website/images/icons/icon-61.png')?>" alt=""></div>
                                    <h4>Phone :</h4>
                                    <p><a href="<?= base_url('tel:+91 9511081531')?>">+91 9511081531 ,</a>  /  <a href="tel:+91 9129271531">+91 9129271531</a></p>
                                </li>
                                <li>
                                    <div class="icon-box"><img src="<?= base_url('assets/website/images/icons/icon-62.png')?>" alt=""></div>
                                    <h4>Address :</h4>
                                    <p><a href="<?= base_url('mailto:vm6715115@gmail.com')?>">vm6715115@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-page-section end -->

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.062218972344!2d80.28634687435891!3d26.485941478302564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c398f248afab1%3A0x4c28a15364f25b8e!2sSharda%20Nagar%2C%20kanpur%20nagar!5e0!3m2!1shi!2sin!4v1690011046231!5m2!1shi!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- google-map-two end -->

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
    <script src="<?= base_url('assets/website/js/timePicker.js')?>"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="<?= base_url('assets/website/js/gmaps.js')?>"></script>
    <script src="<?= base_url('assets/website/js/map-helper.js')?>"></script>

    <!-- main-js -->
    <script src="<?= base_url('assets/website/js/script.js')?>"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from designarc.biz/demos/cleanex/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 18:29:27 GMT -->
</html>
