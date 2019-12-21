<?php get_header(); ?>

<div class="container error">
  <p class="erreur">404</p>
  <p class="erreur">Erreur page introuvable, Veuillez réessayer</p>
</div>
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post();

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();

?>
<!--Code html-->


<?php

//the_field('banner_baseline');
  }
}
?>


<?php get_footer(); ?>
