
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Department Management
        <small>Add / Edit Department</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Department Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="<?php echo base_url(); ?>User/addNewdept" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="Dept_id">Department ID</label>
                                            <input type="text" class="form-control required" value="<?php echo set_value('Dept_id'); ?>" id="Dept_id" name="Dept_id" maxlength="128" required>
                                         </div>
                                    
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Dept_name">Department Name</label>
                                            <input type="text" class="form-control required" id="Dept_name" name="Dept_name" value="<?php echo set_value('Dept_name'); ?>" maxlength="128" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                           
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Head_name">Head Name</label>
                                        <input type="text" class="form-control required" id="Head_name" name="Head_name" value="<?php echo set_value('Head_name'); ?>" maxlength="128" required> 
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
