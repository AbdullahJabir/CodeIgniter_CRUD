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
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 

                      foreach($all_student_info as $value){


                        ?>
                     
                      <tr>
                        <td><?php echo $value->student_id?></td>
                        <td><?php echo $value->student_name?></td>
                        <td><?php echo $value->student_phone?></td>
                        <td> <?php echo $value->student_roll?></td>
                        <td>
                          <a class="btn btn-info" href="<?php echo base_url()?>edit-student/<?php echo $value->student_id ?>">Edit</a>
                          <a class="btn btn-success" href="<?php echo base_url()?>show-student/<?php echo $value->student_id ?>">Show</a>
                          <a  class="btn btn-danger" href="<?php echo base_url()?>delete-student/<?php echo $value->student_id ?>">Delete</a>
                        </td>
                      </tr>
                    <?php }?>
                   
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->