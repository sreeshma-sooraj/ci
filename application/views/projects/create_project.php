<h2>Create Projects</h2>
<?php $attribute = array('id' => 'create_form' , 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>   
<?php echo form_open('users/register',$attribute);?>
<div class="form-group">

<?php echo form_label('Project Name');?>


<?php 

    $data = array(
    'class' => 'form-control',
    'name' => 'project_name',
    'placeholder' => 'Enter project name'
    );
?>
<?php echo form_input($data);?>
</div>

<div class="form-group">

<?php echo form_label('Project Description');?>


<?php 

    $data = array(
    'class' => 'form-control',
    'name' => 'project_body'
    
    );
?>
<?php echo form_textarea($data);?>
</div>













<div class="form-group">

<?php 

    $data = array(
    'class' => 'btn btn-primary',
    'name' => 'submit',
    'value' => 'Register'
    );
?>
<?php echo form_submit($data);?>
</div>

<?php echo form_close();?>
