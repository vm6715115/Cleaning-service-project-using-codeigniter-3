<!-- ============================================================== -->
<!-- ============================================================== -->
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
                                <a href="<?= base_url('Admin/dashboard')?>" class="link">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Update Service Master</li>
                        </ol>
                    </nav>
                </div>
                <h4 class="page-title">Service Update Details Form</h4>
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


        <?php if( $error=$this->session->flashdata('msg')):   ?>
        <div class="alert alert-dismissible alert-success" style="height: 50px;padding: 14px 22px;">
            <button type="button" class="close" data-dismiss="alert" style="padding: 2px 15px;">&times;</button>
            <?=$error;  ?>
        </div>
        <?php endif; ?>


        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Service Form</h4>
                        <h5 class="card-subtitle"> Update all details </h5>
                        <form class="form" method="POST" action="<?= base_url('Admin/update_service') ?>"
                            enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $data->service_id; ?>">
                            <div class="form-group mt-5 row">
                                <label for="example-text-input" class="col-2 col-form-label text-dark">Update Service
                                    Name :</label><br><br>
                                <input class="form-control border-secondary" type="text" name="service_name"
                                    value="<?= $data->service_name; ?>" id="example-text-input"
                                    placeholder="Enter Name">

                            </div>

                            <div class="form-group mt-5 row">
                                <label for="example-text-input" class="col-2 col-form-label text-dark">Update Short
                                    Description :</label><br><br>
                                <textarea class="form-control border-secondary" name="short_description" cols=""
                                    rows="5" placeholder="Type Here"><?= $data->short_description; ?></textarea>
                            </div>

                            <div class="form-group mt-5 row">
                                <label for="example-text-input" class="col-2 col-form-label text-dark">Update Long
                                    Description :</label><br><br>
                                <textarea class="form-control border-secondary" name="long_description" cols="" rows="5"
                                    placeholder="Type Here"><?= $data->long_description; ?></textarea>
                            </div>
                            <div class="form-group mt-5 row">
                                <label for="example-text-input" class="col-2 col-form-label text-dark">Update Service
                                    Benifits :</label><br><br>
                                <textarea class="form-control border-secondary" name="service_benifits" cols="" rows="5"
                                    placeholder="Type Here"><?= $data->service_benifits; ?></textarea>
                            </div>
                            <br>

                            <button type="submit" class="btn btn-success mr-2">Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->



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
    <script
        src="<?= base_url('assets/admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js'); ?>">
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