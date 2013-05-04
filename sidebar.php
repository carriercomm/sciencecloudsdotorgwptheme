				<div id="sidebar1" class="fluid-sidebar sidebar span2" role="complementary">
                    <div id="recent-posts">
                        <h4>
                        <a href="<?php echo get_permalink(get_page_by_title('Blog')); ?>">Featured</a>
                        <?php if (is_front_page()) { ?>
                        <span id="social-links">
                            <a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/beakerss.png"></a>
                        </span>
                        <?php
                        }
                        ?>
                        </h4>
                        <ul>
                            <?php

                            $args=array(
                                'tag' => 'featured',
                            );
                            $recent_posts = wp_get_recent_posts($args);

                            foreach( $recent_posts as $recent ) {
                                echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                            }
                             ?>
                        </ul>
                    </div>            
                    <?php dynamic_sidebar( 'sidebar1' ); ?>
				</div>
