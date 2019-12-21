<?php get_header(); ?>

<div class="container">

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


<?php
$banniere= get_field('banner_image_de_fond');
?>
<!--Code html-->
<section class="section-1" style="bakground-image: url(<?php echo $banniere['url'];?>)">
  <span><?php the_field('banner_baseline'); ?></span>
  <p id="txt1" class="maj"><?php the_field('banner_titre_marron');?></p>
  <p id="txt2" class="maj"><?php the_field('banner_titre_vert');?></p>
  <input type="submit" value=<?php the_field('banner_bouton');?>/>
</section>

<section class="section-2">
  <div class="container">
    <h1 class="maj titre"><?php the_field('conference_titre');?></h1>
    <p><?php the_field('conference_texte');?></p>
  </div>
</section>

<section class="section-3">
 <!-- Image de fond -->
</section>

<section class="section-4">
  <h1 class="maj titre"><?php the_field('programme_titre');?></h1>
  <div id="tableau">

    <div id="firstCol">
      <h3 class="maj"><?php the_field('programme_1ere_colonne');?></h3>
  
      <div><span><span class="gras">8:30 </span>Introduction par Christophe Fondation</span></div>
      <div><span><span class="gras">9:00 </span>Wim de Vries Wageningen University</span></div>
      <div><span><span class="gras">9:45 </span>Introduction par Christophe Fondation</span></div>
      <div><span><span class="gras">10:15 </span>Armando Perrez Cueto Copenhagen University</span></div>
    <div><span><span class="gras">10:45 </span> Cofee break</span></div>
  </div>
     
    <div id="seconCol">
      <h3 class="maj"><?php the_field('programme_2eme_colonne');?></h3>
      <div><span><span class="gras">11:15 </span>Jacynte Lafrenière du Prix de Recherche</span></div>
      <div><span><span class="gras">11:35 </span>Le projet EPICALIM de la fondation</span></div>
      <div><span><span class="gras">12:00 </span>Céremonue</span></div>
      <div><span><span class="gras">12:30 </span>Lunch</span></div>
    </div>
  </div>
  <div><input class="maj" type="submit" value="s'inscrire aux rencontres"/></div>
  <img id="imgProgramme" src="wp-content/themes/my-theme/assets/img/programme.png" alt="programme">

</section>

<section class="section-5">
   <h1 class="maj titre"><?php the_field('orateur_titre');?></h1>
   <p>Lorem ipsum</p>
   <div id="orateur">
    <?php if(have_rows('orateur')): ?>
        <?php while(have_rows('orateur')): the_row(); ?>
      <div>
          <img src="<?php the_sub_field('orateur_img'); ?>"/>
          <div class="personne">
            <span><?php the_sub_field('orateur_titre'); ?></span>
            <span><?php the_sub_field('orateur_desc'); ?></span>
            <div>
              <img src="" alt="">
              <span class="maj">lire la vidéo</span>
            </div>
         </div>
       </div>
       <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>

<section class="section-6">
  <div id="vert">
    <div>
    <img src="" alt="gps">
    <span>Square Brussel Mont des Arts 10000 Bruxelles Belgique</span>
    </div>
  </div>
</section>
<?php

//the_field('banner_baseline');
  }
}
?>

</div>

<?php get_footer(); ?>
