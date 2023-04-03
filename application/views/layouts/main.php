<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">Ci APP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
       
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url(); ?>projects/index">Projects<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register<span class="sr-only">(current)</span></a>
      </li>
      </ul>
      <?php if($this->session->userdata('logged_in')): ?>
      <ul class="nav navbar-nav navbar-right">

     
     
        
      <li><a href="<?php echo base_url(); ?>users/logout"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
        <?php endif; ?>
    
      
    </ul>
   
 
  </div>
</nav>

<div class="container">

<div class="row">
<div class="col-sm-3">

<?php $this->load->view('users/login_view'); ?>
</div>


<div class="col-sm-9">


<?php $this->load->view($main_view);?>
</div>
</div>
</div>
    
</body>
</html>