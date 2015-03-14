<section class="title">
	<h4><?php echo lang('ngudal_piwulang:item_list'); ?></h4>
</section>

<section class="item">
	<div class="content">
	<?php echo form_open('admin/ngudal_piwulang/delete');?>
	<?php if (!empty($ngudal_piwulang)): ?>
		<table border="0" class="table-list" cellspacing="0">
			<thead>
				<tr>
					<th><?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all'));?></th>
					<th>Judul</th>
					<th>Penulis</th>
					<th></th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td colspan="5">
						<div class="inner"><?php $this->load->view('admin/partials/pagination'); ?></div>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<?php foreach( $ngudal_piwulang as $item ): ?>
				<tr id="item_<?php echo $item->id; ?>">
					<td><?php echo form_checkbox('action_to[]', $item->id); ?></td>
					<td><?php echo $item->judul; ?></td>
					<td><?php echo $item->penulis; ?></td>
					<td class="actions">
						<?php echo
						//anchor('ngudal_piwulang', lang('ngudal_piwulang:view'), 'class="button" target="_blank"').' '.
						anchor('admin/ngudal_piwulang/edit/'.$item->id, lang('ngudal_piwulang:edit'), 'class="button"').' '.
						anchor('admin/ngudal_piwulang/delete/'.$item->id, 	lang('ngudal_piwulang:delete'), array('class'=>'button')); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<div class="table_action_buttons">
			<?php $this->load->view('admin/partials/buttons', array('buttons' => array('delete'))); ?>
		</div>
	<?php else: ?>
		<div class="no_data"><?php echo lang('ngudal_piwulang:no_items'); ?></div>
	<?php endif;?>
	<?php echo form_close(); ?>
</div>
</section>