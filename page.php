<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SuPort
 */

get_header();
?>







<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Portfolio - Jacek Ochal</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/ken.png" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <?php
        // wp_nav_menu( array(
        //     'theme_location'    => 'menu-1',
        //     'depth'             => 2,
        //     'container'         => 'ul',
        //     'container_class'   => 'collapse navbar-collapse',
        //     'container_id'      => 'bs-example-navbar-collapse-1',
        //     'menu_class'        => 'nav navbar-nav',
        //     'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        //     'walker'            => new Walker_Nav_Menu(),
        // ) );
        ?>
    
    <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#start">Start</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Doświadczenie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#why">Dlaczego ja?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Skillsy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#products">Moje dzieła</a>
        </li>
              
      </ul>
    </div>

  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="start">
      <div class="w-100">
        <h1 class="mb-0"><?php echo get_bloginfo( 'name' ) . ' -';?>
          <span class="text-primary"><?php echo get_bloginfo( 'description' ) ?></span>
        </h1>
        <div class="subheading mb-5"><?php echo get_theme_mod( 'cd_start_text_text_adres', 'Przykładowa treść' ) ?> · e-mail: ·
          <a href="mailto:<?php echo get_theme_mod( 'cd_start_text_text_mail', 'Przykładowa treść' ) ?>"><?php echo get_theme_mod( 'cd_start_text_text_mail', 'Przykładowa treść' ) ?></a>
        </div>
        <?php echo get_theme_mod( 'cd_start_text_text', 'Przykładowa treść' ) ?>

        <div class="social-icons">
          
          <a href="https://github.com/suchyman/">
            <i class="fab fa-github"></i>
          </a>
          
          <a href="https://www.facebook.com/profile.php?id=100014256972108">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="tel:695188954">
            <i class="fas fa-phone"></i>
          </a>

        </div>
      </div>
    </section>

    <?php
require_once('page-exp.php')
?>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="why">
      <div class="w-100">
        <h2 class="mb-5">O mnie</h2>
        <div class="subheading mb-3">Słowem wstępu</div>
        <p>Nazywam się Jacek Ochal, jestem informatykiem (a przynajmniej tak mówią) od ponad 10 lat. Zajmuje się głównie hepldeskiem i administracją stron www oraz różnej maści programów/systemów używanych w UM i w jednostkach podległych. Po tak długim czasie, przy takiej powarzalności problemów oraz braku rozwoju postanowiłem się przekwalifikować na web developera z naciskiem na backend.   </p>
        <p>W miarę możliwości staram się jak najwięcej <a href="https://github.com/suchyman">ćwiczyć PHP</a> oraz frameworki z nim związane. Niestety, ale moja teraźniejsza praca nie pozwala mi na to, a wykorzystanie narzędzi które chciałbym <a class="js-scroll-trigger" href="#skills">poznać</a> nie znajdują swojego zastosowania w obecnych obowiązkach.</p>
        <p>Chciałbym bardzo poznać nowe techniki tworzenia stron, systemów webowych pod okiem kogoś wykwalifikowanego. Miałem okazję "liznąć" trochę projektów komercyjnych współpracując z prywatną firmą. Wtedy też zacząłem pisać wtyczki do Wordpress'a, zazwyczaj były to API do importu i eksportu w e-commerce.</p>
        <p>W razie pytań/propozycji zapraszam do konatku, a najchętniej zaprezentowałbym się na jakiejś rozmowie kwalifikacyjnej :)</p>
      </div>
        
      </section>
      <?php
require_once('page-skills.php')
?>
    <hr class="m-0">

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
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-wordpress"></i>
          </li>
          <li class="list-inline-item">
          <i class="fab fa-joomla"></i>
          </li>
          <li class="list-inline-item">
          <i class="fab fa-drupal"></i>
          </li>
          <li class="list-inline-item">
          <i class="fas fa-atom"></i>
          </li>
          <li class="list-inline-item">
          <i class="fab fa-linux"></i>
          </li>
          <li class="list-inline-item">
          <i class="fab fa-docker"></i>
          </li>
         
          <div class="subheading mb-3"><p>A te fajne ikonki przedstawiają technologie które chciałbym poznać, ale nie starcza mi czasu:</p></div>

          <li class="list-inline-item">
          <i class="fab fa-laravel"></i>
          </li>
          <li class="list-inline-item">
          <i class="fab fa-symfony"></i>
          </li>
          <li class="list-inline-item">
          <i class="fab fa-java"></i>
          </li>
          <li class="list-inline-item">
          <i class="fab fa-js"></i>
          </li>
          <li class="list-inline-item">
          <i class="fab fa-vuejs"></i>
          </li>
          
          <li class="list-inline-item">
            <i class="fab fa-npm"></i>
          </li>
          
          <li class="list-inline-item">
            <i class="fab fa-angular"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-react"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-node-js"></i>
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

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="products">
      <div class="w-100">
        <h2 class="mb-5">Moje wtyczki:</h2>
        <div class="subheading mb-3">Krótka prezentacja moich skromnych wtyczek:</div>
        <p> <i class="fas fa-angle-double-right"></i> RandomQuote <i class="fas fa-angle-right"></i> Wtyczka do Wordpress za pomocą której wytworzymy widget na stronę z losowymi cyatatami. Istnieją 2 opcje: cytat jednorazowy lub dzienny. Jednorazowy, losuje cytat z bazy wcześniej wprowadzonych cytatów za każdym razem inny. Dzienny, wylosuje raz dziennie cytat i będzie nie zmienny do ponownego wejścia na stronę następnego dnia. Wykorzystane: PHP, CPT</p>
        <p> <i class="fas fa-angle-double-right"></i> SMSSender <i class="fas fa-angle-right"></i> Wtyczka do Wordpress tworzy shortcode, który umożliwia wysyłkę masową SMSów z zainportowanego pliku .xlsx z poziomu panelu administracyjnego. Wykorzystane: PHP, CPT, SMSAPI</p>
        <p> <i class="fas fa-angle-double-right"></i> Authores <i class="fas fa-angle-right"></i> Mini widget na panel administracyjny WP pokazujący sumy artykułów dodanych przez użytkowników </p>
        <p> <i class="fas fa-angle-double-right"></i> Rzezba <i class="fas fa-angle-right"></i> Ankieta napisana na szybko w PHP na potrzeby służbowe. Formularz HTML + autoryzacja głosu przez SMS + zabezpieczenie powtórnego głosowania z tego samego numeru telefonu</p>
        <p> <i class="fas fa-angle-double-right"></i> APIopenweathermapWPWidget<i class="fas fa-angle-right"></i> Widget dla WP za pomocą którego możemy wyświetlić aktualny stan pogody z Open Weather Map dla adresu IP odwiedzającego </p></div>
        
      </section>
      
    

  </div>

  


<?php
// get_sidebar();
get_footer();
