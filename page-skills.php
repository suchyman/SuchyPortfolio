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

        

         <div class="subheading mb-3">Nie mogę powiedzieć że coś znam na 100%. Ale mogę wstawić fajne ikonki do technologii w których coś robiłem:</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
          <i class="fab fa-php"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
         
         
          <div class="subheading mb-3"><p>A te fajne ikonki przedstawiają technologie które chciałbym poznać, ale nie starcza mi czasu:</p></div>

          <li class="list-inline-item">
          <i class="fab fa-laravel"></i>
          </li>
          <li class="list-inline-item">
          <i class="fab fa-symfony"></i>
          </li>
         
          
        </ul>

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
        
        <?php
    global $post;
 

    $loop = new WP_Query( array( 'post_type' => 'skills_cpt', 'posts_per_page' => -1 ) ); 

    while ( $loop->have_posts() ) : $loop->the_post(); 
    ?>
          <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php the_title(); ?>
            </h3>
            <div class="subheading mb-3"><?php the_field('stanowisko'); ?></div>
            <?php the_content(); ?>
          </div>
          <?php


$field = get_field_object('field_2');
$colors = $field['value'];

// Display labels.
if( $colors ): ?>
<ul>
    <?php foreach( $colors as $color ): ?>
        <li><?php echo $field['choices'][ $color ]; ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
          
        </div>
            <?php 
            endwhile; 
            ?>
            
        <?php
        wp_reset_postdata();
    
    ?>

      </div>

    </section>