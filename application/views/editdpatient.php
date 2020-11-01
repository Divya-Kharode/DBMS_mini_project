<?php
$Pat_id = $userInfo->Pat_id;
$Pat_name = $userInfo->Pat_name;
$Age = $userInfo->Age;
$Blood_Group = $userInfo->Blood_Group;
$Doc_id = $userInfo->Doc_id;
$Discharge_date = $userInfo->Discharge_date;
$Ward_id = $userInfo->Ward_id;
$Dept_id = $userInfo->Dept_id;
$Room_no = $userInfo->Room_no;
$Disease = $userInfo->Disease;
$Total_bill = $userInfo->Total_bill;
$Address = $userInfo->Address;
$City = $userInfo->City;
$Contact_no = $userInfo->Contact_no;
$Admitted_Patient = $userInfo->Admitted_Patient;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Discharge Patient Management
        <small>Add / Edit Discharge Patient</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Discharge Patient Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addOffer" action="<?php echo base_url(); ?>User/editolddpatient" method="post">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="Pat_id">Patient ID</label>
                                        <input type="text" class="form-control required" value="<?php echo $Pat_id; ?>" id="Pat_id" name="Pat_id" maxlength="128" readonly>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Pat_name">Patient Name</label>
                                        <input type="text" class="form-control required" id="Pat_name" value="<?php echo $Pat_name; ?>" name="Pat_name" maxlength="128">
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="Age">Age</label>
                                        <input type="text" class="form-control required" value="<?php echo $Age; ?>" id="Age" name="Age" maxlength="128">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Blood_Group">Blood Group</label>
                                        <input type="text" class="form-control required" id="Blood_Group" name="Blood_Group" maxlength="128"  value="<?php echo $Blood_Group; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Doc_id">Doctor ID</label>
                                        <input type="text" class="form-control required" id="Doc_id" name="Doc_id" value="<?php echo $Doc_id; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Discharge_date">Discharge Date</label>
                                        <input type="text" class="form-control required" id="Discharge_date" name="Discharge_date" maxlength="128"  value="<?php echo $Discharge_date; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Ward_id">Ward ID</label>
                                        <input type="text" class="form-control required" id="Ward_id" name="Ward_id" value="<?php echo $Ward_id; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            
                           <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Dept_id">Department ID</label>
                                        <input type="text" class="form-control required" id="Dept_id" name="Dept_id" maxlength="128"  value="<?php echo $Dept_id; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Room_no">Room No.</label>
                                        <input type="text" class="form-control required" id="Room_no" name="Room_no" value="<?php echo $Room_no; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Disease">Disease</label>
                                        <input type="text" class="form-control required" id="Disease" name="Disease" maxlength="128"  value="<?php echo $Disease; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Total_bill">Total Bill</label>
                                        <input type="text" class="form-control required" id="Total_bill" name="Total_bill" value="<?php echo $Total_bill; ?>" maxlength="128">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Admitted_Patient">Admitted Patient Date</label>
                                        <input type="text" class="form-control required" id="Admitted_Patient" name="Admitted_Patient" value="<?php echo $Admitted_Patient; ?>" maxlength="128">
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
