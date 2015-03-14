<section class="title">
	<!-- We'll use $this->method to switch between ngudal_piwulang.create & ngudal_piwulang.edit -->
	<h4><?php echo lang('ngudal_piwulang:'.$this->method); ?></h4>
</section>

<section class="item">
	<div class="content">
		<?php echo form_open_multipart($this->uri->uri_string(), 'class="crud"'); ?>

		<div class="form_inputs">

			<ul class="fields">
				<li>
	<label for="judul">Judul</label>
<div class="input">
	<?php echo form_input("judul", set_value("judul", $judul)); ?>
</div>
</li>
<li>
	<label for="piwulang">Piwulang</label>
<div class="input">
	<?php echo form_textarea("piwulang", set_value("piwulang", $piwulang)); ?>
</div>
</li>
<li>
	<label for="penulis">Penulis</label>
<div class="input">
	<?php echo form_input("penulis", set_value("penulis", $penulis)); ?>
</div>
</li>

			<!-- <li>
				<label for="fileinput">Fileinput
					<?php if (isset($fileinput->data)): ?>
					<small>Current File: <?php echo $fileinput->data->filename; ?></small>
					<?php endif; ?>
					</label>
				<div class="input"><?php echo form_upload('fileinput', NULL, 'class="width-15"'); ?></div>
			</li> -->
		</ul>

	</div>

	<div class="buttons">
		<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel') )); ?>
	</div>

	<?php echo form_close(); ?>
</div>
</section>