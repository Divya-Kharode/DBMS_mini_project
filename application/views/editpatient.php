<?php
$Pat_id = $userInfo->Pat_id;
$Pat_name = $userInfo->Pat_name;
$Age = $userInfo->Age;
$Blood_Group = $userInfo->Blood_Group;
$Doc_id = $userInfo->Doc_id;
$Disease = $userInfo->Disease;
$Address = $userInfo->Address;
$City = $userInfo->City;
$Contact_no = $userInfo->Contact_no;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Patient Management
        <small>Add / Edit Patient</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Patient Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addOffer" action="<?php echo base_url(); ?>User/editoldpatient" method="post">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="Pat_id">Patient ID</label>
                                        <input type="text" class="form-control required" value="<?php echo $Pat_id; ?>" id="Pat_id" name="Pat_id" maxlength="128" readonly>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Pat_name">Patient Name</label>
                                        <input type="text" class="form-control required" id="Pat_name" value="<?php echo $Pat_name; ?>" name="Pat_name" maxlength="128" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Age">Age</label>
                                        <input type="text" class="form-control required" id="Age" name="Age" maxlength="128"  value="<?php echo $Age; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Blood_Group">Blood Group</label>
                                        <input type="text" class="form-control required" id="Blood_Group" name="Blood_Group" value="<?php echo $Blood_Group; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Doc_id">Doctor ID</label>
                                        <input type="text" class="form-control required" id="Doc_id" name="Doc_id" maxlength="128"  value="<?php echo $Doc_id; ?>" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Disease">Disease</label>
                                        <input type="text" class="form-control required" id="Disease" name="Disease" value="<?php echo $Disease; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            
                            
                              
                               <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <input type="text" class="form-control required" id="Address" name="Address" maxlength="128"  value="<?php echo $Address; ?>">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="City">City</label>
                                        <input type="text" class="form-control required" id="City" name="City" value="<?php echo $City; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Contact_no">Contact No.</label>
                                        <input type="text" class="form-control required" id="Contact_no" name="Contact_no" maxlength="128"  value="<?php echo $Contact_no; ?>">
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
