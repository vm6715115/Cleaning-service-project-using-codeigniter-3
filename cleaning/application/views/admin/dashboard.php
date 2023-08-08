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
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card oh">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <span class="text-dark font-medium op-7 d-block mb-2">Profit</span>
                                    <h3 class="mb-0">5,600</h3>
                                </div>
                                <div class="ml-auto align-self-end mb-1">
                                    <span class="text-success"><i class="fas fa-caret-up mr-1"></i> 2.41</span>
                                </div>
                            </div>
                        </div>
                        <div style="height: 80px;">
                            <canvas id="chart1" height="120"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card oh">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <span class="text-dark font-medium op-7 d-block mb-2">New Customers</span>
                                    <h3 class="mb-0">180</h3>
                                </div>
                                <div class="ml-auto align-self-end mb-1">
                                    <span class="text-danger"><i class="fas fa-caret-down mr-1"></i> 2.41</span>
                                </div>
                            </div>
                        </div>
                        <div style="height: 80px;">
                            <canvas id="chart2" height="120"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card oh">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <span class="text-dark font-medium op-7 d-block mb-2">Profit</span>
                                    <h3 class="mb-0">5,600</h3>
                                </div>
                                <div class="ml-auto align-self-end mb-1">
                                    <span class="text-success"><i class="fas fa-caret-up mr-1"></i> 2.41</span>
                                </div>
                            </div>
                        </div>
                        <div style="height: 80px;">
                            <canvas id="chart3" height="120"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card oh">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <span class="text-dark font-medium op-7 d-block mb-2">New Customers</span>
                                    <h3 class="mb-0">180</h3>
                                </div>
                                <div class="ml-auto align-self-end mb-1">
                                    <span class="text-danger"><i class="fas fa-caret-down mr-1"></i> 2.41</span>
                                </div>
                            </div>
                        </div>
                        <div style="height: 80px;">
                            <canvas id="chart4" height="120"></canvas>
                        </div>
                    </div>
                </div>
            </div>
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
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->


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