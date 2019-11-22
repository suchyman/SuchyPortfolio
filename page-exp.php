<?php
/*
 * Template Name: Doswiadczenie
 * Template Post Type: post
 */
?>

<hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Doświadczenie</h2>
        
        


        <?php
    global $post;
 

    $loop = new WP_Query( array( 'post_type' => 'exp_cpt', 'posts_per_page' => -1 ) ); 

    while ( $loop->have_posts() ) : $loop->the_post(); 
    
      //   the_title();
      //   the_content();
      //  the_field('stanowisko'); 
      //    the_field('date_start'); 
      //    the_field('date_end'); 
     
      $date_string_start = get_field('data_start');
      $date_start = DateTime::createFromFormat('d/m/Y', $date_string_start);

      $date_string_end = get_field('data_end');
      $date_end = DateTime::createFromFormat('d/m/Y', $date_string_end);

            
            ?>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php the_title(); ?>
            </h3>
            <div class="subheading mb-3"><?php the_field('stanowisko'); ?></div>
            <?php the_content(); ?>
            </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $date_start->format('M Y'); ?> - <?php echo $date_end->format('M Y'); ?></span>
            
          </div>
        </div>
            <?php 
            endwhile; 
            ?>
            
        <?php
        wp_reset_postdata();
    
    ?>


        

        

      </div>

    </section>