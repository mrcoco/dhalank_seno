<div id="comment-form">
    <?php echo form_open("comments/create/{$module}", 'id="create-comment" class="form-horizontal" role="form"') ?>

	<noscript><?php echo form_input('d0ntf1llth1s1n', '', 'style="display:none"') ?></noscript>

	<h3><?php echo lang('comments:your_comment') ?></h3>

	<?php echo form_hidden('entry', $entry_hash) ?>

	<?php if ( ! is_logged_in()): ?>
        <div class="form-group">
            <div class="col-sm-4">
            	<label for="name"><?php echo lang('comments:name_label') ?><span class="required">*</span>:</label>
                <input type="text" class="form-control" placeholder="Name" name="email" value="<?php echo $comment['name'] ?>" >
            </div>
            <div class="col-sm-4">
            	<label for="email"><?php echo lang('global:email') ?><span class="required">*</span>:</label>
                <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $comment['email'] ?>">
            </div>
            <div class="col-sm-4">
            	<label for="website"><?php echo lang('comments:website_label') ?>:</label>
                <input type="text" class="form-control" placeholder="Website" name="website" value="<?php echo $comment['website'] ?>">
            </div>
        </div>
    <?php endif ?>
        <div class="form-group">
            <div class="col-sm-12">
                <textarea rows="8" class="form-control" placeholder="Comment" name="comment"><?php echo $comment['comment'] ?></textarea>
            </div>
        </div>
        <?php echo form_submit('submit', lang('comments:send_label'),'class="btn btn-danger btn-lg"') ?>
    <?php echo form_close() ?>
</div><!--/#comment-form-->