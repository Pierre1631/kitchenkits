<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Kitchen Kits | Sign Up</title>

  <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/KKIcon.png');?>">
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/KKIcon.png');?>">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,600" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css');?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/login_style.css')?>">
  <style>
    .bg-image {
      background-image: url(<?php echo base_url('assets/img/Kitchen_BG.jpg');?>);


      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>

<body class="bg-image">

<div class="container">
   <section id="formHolder" >
      <div class="row">
         <div class="col-sm-6 brand">
            <!-- <a href="<?php echo base_url('home'); ?>" class="logo">Home</a> -->
            <div class="heading">
               <h2><a style="color:white; text-decoration:none;"href="<?php echo base_url(); ?>">Kitchen Kits</a></h2>
            </div>
            <!-- <div class="success-msg">
               <p>Great! You Have Successfully Created An Account</p>
               <a href="#" class="profile">View Profile</a>
            </div> -->
         </div>
         <div class="col-sm-6 form">
            <div class="signup form-piece">
              <form action="<?php echo site_url('user/register'.'?id=3'); ?>" method="post">
                <div style="font-size: 12px; color: red; text-align: center;">
                  <?php echo validation_errors(); ?>
                </div>
                <div class="form-group has-feedback">
                  <input type="text" name="username" id="username" class="" placeholder="Username">
                  <span class="glyphicon glyphicon-user form-control-feedback" style="color: gray"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="password" name="password" id="password" class="" placeholder="Password">
                  <span class="glyphicon glyphicon-lock form-control-feedback" style="color: gray"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="password" name="cpassword" id="cpassword" class="" placeholder="Confirm Password">
                  <span class="glyphicon glyphicon-log-in form-control-feedback" style="color: gray"></span>
                </div>
                <div class="row">
                  <div class="col-xs-6" style="padding-right: 5px">
                    <div class="form-group">
                      <input type="text" name="fname" id="fname" class="" placeholder="First Name">
                    </div>
                  </div>
                  <div class="col-xs-6" style="padding-left: 5px">
                    <div class="form-group">
                      <input type="text" name="lname" id="lname" class="" placeholder="Last Name">
                    </div>
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <input type="email" name="emailaddr" id="emailaddr" class="" placeholder="Email">
                  <span class="glyphicon glyphicon-envelope form-control-feedback" style="color: gray"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="text" name="haddress" id="haddress" class="" placeholder="Complete Address">
                  <span class="glyphicon glyphicon-home form-control-feedback" style="color: gray"></span>
                </div>
                <br>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="<?php echo site_url('login'); ?>" class="btn btn-info btn-block btn-flat text-center">Sign In</a>
                  </div>
                  <div class="col-xs-4"></div>
                  <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
                  </div>
                </div>

              </form>
            </div>
         </div>
      </div>

   </section>


   <footer>
      <!-- <p style="color:white"> #e85842-->
      <p>
        <a style="color: white">Kitchen Kits &copy; 2018</a>
      </p>
   </footer>

</div>

<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js');?>"></script>

<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js');?>" ></script>
<!-- <script src="<?php echo base_url('assets/js/popper.js');?>" ></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" ></script> -->
<!-- INPUT MASK -->
<!-- <script src="<?php echo base_url('assets/js/input-mask/jquery.inputmask.js"');?>"></script>
<script src="<?php echo base_url('assets/js/input-mask/jquery.inputmask.extensions.js"');?>"></script>
<script src="<?php echo base_url('assets/js/input-mask/jquery.inputmask.numeric.extensions.js"');?>"></script>
<script src="<?php echo base_url('assets/js/input-mask/jquery.inputmask.date.extensions.js"');?>"></script>
<script src="<?php echo base_url('assets/js/input-mask/jquery.inputmask.phone.extensions.js"');?>"></script> -->
<script  src="assets/js/index.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>

</html>
