  <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designarc.biz/demos/cleanex/project-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 18:17:15 GMT -->
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
<link href="<?= base_url('assets/website/css/color.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/style.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/responsive.css')?>" rel="stylesheet">

</head>


<body>

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
                    <h1>Book Appointment</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url('Home/index')?>">Home</a></li>
                        <li>Book Appointment</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!--Start Appointment Area-->
        <section class="appointment-area">
            <div class="container">
                <div class="appointment-title">
                    <h2>Fill Out the Appointment Request Form Online and<br> We’ll Contact You!</h2>
                    <p>In the event that you'd like one of our client administration agents to call you to plan your appointment, simply round out the structure beneath. Somebody will get in touch with you to affirm a date and time for your arrangement at the earliest opportunity.</p>
                </div>


                <?php if( $error=$this->session->flashdata('msg')):   ?>
                  <div class="alert alert-dismissible alert-success" style="height: 50px;padding: 14px 22px;">
                          <button type="button" class="close" data-dismiss="alert" style="padding: 2px 15px;">&times;</button>
                          <?=$error;  ?>
                  </div>     
            <?php endif; ?>



                <div class="row">
                    <div class="col-xl-9">
                        <div class="appointment-form-box">
                            <form class="appointment-form" name="appointment-form" action="<?= base_url('Home/add_appointment')?>" method="post">
                                
                                <div class="single-box">
                                    <div class="inner-title">
                                        <h3>Select a convenient day for your service:*</h3>
                                    </div>
                                    <div class="date-box clearfix">
                                        <input type="date" name="date">

                                        
                                    </div>
                                </div>
                                
                                <div class="single-box">
                                    <div class="inner-title">
                                        <h3>Select a convenient time*</h3>
                                    </div>
                                    <div class="time-box">
                                        <input type="time" name="time">
                                       
                                    </div>
                                </div>
                                
                                <div class="single-box">
                                    <div class="inner-title">
                                        <h3>Your first name and last name*</h3>
                                    </div>
                                    <input type="text" name="name" value="" placeholder="Enter your full name" required>
                                </div>
                                
                                <div class="single-box">
                                    <div class="inner-title">
                                        <h3>Your company *</h3>
                                    </div>
                                    <input type="text" name="company" value="" placeholder="Enter your company name" required>
                                </div>
                                
                                <div class="single-box">
                                    <div class="inner-title">
                                        <h3>Jobsite address *</h3>
                                    </div>
                                    <div class="jobsite-address">
                                        <input type="text" name="jobsite_address" value="" placeholder="Enter your jobsite address" required>
                                       
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="single-box">
                                            <div class="inner-title">
                                                <h3>City *</h3>
                                            </div>
                                            <input type="text" name="city" value="" placeholder="Enter your city name" required>
                                        </div>    
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="single-box selectbox">
                                            <div class="inner-title">
                                                <h3>State *</h3>
                                            </div>
                                            <select name="state" class="selectpicker" data-width="100%" required>
                                                <option selected="selected">State</option>
                                                <option>Andhra Pradesh</option>
                                                <option>Arunanchal Pradesh</option>
                                                <option>Assam</option>
                                                <option>Chhattisgarh</option>
                                                <option>Goa</option>
                                                <option>Gujarat</option>
                                                <option>Haryana</option>
                                                <option>Himachal Pradesh</option>
                                                <option>Jharkhand</option>
                                                <option>Karnataka</option>
                                                <option>Kerala</option>
                                                <option>Madhya Pradesh</option>
                                                <option>Maharashtra</option>
                                                <option>Manipur</option>
                                                <option>Meghalaya</option>
                                                <option>Mizoram</option>
                                                <option>Nagaland</option>
                                                <option>Odisha</option>
                                                <option>Punjab</option>
                                                <option>Rajasthan</option>
                                                <option>Sikkim</option>
                                                <option>Tamil Nadu</option>
                                                <option>Telangana</option>
                                                <option>Tripura</option>
                                                <option>Uttar Pradesh</option>
                                                <option>Uttarakhand</option>
                                                <option>West Bengal</option>
                                            </select>
                                        </div>    
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="single-box">
                                            <div class="inner-title">
                                                <h3>Zip Code *</h3>
                                            </div>
                                            <input type="text" name="zip_code" value="" placeholder="Enter your zip code" required>
                                        </div>    
                                    </div>
                                </div>
                                
                                <div class="row">
                                   
                                    <div class="col-xl-6">
                                        <div class="single-box">
                                            <div class="inner-title">
                                                <h3>Phone number *</h3>
                                            </div>
                                            <input type="text" name="phone_number" value="" placeholder="Enter your phone number" required>
                                        </div>    
                                    </div>     
                                </div>
                                
                                <div class="single-box">
                                    <div class="inner-title">
                                        <h3>Email address *</h3>
                                    </div>
                                    <input type="email" name="email_address" value="" placeholder="Enter your email address" required>
                                </div>
                                
                                <div class="single-box">
                                    <div class="inner-title">
                                        <h3>Service type</h3>
                                    </div>
                                    <?php $i=1; foreach($data as $value): ?>
                                    <div class="service-type-box">
                                        <div class="appointment-checkbox">
                                            <div class="single-checkbox">
                                                <input type="checkbox" value="<?= $value->service_name ; ?>" name="service_type" id="sel-ser<?= $i ; ?>">
                                                <label for="sel-ser<?= $i ; ?>"><span></span><?= $value->service_name ; ?></label>
                                            </div>
                                           
                                        </div>   
                                    </div>
                                    <?php $i++; endforeach; ?>
                                </div>
                                       
                                <div class="single-box">
                                    <div class="inner-title">
                                        <h3>Others</h3>
                                    </div>
                                    <textarea name="others" placeholder="Enter your other message"></textarea>
                                </div>
                                
                                <div class="single-box">
                                    <div class="inner-title">
                                        <h3>Brief Description of Problem:*</h3>
                                    </div>
                                    <textarea name="brief_description_of_problem" placeholder="Enter your description" required></textarea>
                                </div>
                                       
                                       
                                <div class="appointment-form-button">
                                    <button type="submit" class="theme-btn btn-two" >make an appointment</button>  
                                </div>
                                  
                            </form>    
                        </div>    
                    </div>
                </div>
            </div>    
        </section>
        <!--End Appointment Area-->

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

<!-- Mirrored from designarc.biz/demos/cleanex/project-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 18:17:15 GMT -->
</html>
