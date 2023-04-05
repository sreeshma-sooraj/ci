<div class="container">
<div class="row">
<div class="col-sm-9">

<h1>Project Name: <?php echo $project_data->project_name; ?></h1>
<p>Date Created : <?php echo $project_data->date_created; ?></p>
<h3>Description</h3>
<?php echo $project_data->project_body; ?>
</div>
</div>
</div>
<div class="container">
<div class="row justify-content-end">
<div class="col-sm-3">
<ul class="list-group">
    <h4>Project Actions</h4>
  <li class="list-group-item"><a href=""> Create Project</a></li>
   <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $project_data->id; ?>">Edit Project</a></li>
   <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?php echo $project_data->id; ?>">Delete Project</a></li>
</ul>   
</div>
</div>
</div>
