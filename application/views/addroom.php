
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Doctor Management
        <small>Add / Edit Doctors</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Doctor Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="<?php echo base_url(); ?>User/addNewRoom" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Ward_id">Ward ID</label>
                                        <select class="form-control required" id="Ward_id" name="Ward_id">
                                            <option value="0">Select</option>
                                            <?php
                                            if(!empty($Ward))
                                            {
                                                foreach ($Ward as $rl)
                                                {
                                                    ?>
                                                    <option value="<?php echo $rl->Ward_id ?>" <?php if($rl->Ward_id == set_value('Ward_id')) {echo "selected=selected";} ?>><?php echo $rl->Ward_id ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            
                                        </select>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Room_no">Room No.</label>
                                            <input type="text" class="form-control required" id="Room_no" name="Room_no" value="<?php echo set_value("Room_no"); ?>" maxlength="128">
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Dept_id">Department ID</label>
                                        <select class="form-control required" id="Dept_id" name="Dept_id">
                                            <option value="0">Select</option>
                                            <?php
                                            if(!empty($Dept))
                                            {
                                                foreach ($Dept as $rl)
                                                {
                                                    ?>
                                                    <option value="<?php echo $rl->Dept_id ?>" <?php if($rl->Dept_id == set_value('Dept_id')) {echo "selected=selected";} ?>><?php echo $rl->Dept_id ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Type">Type</label>
                                        <input type="text" class="form-control required" id="Type" name="Type" value="<?php echo set_value('Type'); ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Capacity">Capacity</label>
                                        <input type="text" class="form-control required" id="Capacity" name="Capacity" maxlength="128"  value="<?php echo set_value('Capacity'); ?>">
                                    </div>
                                </div>
                            </div> 
                              
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <button type="reset" class="btn btn-default" value="Reset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>