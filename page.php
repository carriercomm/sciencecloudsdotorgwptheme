<?php get_header(); ?>
			
        <?php if (single_post_title('', FALSE) == 'Home' || single_post_title('', FALSE) == '') {
        ?>
        <div class="jumbotron masthead">
            <div class="container">
                <h1><?php bloginfo('title'); ?></h1>

                <ul id="homepage-header-links">
                <?php wp_list_pages('sort_column=menu_order&title_li='); ?>
                </ul>
            </div>
        </div>
        <?php
            }
?>

        <div class="container-fluid" id="outer-container">
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                        <?php if (single_post_title('', FALSE) != 'Home') {
                        ?>
						<header>
							
							<div class="page-header"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>
						
						</header> <!-- end article header -->
                        <?php }
                        ?>
					
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
					</article> <!-- end article -->
					
					<!--?php comments_template('',true); ?>-->
					
					<?php endwhile; ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
