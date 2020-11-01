
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Ambulance Driver Management
        <small>Add / Edit Ambulance Driver</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Ambulance Driver Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="<?php echo base_url(); ?>User/addNewambd" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="Driver_id">Driver ID</label>
                                            <input type="text" class="form-control required" value="<?php echo set_value('Driver_id'); ?>" id="Driver_id" name="Driver_id" maxlength="128" required>
                                         </div>
                                    
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Driver_name">Driver Name</label>
                                            <input type="text" class="form-control required" id="Driver_name" name="Driver_name" value="<?php echo set_value('Driver_name'); ?>" maxlength="128" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <!--<div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="Product_id">Product ID</label>
                                        <input type="text" class="form-control" value="<?php echo set_value('Product_id'); ?>" id="Product_id" name="Product_id" maxlength="128">
                                    </div>
                                    
                                </div>-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Salary">Salary</label>
                                        <input type="text" class="form-control required" id="Salary" name="Salary" value="<?php echo set_value('Salary'); ?>" maxlength="128">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Am_no">Ambulance Number</label>
                                        <select class="form-control required" id="Am_no" name="Am_no">
                                            <option value="0">Select</option>
                                            <?php
                                            if(!empty($amb))
                                            {
                                                foreach ($amb as $rl)
                                                {
                                                    ?>
                                                    <option value="<?php echo $rl->Am_no?>" <?php if($rl->Am_no == set_value('Am_no')) {echo "selected=selected";} ?>><?php echo $rl->Am_no ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            
                                        </select>
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
