<body>


    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#" class="link">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">All Appointment Bookings</li>
                            </ol>
                        </nav>
                    </div>
                    <h4 class="page-title">Appointment Datatable</h4>
                </div>
                <div class="col-5 align-self-center text-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i data-feather="refresh-cw"></i></li>
                        <li class="list-inline-item"><i data-feather="settings"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <?php if( $error=$this->session->flashdata('msg')):   ?>
            <div class="alert alert-dismissible alert-success" style="height: 50px;padding: 14px 22px;">
                <button type="button" class="close" data-dismiss="alert" style="padding: 2px 15px;">&times;</button>
                <?=$error;  ?>
            </div>
            <?php endif; ?>
            <!-- File export -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">All Appointment Bookings Data</h4>



                            <div class="table-responsive mt-3">
                                <table id="file_export" class="table table-striped table-bordered display">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>

                                            <th>Date</th>

                                            <th>Name</th>


                                            <th>Phone Number</th>

                                            <th>Service Type</th>

                                            <th>View</th>

                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach($data as $value): ?>
                                        <tr>
                                            <td><?= $i ;?></td>

                                            <td><?= $value->date ;?></td>

                                            <td><?= $value->name ;?></td>

                                            <td><?= $value->phone_number ;?></td>

                                            <td><?= $value->service_type ;?></td>



                                            <td>
                                                <form method="POST"
                                                    action="<?= base_url('Admin/view_single_booking'); ?>">
                                                    <input type="hidden" name="id"
                                                        value="<?= $value->appointment_id ; ?>">
                                                    <button class="btn btn-primary">View</button>
                                                </form>
                                            </td>



                                            <td>
                                                <form method="POST" action="<?= base_url('Admin/delete_appointment')?>">
                                                    <input type="hidden" name="id"
                                                        value="<?= $value->appointment_id ;?>">
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php $i++; endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- All Jquery -->
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
        <script
            src="<?= base_url('assets/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'); ?>">
        </script>
        <!--Wave Effects -->
        <script src="<?= base_url('assets/admin/dist/js/waves.js'); ?>"></script>
        <!--Menu sidebar -->
        <script src="<?= base_url('assets/admin/dist/js/sidebarmenu.js'); ?>"></script>
        <script src="<?= base_url('assets/admin/dist/js/feather.min.js'); ?>"></script>
        <!--Custom JavaScript -->
        <script src="<?= base_url('assets/admin/dist/js/custom.min.js'); ?>"></script>
        <!--This page JavaScript -->
        <!--chartis chart-->
        <script src="<?= base_url('assets/admin/assets/libs/chartist/dist/chartist.min.js'); ?>"></script>
        <script
            src="<?= base_url('assets/admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js'); ?>">
        </script>
        <!--c3 charts -->
        <script src="<?= base_url('assets/admin/assets/extra-libs/c3/d3.min.js'); ?>"></script>
        <script src="<?= base_url('assets/admin/assets/extra-libs/c3/c3.min.js'); ?>"></script>
        <script
            src="<?= base_url('assets/admin/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>">
        </script>
        <script src="<?= base_url('assets/admin/dist/js/pages/dashboards/dashboard1.js'); ?>"></script>
        <script>
        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        </script>