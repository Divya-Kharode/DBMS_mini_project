
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Prescription Management
        <small>Add / Edit Prescription</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Prescription Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="<?php echo base_url(); ?>User/addNewpresc" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Med_id">Medicine ID</label>
                                        <select class="form-control required" id="Med_id" name="Med_id">
                                            <option value="0">Select</option>
                                            <?php
                                            if(!empty($Med))
                                            {
                                                foreach ($Med as $rl)
                                                {
                                                    ?>
                                                    <option value="<?php echo $rl->Med_id ?>" <?php if($rl->Med_id == set_value('Med_id')) {echo "selected=selected";} ?>><?php echo $rl->Med_id ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            
                                        </select>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Pat_id">Patient ID</label>
                                            <input type="text" class="form-control required" id="Pat_id" name="Pat_id" value="<?php echo set_value('Pat_id'); ?>" maxlength="128" >
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Give_date">Give Date</label>
                                        <input type="date" class="form-control required" id="Give_date" name="Give_date" value="<?php echo set_value('Give_date'); ?>" maxlength="128" required>
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
