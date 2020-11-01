<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta content='width=device-width'>
    <style>
		<?php include 'style.css'; ?>
		<?php include 'style1.css'; ?>
		<?php include 'style1.min.css'; ?>
	  </style>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition login-page">
  
  <div class="container" style="margin-left:5%;margin-top:15%">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body1">
            <h5 class="card-title1 text-center"><b>Reset Password</b></h5>
            <br/>
        <?php $this->load->helper('form'); ?>
        <div class="row">
            <div >
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
        </div>
        <?php
        $this->load->helper('form');
        $error = $this->session->flashdata('error');
        if($error)
        {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error; ?>                    
            </div>
        <?php }
        $success = $this->session->flashdata('success');
        if($success)
        {
            ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $success; ?>                    
            </div>
        <?php } ?>
        <form action="<?php echo base_url()."Login/forgotPassword1"?>" method="post">
        <br/>
       
           <div class="form-label-group">
                <input type="email"  class="form-control " placeholder="Email" name="email"  required></input>
                <span class="glyphicon glyphicon-envelope form-control-feedback" style="height:50px"></span>
               
              </div>
              <br/>
               <br/>
              <div class="form-label-group">
                <input type="password"  class="form-control " placeholder="Password" name="password"  required></input>
                <span class="glyphicon glyphicon-lock form-control-feedback" style="height:50px"></span>
               
              </div>
              <br/>
              <br/>
         <div class="form-label-group">
                <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" required>
               <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <br/>
             
              <br/>
           <button class="btn1  btn-primary  text-uppercase" type="submit">Submit</button>
          
           
           
       </form>        
        <a href="<?php echo base_url()."Login/log"?>">
      <h4> Log In ? </h4>
        </a>
        </form>        
        
          </div>
         
        </div>
      </div>
    </div>
  </div>
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
