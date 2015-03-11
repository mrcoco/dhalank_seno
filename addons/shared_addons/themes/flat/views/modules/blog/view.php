<div class="row">
{{ theme:partial name="asides" }}
{{ post }}
<div class="col-sm-8 col-sm-pull-4">
	<div class="blog">
	        <div class="blog-item">
	            <img class="img-responsive img-blog" src="images/blog/blog2.jpg" width="100%" alt="" />
	            <div class="blog-content">
	                <h3>Duis sed odio sit amet nibh vulputate cursus</h3>
	                <div class="entry-meta">
	                    <span><i class="icon-user"></i> <a href="#">John</a></span>
	                    <span><i class="icon-folder-close"></i> <a href="#">Bootstrap</a></span>
	                    <span><i class="icon-calendar"></i> Sept 16th, 2012</span>
	                    <span><i class="icon-comment"></i> <a href="blog-item.html#comments">3 Comments</a></span>
	                </div>
	                <p class="lead">{{ body }}</p>
	           
	                <hr>

	                <div class="tags">
	                    <i class="icon-tags"></i> Tags 
	                    {{ if keywords }}
	                    	{{ keywords }}
								<a class="btn btn-xs btn-primary" href="/tagged/{{ keyword }}">{{ keyword }}</a>
							{{ /keywords }}
						{{ endif }}
	                </div>

	                <p>&nbsp;</p>

	 				<?php if (Settings::get('enable_comments')): ?>	

	                <div id="comments">
	                    <div id="comments-list">
	                        <h3><?php echo lang('comments:title') ?></h3>
	                        <?php echo $this->comments->display() ?>
	                    </div><!--/#comments-list-->  

	                    <?php if ($form_display): ?>
						<?php echo $this->comments->form() ?>
						<?php else: ?>
						<?php echo sprintf(lang('blog:disabled_after'), strtolower(lang('global:duration:'.str_replace(' ', '-', $post[0]['comments_enabled'])))) ?>
						<?php endif ?>
	                    
	                </div><!--/#comments-->
	                <?php endif; ?>
	            </div>
	        </div><!--/.blog-item-->
	    </div>
	</div><!--/.col-md-8-->
	{{/post}}
</div>