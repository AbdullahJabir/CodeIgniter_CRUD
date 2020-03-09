   <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Hover Data Table</h3>
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

                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Image</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 

                      foreach($all_student_info as $value){


                        ?>
                     
                      <tr>
                        <td><?php echo $value->admin_id ?></td>
                        <td><?php echo $value->admin_email ?></td>
                        <td><img src="<?php echo $value->admin_image ?> " style="height: 80px;width: 80px;"/></td>
                        
                        <td>
                          <a class="btn btn-info" href="#">Edit</a>
                          <a class="btn btn-success" href="#">Show</a>
                          <a  class="btn btn-danger" href="#">Delete</a>
                        </td>
                      </tr>
                    <?php }?>
                   
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->