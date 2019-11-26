<?php
/*
 * 
 */
?>

<hr class="m-0">

<!--
Tu zaczynamy
-->

<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Skillsy</h2>


        <?php
    global $post;
 

    $loop = new WP_Query( array( 'post_type' => 'skills_cpt', 'posts_per_page' => -1 ) ); 

    while ( $loop->have_posts() ) : $loop->the_post(); 
    ?>
          <?php //the_title(); ?>
          <div class="subheading mb-3"><?php the_content(); ?></div>
          <ul class="list-inline dev-icons">
          <?php


$field = get_field_object('field_2');
$colors = $field['value'];

// Display labels.
if( $colors ): ?>
    <?php foreach( $colors as $color ): ?>
          <?php 
          echo '<li class="list-inline-item">
          ' . $field['choices'][ $color ] . '
          </li>';
          
          // echo $field['choices'][ $color ]; ?>
    <?php endforeach; ?>
<?php endif; ?>
</ul>
         
        <?php 
            endwhile; 
            ?>
            
        <?php
        wp_reset_postdata();
        ?>
        <div class="subheading mb-3">Co robiłem dotychczas:</div>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            API dla stron, np. API Airly do autorskiego CMS'a, API do WP z importem eksportem danych, integracja SMSAPI z systemem do głosowania</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Drobne poprawki do stron www takie jak: przejście z Google Maps na Leaflet lub Open Street Map w systemie CMS, poprawki dot. responsywności</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Budowa stron intranetowych i ich dostosowanie do potrzeb użytkowników, budowa strony https://sds.um.pulawy.pl/ oraz tej na której się znajdujesz (oparta o template bootstrapa z underscores na silniku WP - ACF, CPT)</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Tworzenie wtyczek dla WP - inspiracje głównie pobierane z grup FB</li>
        </ul>
      </div>
    </section>

<!-- tu konczymy 
-->

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Skills</h2>
        
        
      </div>

    </section>