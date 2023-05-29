<div class="modal fade" id="status<?php echo $id ?>">
      <form method="POST" enctype="multipart/form-data" action="appointmentStatusSave.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-cyan">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus"></i>
                        Change Status
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <input name="id" value="<?php echo $id ?>" type="hidden">
                            <div class="col-sm-12">
                              
                                <div class="row">
                                    
                                    <div class="form-group col-sm-12">
                                        <label for="stats">Status: <span style="color:red;">*</span></label>
                                        <select id="appointmentStatus" name="status" class="form-control" required>
                                        <option selected disabled>Select status </option>
                                        <option value="1">Approve</option>
                                        <option value="2">Reject</option>
										<option value="3">Complete</option>
                                        </select>
                                    </div>
                                </div>
                                 <!-- <div class="row" id="appointmentMechanic<?php echo $id ?>" style="display: none;">
                                     
                                    <div class="form-group col-sm-12">
                                        <label for="stats">Assign Staff: <span style="color:red;">*</span></label>
                                        
                                        <select  name="mechanic" class="form-control" required>
                                        <option selected disabled>Select Staff </option>
                                        <?php 
                                            $mechanicQuery = mysqli_query($conn, "select * from users where role_id='2' ");
                                            while($mechanicRow = mysqli_fetch_assoc($mechanicQuery)){
                                        ?>
                                        <option value="<?php echo $mechanicRow['id']; ?>"><?php echo $mechanicRow['name']; ?></option>

                                        <?php } ?>
                                        </select>
                                    </div>
                                </div> -->
                                
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                  <button type="button" class="btn bg-pink" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary" name="btn_appointment"><i class="fa fa-check"></i> Submit</button>
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>