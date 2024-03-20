
<?php get_header();?>
<h1>INDEX.PHP</h1>
    <div id="entete" class="global">
      <section class="hero">
        <h1>Thème du groupe #1 (h1)</h1>
        <h2>4W4 - Conception d'interface <span>et développement web</span></h2>
        <h3>TIM - Collège de Maisonneuve</h3>
        <button>Événements</button>
      </section>
      <?php get_template_part('gabarits/vague');?>
      <!--vague-->
    </div>
    <div id="accueil" class="global">
      <section>
        <h2>Accueil</h2>
        <h3>Liste des cours</h3>
        <div class="cours">
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
          while(have_posts()): the_post();
          $titre = get_the_title();
          ?>
          <div class="carte">
            <h3><?php echo $titre; ?></h3>
            <p><?php the_content(); ?></p>
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
      <?php get_template_part('gabarits/vague');?>
    </div>
  </body>
</html>