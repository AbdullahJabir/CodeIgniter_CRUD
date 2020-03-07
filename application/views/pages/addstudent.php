    <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->

                <p>
                  <?php 
                  $message = $this->session->userdata('message');
                  if($message)
                  {
                    echo "<span class='alert alert-danger'>$message<M/span>";

                    $this->session->unset_userdata('message');
                  }

                  ?>
                </p>
                <!-- form start -->
                <form role="form" action="<?php echo base_url()?>save-student" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Student Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="student_name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Student Phone</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Student Phone" name="student_phone">
                    </div>
                   <div class="form-group">
                      <label for="exampleInputEmail1">Student Roll</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="STUDENT Roll" name="student_roll">
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->

  
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>