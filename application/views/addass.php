
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Doctor Assistant Management
        <small>Add / Edit Assistant </small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Assistant Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="<?php echo base_url(); ?>User/addNewass" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="Ass_id">Assistant ID</label>
                                            <input type="text" class="form-control required" value="<?php echo set_value('Ass_id'); ?>" id="Ass_id" name="Ass_id" maxlength="128" required>
                                         </div>
                                    
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Ass_name">Assistant Name</label>
                                            <input type="text" class="form-control required" id="Ass_name" name="Ass_name" value="<?php echo set_value('Ass_name'); ?>" maxlength="128" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                              
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Doc_id">Doctor ID</label>
                                        <select class="form-control required" id="Doc_id" name="Doc_id">
                                            <option value="0">Select</option>
                                            <?php
                                            if(!empty($Doc))
                                            {
                                                foreach ($Doc as $rl)
                                                {
                                                    ?>
                                                    <option value="<?php echo $rl->Doc_id ?>" <?php if($rl->Doc_id == set_value('Doc_id')) {echo "selected=selected";} ?>><?php echo $rl->Doc_id ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Degree">Degree</label>
                                        <input type="text" class="form-control required" id="Degree" name="Degree" value="<?php echo set_value('Degree'); ?>" maxlength="128" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Salary">Salary</label>
                                        <input type="text" class="form-control required" id="Salary" name="Salary" value="<?php echo set_value('Salary'); ?>" maxlength="128">
                                    </div>
                                </div>
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
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Contact_no">Contact No.</label>
                                        <input type="text" class="form-control required" id="Contact_no" name="Contact_no" maxlength="128"  value="<?php echo set_value('Contact_no'); ?>">
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
