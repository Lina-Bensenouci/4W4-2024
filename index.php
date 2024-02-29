<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme GR1</title> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Foldit:wght@200;300&family=Playfair+Display:wght@400;500;600;700&family=Prompt:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&family=Protest+Riot&display=swap" rel="stylesheet">
  </head>
  <body>
    <div id="entete" class="global">
      <header class="entete__header">
        <h1>Thème du groupe #1 (h1)</h1>
        <h2>4W4 - Conception d'interface <span>et développement web</span></h2>
        <h3>TIM - Collège de Maisonneuve</h3>
        <button>Événements</button>
      </header>
      <div class = "vague">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style = "fill: var(--couleur-arriere-accueil)"></path>
      </svg>
      </div>
    </div>
    <div id="accueil" class="global">
      <section>
        <div class="cours">
        <h2>Accueil</h2>
        <h3>Produits(h3)</h3>
        <?php
        /*
          if(have_posts()){
            while(have_posts()){
              the_post();
              the_title('<h4>','</h4>');
              echo wp_trim_words(get_the_content(),30);
            }
          }
        */
        if(have_posts()):
          while(have_posts()): the_post();?>
          <div class="carte">
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words(get_the_content(),20); ?></p>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      </section>
    </div>
    <div id="evenement" class="global diagonal">
      <section>
        <h2>Événement</h2>
        <h4>Horaire(h4)</h4>
        <h4>Thème du jour(h4)</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      </section>
    </div>
    <div id="galerie" class="global">
      <section>
        <h2>Galerie</h2>
        <h3>Photo du jour(h3)</h3>
        <a href="https://www.lipsum.com/">Lorem Ipsum</a> is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industryty.
      </section>
    </div>
    <div id="footer" class="global">
      <footer>
        <h2>Footer</h2>
        <div>
        <h5>Réseaux(h5)</h5>
        <h6>Adresse(h6)</h6>
        <button>Page</button>
      </div>
      </footer>
      <div class = "vague">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style = "fill: var(--couleur-arriere-accueil)"></path>
      </svg>
      </div>
    </div>
  </body>
</html>