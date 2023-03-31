<p class="bg-danger">
<?php if($this->session->flashdata('no_access')): ?>

<?php echo $this->session->flashdata('no_access'); ?>

<?php endif; ?>
</p>