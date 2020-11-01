<?php
$Wardboy_id = $userInfo->Wardboy_id;
$Wardboy_name = $userInfo->Wardboy_name;
$Ward_id = $userInfo->Ward_id;
$Dept_id = $userInfo->Dept_id;
$Salary = $userInfo->Salary;
$Contact_no = $userInfo->Contact_no;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Ward Boy Management
        <small>Add / Edit Ward Boy</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Ward Boy Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addOffer" action="<?php echo base_url(); ?>User/editoldWB" method="post">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="Wardboy_id">Wardboy Id</label>
                                        <input type="text" class="form-control required" value="<?php echo $Wardboy_id; ?>" id="Wardboy_id" name="Wardboy_id" maxlength="128" readonly>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Wardboy_name">Wardboy Name</label>
                                        <input type="text" class="form-control required" id="Wardboy_name" value="<?php echo $Wardboy_name; ?>" name="Wardboy_name" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Ward_id">Ward Id</label>
                                        <input type="text" class="form-control required" id="Ward_id" name="Ward_id" maxlength="128"  value="<?php echo $Ward_id; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Dept_id">Department Id</label>
                                        <input type="text" class="form-control required" id="Dept_id" name="Dept_id" value="<?php echo $Dept_id; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Salary">Salary</label>
                                        <input type="text" class="form-control required" id="Salary" name="Salary" maxlength="128"  value="<?php echo $Salary; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Contact_no">Contact No</label>
                                        <input type="text" class="form-control required" id="Contact_no" name="Contact_no" value="<?php echo $Contact_no; ?>" maxlength="128">
                                    </div>
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
<!--<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>-->
