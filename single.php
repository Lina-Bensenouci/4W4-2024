
<?php get_header();?>
    <div id="accueil" class="global">
      <section>
        <h3>Destinations de voyage</h3>
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
          if(have_posts()): the_post();
          $titre = get_the_title();
          ?>
          <div class="carte">
            <h2><?php the_title() ?></h2>
            <p><?php the_content(); ?></p>
        </div>
        <?php endif; ?>
      </div>
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