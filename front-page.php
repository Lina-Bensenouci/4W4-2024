
<?php get_header();?>
    <div id="entete" class="global clr-agencement-primaire">
      <section class="hero">
        <h1><?php echo get_bloginfo("name")?></h1>
        <h2><?php echo get_bloginfo("description")?></h2>
        <h3>Voyagez au Gré de Votre Imagination</h3>
        <button>Événements</button>
      </section>
      <?php get_template_part('gabarits/vague');?>
      <!--vague-->
    </div>
    <div id="accueil" class="global">
      <section>
        <h2>Accueil</h2>
        <h3>Destinations de voyage</h3>
        <div class="cours">
        <?php
        if(have_posts()):
          while(have_posts()): the_post();
          $titre = get_the_title();
          ?>
          <div class="carte">
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words(get_the_content(),10); ?></p>
            <?php the_category() ?>
            <a href="<?php the_permalink(); ?>" >Plus</a>
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
    <?php get_footer() ?>
   