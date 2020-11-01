
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Patient Tests  Management
        <small>Add / Edit Patient Tests </small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Patient Tests Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="<?php echo base_url(); ?>User/addNewptest" method="post" role="form">
                        <div class="box-body">                       
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Pat_id">Patient ID</label>
                                        <select class="form-control required" id="Pat_id" name="Pat_id">
                                            <option value="0">Select</option>
                                            <?php
                                            if(!empty($Pat))
                                            {
                                                foreach ($Pat as $rl)
                                                {
                                                    ?>
                                                    <option value="<?php echo $rl->Pat_id ?>" <?php if($rl->Pat_id == set_value('Pat_id')) {echo "selected=selected";} ?>><?php echo $rl->Pat_id ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Test_id">Test ID</label>
                                        <select class="form-control required" id="Test_id" name="Test_id">
                                            <option value="0">Select</option>
                                            <?php
                                            if(!empty($Test))
                                            {
                                                foreach ($Test as $rl)
                                                {
                                                    ?>
                                                    <option value="<?php echo $rl->Test_id ?>" <?php if($rl->Test_id == set_value('Test_id')) {echo "selected=selected";} ?>><?php echo $rl->Test_id ?></option>
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