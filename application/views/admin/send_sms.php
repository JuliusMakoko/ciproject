<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User Login</title>

<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<?php echo link_tag('assests/css/sb-admin.css'); ?>

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Send Twilio Sms </div>
        <!---- Error Message ---->

<?php if ($this->session->flashdata('error')) { ?>
<p style="color:red; font-size:18px;" align="center"><?php echo $this->session->flashdata('error');?></p>

<?php } ?>  
        <div class="card-body">
<?php echo form_open('admin/send_sms');?>
            <div class="form-group">
              <div class="form-label-group">
<?php echo form_input(['name'=>'cellphone','id'=>'cellphone','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('cellphone')]);?>
<?php echo form_label('Enter cellphone number', 'cellphone'); ?>
<?php echo form_error('cellphone',"<div style='color:red'>","</div>");?>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
<?php echo form_input(['name'=>'message','id'=>'message','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('message')]);?>
<?php echo form_label('Message', 'message'); ?>
<?php echo form_error('message',"<div style='color:red'>","</div>");?>
              </div>
            </div>
   
 <?php echo form_submit(['name'=>'send_sms','value'=>'Send Sms','class'=>'btn btn-primary btn-block']); ?>
<?php echo form_close(); ?>
          <div class="text-center">

 <a class="d-block small" href="<?php echo site_url('admin/Dashboard'); ?>">Back to Dashboard</a>

          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
   <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  </body>

</html>
