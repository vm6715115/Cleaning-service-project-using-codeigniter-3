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
                                  <li class="breadcrumb-item active" aria-current="page">Team Master</li>
                              </ol>
                          </nav>
                      </div>
                      <h4 class="page-title">Team Update Images Form</h4>
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
                              <h4 class="card-title">Team Form</h4>
                              <h5 class="card-subtitle"> Update all type of images </h5>
                              <form class="form" method="POST" action="<?= base_url('Admin/update_team_image') ?>"
                                  enctype="multipart/form-data">
                                  <input type="hidden" name="id" value="<?= $data->team_id; ?>">
                                  <input type="hidden" name="image_name" value="<?= $data->image_name; ?>">
                                  <div class="form-group mt-5 row">
                                      <label for="example-text-input" class="col-2 col-form-label text-dark">Update Name
                                          :</label><br><br>
                                      <input class="form-control border-secondary" type="text" name="name"
                                          value="<?= $data->name; ?>" id="example-text-input" placeholder="Enter name">
                                  </div> <br>

                                  <div class="form-group mt-5 row">
                                      <label for="example-text-input" class="text-dark">Update Designation
                                          :</label><br><br>
                                      <input class="form-control border-secondary" type="text" name="designation"
                                          value="<?= $data->designation; ?>" id="example-text-input"
                                          placeholder="Enter designation">
                                  </div><br>
                                  <img src="<?= base_url($data->image_name);?>" alt="" style="width:200px;">
                                  <label class="text-dark">Update image file</label>
                                  <input type="file" name="image_name"
                                      class="form-control border-secondary"><br><br><br>

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