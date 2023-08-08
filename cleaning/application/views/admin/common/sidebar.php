 <!-- ============================================================== -->
 <!-- ============================================================== -->
 <!-- Left Sidebar - style you can find in sidebar.scss  -->
 <!-- ============================================================== -->
 <aside class="left-sidebar">
     <!-- Sidebar scroll-->
     <div class="scroll-sidebar">
         <!-- Sidebar navigation-->
         <nav class="sidebar-nav">
             <ul id="sidebarnav">

                 <li class="sidebar-item m-t-40">
                     <a class="sidebar-link waves-effect waves-dark" href="<?= base_url('Admin/index'); ?>"
                         aria-expanded="false">
                         <i data-feather="home" class="mr-2"></i>
                         <span class="hide-menu">Dashboard </span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link  waves-effect waves-dark" href="<?= base_url('Admin/gallery_master'); ?>"
                         aria-expanded="false">
                         <i data-feather="mail" class="mr-2"></i>
                         <span class="hide-menu">Gallery Master</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link  waves-effect waves-dark" href="<?= base_url('Admin/team_master'); ?>"
                         aria-expanded="false">
                         <i data-feather="mail" class="mr-2"></i>
                         <span class="hide-menu">Team Master</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link  waves-effect waves-dark"
                         href="<?= base_url('Admin/testimonial_master'); ?>" aria-expanded="false">
                         <i data-feather="mail" class="mr-2"></i>
                         <span class="hide-menu">Testimonial Master</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link  waves-effect waves-dark" href="<?= base_url('Admin/service_master'); ?>"
                         aria-expanded="false">
                         <i data-feather="mail" class="mr-2"></i>
                         <span class="hide-menu">Service Master</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link  waves-effect waves-dark" href="<?= base_url('Admin/appointment'); ?>"
                         aria-expanded="false">
                         <i data-feather="mail" class="mr-2"></i>
                         <span class="hide-menu">All Appointment Bookings</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link  waves-effect waves-dark" href="<?= base_url('Admin/contact_master'); ?>"
                         aria-expanded="false">
                         <i data-feather="mail" class="mr-2"></i>
                         <span class="hide-menu">Contact Master</span>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- End Sidebar navigation -->
     </div>
     <!-- End Sidebar scroll-->
 </aside>
 <!-- ============================================================== -->
 <!-- End Left Sidebar - style you can find in sidebar.scss  -->
 <!-- ============================================================== -->
 <!-- All Jquery -->
 <!-- ============================================================== -->
 <script src="<?= base_url('assets/admin/assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
 <!-- Bootstrap tether Core JavaScript -->
 <script src="<?= base_url('assets/admin/assets/libs/popper.js/dist/umd/popper.min.js'); ?>"></script>
 <script src="<?= base_url('assets/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
 <!-- apps -->
 <script src="<?= base_url('assets/admin/dist/js/app.min.js'); ?>"></script>
 <script src="<?= base_url('assets/admin/dist/js/app.init.js'); ?>"></script>
 <script src="<?= base_url('assets/admin/dist/js/app-style-switcher.js'); ?>"></script>
 <!-- slimscrollbar scrollbar JavaScript -->
 <script src="<?= base_url('assets/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'); ?>">
 </script>
 <!--Wave Effects -->
 <script src="<?= base_url('assets/admin/dist/js/waves.js'); ?>"></script>
 <!--Menu sidebar -->
 <script src="<?= base_url('assets/admin/dist/js/sidebarmenu.js'); ?>"></script>
 <script src="<?= base_url('assets/admin/dist/js/feather.min.js'); ?>"></script>
 <!--Custom JavaScript -->
 <script src="<?= base_url('assets/admin/dist/js/custom.min.js'); ?>"></script>
 <!--This page JavaScript -->
 <script src="<?= base_url('assets/admin/assets/libs/chart.js/dist/Chart.min.js'); ?>"></script>
 <!--c3 charts -->
 <script src="<?= base_url('assets/admin/assets/extra-libs/c3/d3.min.js'); ?>"></script>
 <script src="<?= base_url('assets/admin/assets/extra-libs/c3/c3.min.js'); ?>"></script>
 <script src="<?= base_url('assets/admin/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>">
 </script>
 <script src="<?= base_url('assets/admin/dist/js/pages/dashboards/dashboard2.js'); ?>"></script>
 <script>
$('.datepicker').datepicker({
    autoclose: true,
    todayHighlight: true
});
 </script>