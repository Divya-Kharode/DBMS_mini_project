<?php
$email = $this->session->userdata('email');
$name = $this->session->userdata('name');
$role =  $this->session->userdata('role');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hospital Management System</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dist/css/card.css" rel="stylesheet" type="text/css" />

    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>H</b>M</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Hospital</b>Management</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
         <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user" aria-hidden="true"></i>
                  <span class="hidden-xs"><?php echo $name?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" /><br/>
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $email; ?></small>
                    </p>
                    
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url().'User/profile/'; ?>" class="btn btn-warning btn-flat"><i class="fa fa-lock" aria-hidden="true"></i> Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header" style = "color:#fff">MAIN NAVIGATION</li>
            <li>
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-home"></i> <span>&nbspHome</span></i>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/doctors" >
                <i class="fa fa-user-md"></i>
                <span>&nbspDoctors</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/patients" >
                <i class="fa fa-bed"></i>
                <span>&nbspPatients</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/assistant">
                <i class="fa fa-stethoscope"></i>
                <span>&nbspAssistant</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/nurse" >
                <i class="fa fa-stethoscope"></i>
                <span>&nbspNurse</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/appointment">
                <i class="fa fa-calendar-check-o"></i>
                <span>&nbspAppointments</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/dept">
                <i class="fa fa-users"></i>
                <span>&nbspDepartment</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/a_patient" >
                <i class="fa fa-bed"></i>
                <span>&nbspAdmitted Patients</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/d_patient" >
                <i class="fa fa-bed"></i>
                <span>&nbspDischarged Patient</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/wards">
                <i class="fa fa-hospital-o"></i>
                <span>&nbspWards</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/wardboy">
                <i class="fa fa-users"></i>
                <span>&nbspWardBoy</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/medicine">
                <i class="fa fa-medkit"></i>
                <span>&nbspMedicine</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/prescription">
                <i class="fa fa-list"></i>
                <span>&nbspPrescription</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/test">
                <i class="fa fa-heartbeat"></i>
                <span>&nbspTest</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/p_test">
                <i class="fa fa-heartbeat"></i>
                <span>&nbspPatient Test</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/rooms">
                <i class="fa fa-hospital-o"></i>
                <span>&nbspRooms</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/office">
                <i class="fa fa-university"></i>
                <span>&nbspOffice</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/ambulance">
                <i class="fa fa-ambulance"></i>
                <span>&nbspAmbulance</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>User/a_driver">
                <i class="fa fa-male"></i>
                <span>&nbspAmbulance Driver</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
