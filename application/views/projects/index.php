<p class="bg-danger">
<?php if($this->session->flashdata('no_access')): ?>

<?php echo $this->session->flashdata('no_access'); ?>

<?php endif; ?>
</p>
<h1>PROJECTS</h1>
<a class="btn btn-primary float-right" href="<?php base_url(); ?> projects/create">Create Projects</a>
<table class="table table-hover">
  
    <thead>
<tr>

<th>
    Project Name
</th>
<th>
    Project Body
</th>
</tr>


</thead>
<tbody>
    <?php foreach($projects as $project): ?>
        <tr>
        <?php echo "<td><a href='". base_url()."projects/display/".$project->id."'>" . $project->project_name . "</a></td>"; ?>
        <?php echo "<td>" . $project->project_body . "</td>"; ?>
    </tr>
    <?php endforeach; ?>
</tbody>


</table>