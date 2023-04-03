<p class="bg-danger">
<?php if($this->session->flashdata('no_access')): ?>

<?php echo $this->session->flashdata('no_access'); ?>

<?php endif; ?>
</p>
<h1>PROJECTS</h1>
<table class="table">
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
        <?php echo "<td>" . $project->project_name . "</td>"; ?>
        <?php echo "<td>" . $project->project_body . "</td>"; ?>
    </tr>
    <?php endforeach; ?>
</tbody>


</table>