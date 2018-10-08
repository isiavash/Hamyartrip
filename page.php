<?php get_header(); ?>
<main>
  <section>
    <div class="main-banner">
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

     <article class="box container">
         <div class="row">

           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



  							      <article class="page_content">



                                   <div class="splt"></div>
                                      <?php the_content(__('')); ?>
                                   <div class="splt"></div>

                                   <?php endwhile; else: ?><?php endif; ?>

                         </article>








     </article><!--box-->





    </div>
</section>
</main>
<?php get_footer() ?>
