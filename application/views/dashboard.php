<div class="content-wrapper" style = "  background: url(images/h.jpg) no-repeat center center fixed;opacity: 0.7 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Control panel</small>
      </h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->doctorListingCount(); ?>
                  <h3><?php echo $count?></h3>
                  <p>Doctors</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user-md"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/doctors" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->patientListingCount(); ?>
                  <h3><?php echo $count?><sup style="font-size: 20px"></sup></h3>
                  <p>Patients</p>
                </div>
                <div class="icon">
                  <i class="fa fa-bed"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/patients" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->assistantListingCount();?>
                  <h3><?php echo $count?></h3>
                  <p>Assistant Doctors</p>
                </div>
                <div class="icon">
                  <i class="fa fa-stethoscope"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/assistant" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->nurseListingCount();?>
                  <h3><?php echo $count?></h3>
                  <p>Nurses</p>
                </div>
                <div class="icon">
                  <i class="ion ion-woman"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/nurse" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>

          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->appointmentListingCount(); ?>
                  <h3><?php echo $count?></h3>
                  <p>Appointments</p>
                </div>
                <div class="icon">
                  <i class="ion ion-clipboard"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/appointment" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->medicineListingCount(); ?>
                  <h3><?php echo $count?><sup style="font-size: 20px"></sup></h3>
                  <p>Medicines</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-medkit"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/medicine" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->prescriptionListingCount();?>
                  <h3><?php echo $count?></h3>
                  <p>Prescriptions</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/prescription" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->ambulanceListingCount();?>
                  <h3><?php echo $count?></h3>
                  <p>Ambulance</p>
                </div>
                <div class="icon">
                  <i class="fa fa-ambulance"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/ambulance" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>

          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->a_patientListingCount(); ?>
                  <h3><?php echo $count?></h3>
                  <p>Admitted Patients</p>
                </div>
                <div class="icon">
                  <i class="fa fa-bed"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/a_patient" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->d_patientListingCount(); ?>
                  <h3><?php echo $count?><sup style="font-size: 20px"></sup></h3>
                  <p>Discharged Patient</p>
                </div>
                <div class="icon">
                  <i class="fa fa-male"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/d_patient" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->testListingCount();?>
                  <h3><?php echo $count?></h3>
                  <p>Test</p>
                </div>
                <div class="icon">
                  <i class="fa fa-heartbeat"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/test" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->roomsListingCount();?>
                  <h3><?php echo $count?></h3>
                  <p>Rooms</p>
                </div>
                <div class="icon">
                  <i class="fa fa-university"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/rooms" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>

          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->deptListingCount(); ?>
                  <h3><?php echo $count?></h3>
                  <p>Departments</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/dept" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->wardListingCount(); ?>
                  <h3><?php echo $count?><sup style="font-size: 20px"></sup></h3>
                  <p>Wards</p>
                </div>
                <div class="icon">
                  <i class="fa fa-hospital-o"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/wards" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->wardboyListingCount();?>
                  <h3><?php echo $count?></h3>
                  <p>Ward Boy</p>
                </div>
                <div class="icon">
                  <i class="fa fa-male"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/wardboy" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box" style = "box-shadow: 1px 1px 1px 1px #888888;border-radius:15px;background-color:#ffff">
                <div class="inner">
                <?php $count = $this->user_model->p_testListingCount();?>
                  <h3><?php echo $count?></h3>
                  <p>Patient Test</p>
                </div>
                <div class="icon">
                  <i class="fa fa-heartbeat"></i>
                </div>
                <a href="<?php echo base_url(); ?>User/p_test" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>
    </section>
</div>
