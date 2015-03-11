
    <div class="row">
        {{ theme:partial name="asides" }}
            {{ if posts }}       
            <div class="col-sm-8 col-sm-pull-4">
                <div class="blog">
                    {{ posts }}
                    <div class="blog-item">
                        <img class="img-responsive img-blog" src="images/blog/blog1.jpg" width="100%" alt="" />
                        <div class="blog-content">
                            <a href="{{ url }}"><h3>{{ title }}</h3></a>
                            <div class="entry-meta">
                                <span><i class="icon-user"></i> <a href="/users/profile/{{ author_id }}">{{user:display_name user_id=author_id }}</a></span>
                                <span><i class="icon-calendar"></i> {{ helper:timespan timestamp=created_on }}</span>
                                <!-- <span><i class="icon-comment"></i> <a href="blog-item.html#comments">3 Comments</a></span> -->
                            </div>
                            <p> {{ intro }}</p>
                            <a class="btn btn-default" href="{{ url }}">Read More <i class="icon-angle-right"></i></a>
                        </div>
                    </div><!--/.blog-item-->
                    {{ /posts }}
                    {{ pagination }}
                </div>
            </div><!--/.col-md-8-->
            {{ else }}
                {{ helper:lang line="blog:currently_no_posts" }}

            {{ endif }}
    </div><!--/.row-->
	

	

	