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
                                <a href="<?= base_url('Admin/index')?>" class="link">Home</a>
                            </li>
                            <li class="breadcrumb-item " aria-current="page">
                                <a href="<?= base_url('Admin/book_master')?>" class="link">Appointment Booking
                                    Master</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">View</li>
                        </ol>
                    </nav>
                </div>
                <h4 class="page-title">View Single Appointment Data</h4>
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
        <!-- File export -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Appointment Booking Information</h2>
                        <div class="table-responsive mt-3">
                            <table class="table table-striped display table-hover" id="file_export">



                                <thead>
                                    <tr>
                                        <th>
                                            <h3>Data</h3>
                                        </th>
                                        <th>
                                            <h3>Description</h3>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-dark">

                                    <tr>
                                        <th>Appointment Id</th>
                                        <td><?= $data->appointment_id ;?></td>
                                    </tr>
                                    <tr>
                                        <th>Date</th>
                                        <td><?= $data->date ; ?> </td>
                                    </tr>
                                    <tr>
                                        <th>Time</th>
                                        <td><?= $data->time ; ?> </td>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <td><?= $data->name ; ?> </td>
                                    </tr>
                                    <tr>
                                        <th>Company</th>
                                        <td><?= $data->company ; ?> </td>
                                    </tr>
                                    <tr>
                                        <th>Jobsite Address</th>
                                        <td><?= $data->jobsite_address ; ?> </td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td><?= $data->city ; ?> </td>
                                    </tr>
                                    <tr>
                                        <th>State</th>
                                        <td><?= $data->state ; ?> </td>
                                    </tr>
                                    <tr>
                                        <th>Zip Code</th>
                                        <td><?= $data->zip_code ; ?> </td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <td><?= $data->phone_number ; ?> </td>
                                    </tr>
                                    <tr>
                                        <th>Email Address</th>
                                        <td><?= $data->email_address ; ?> </td>
                                    </tr>

                                    <tr>
                                        <th>Service Type</th>
                                        <td><?= $data->service_type ; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Others</th>
                                        <td><?= $data->others ; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Brief Description of Problem</th>
                                        <td><?= $data->brief_description_of_problem ; ?></td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->


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
<!--chartis chart-->
<script src="<?= base_url('assets/admin/assets/libs/chartist/dist/chartist.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js'); ?>">
</script>
<!--c3 charts -->
<script src="<?= base_url('assets/admin/assets/extra-libs/c3/d3.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/assets/extra-libs/c3/c3.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>">
</script>
<script src="<?= base_url('assets/admin/dist/js/pages/dashboards/dashboard1.js'); ?>"></script>
<script>
$('.datepicker').datepicker({
    autoclose: true,
    todayHighlight: true
});
</script>