<?php if (is_array($categories)): ?>
<div class="row">
    <div class="col-sm-6">
	<ul class="arrow">
	<?php foreach ($categories as $category): ?>
	<li>
		<?php echo anchor("blog/category/{$category->slug}", $category->title) ?>
	</li>
	<?php endforeach ?>
	</ul>
	</div>
</div>
<?php endif ?>            
