<div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                      <?php $blog_posts = new WP_Query( array( 'post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => 4 ) );?>
<?php if ( $blog_posts->have_posts() ) : ?>
<?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?> 
<li><a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a><?php echo the_date(); ?></li>

<?php endwhile; ?>
<?php endif; ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <?php $categories = get_categories();
foreach($categories as $category) {
   echo '<li><div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div></li>';
} ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                      <ul>
                          <?php $tag = get_tags( array('hide_empty' => false));
                          foreach($tag as $tags): ?>
                        <li><a href="<?php echo get_tag_link($tags->term_id) ?>"><?php echo $tags->name ?></a></li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>