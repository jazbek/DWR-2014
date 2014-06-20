<p class="category"><?php the_category(', ') ?></p>
<p class="byline author"><a href="<php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author() ?></a></p>
<time class="updated" datetime="<?php echo get_the_time('c') ?>" pubdate="pubdate"><?php echo get_the_time('F j, Y') ?></time>
