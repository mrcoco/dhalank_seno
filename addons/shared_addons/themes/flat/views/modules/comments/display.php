<?php if ($comments): ?>
<?php foreach ($comments as $item): ?>
<div class="media">
    <div class="pull-left">
        <?php echo gravatar($item->user_email, 60) ?>
    </div>
    <div class="media-body">
        <div class="well">
            <div class="media-heading">
                <strong><?php echo $item->user_name ?></strong>&nbsp; <small><?php echo format_date($item->created_on) ?></small>
                <a class="pull-right" href="#"><i class="icon-repeat"></i> Reply</a>
            </div>
			<?php if (Settings::get('comment_markdown') and $item->parsed): ?>
				<?php echo $item->parsed ?>
			<?php else: ?>
				<p><?php echo nl2br($item->comment) ?></p>
			<?php endif ?>
        </div>
    </div>
</div><!--/.media-->
<?php endforeach ?>
<?php else: ?>
<div class="media">
	<div class="media-body">
        <div class="well">
            <div class="media-heading">
                <strong><?php echo lang('comments:no_comments') ?></strong>
            </div>
        </div>
    </div>
</div><!--/.media-->
<?php endif ?>