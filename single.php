<?php get_header() ?>


<main class="main-banner">
 <div class="container">
      <div class="row">

                  <?php 		do_action( 'woocommerce_before_single_product' ); ?>
                <div class="breadcrumb_box">
                  <?php
                  	$args = array(
                  			'delimiter' => '',
                        'after' => ' '
                  	);
                  ?>
                 <?php woocommerce_breadcrumb( $args ); ?>
               </div><!--breadcrumb-->



				 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				 <article class="box container">
						 <div class="row">

						 <header class="entry-header">
                                    <h1 class="entry-title"><?php the_title(); ?></h1>
							 <div class="entry-meta">
                                           <div class="category"><i class="fa fa-list-ul"></i> دسته بندی ها: <?php the_category(', ') ?></div>
                             <div class="entry-time">
                                        <span class="time"  style="margin-left: 30px;"><i class="fa fa-calendar"></i><?php the_time('j F Y'); ?></span>
                                         <span class="view"><i class="fa fa-eye"></i>بازدید<?php if(function_exists('the_views')) { the_views(); } ?></span>
                               </div>
								  </div><!--entrymeta-->
                                     </header>

							  <div class="entry-content">
                                    <?php the_content(__('')); ?>
								  </div>

                                 <?php endwhile; else: ?><?php endif; ?>
                   <footer class="entry-footer">
                       <div class="tags">
                           <i class="fa fa-tags"></i>
                         <?php the_tags(); ?>


                       </div>
                   </footer>







				 </div><!--row-->
				 </article><!--box-->

				  <div class="box entry-content">

                       <?php comments_template() ?>


                     </div>







      </div><!--row-->
    </div><!--container-->

</main>

<?php get_footer() ?>
