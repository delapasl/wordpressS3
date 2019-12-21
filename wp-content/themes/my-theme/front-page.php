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
$section3 = get_field('programme_banniere');
?>
<!--Code html-->
<section class="section-1" style="background-image: url('<?php echo $banniere;?>')">
  <span><?php the_field('banner_baseline'); ?></span>
  <p id="txt1" class="maj"><?php the_field('banner_titre_marron');?></p>
  <p id="txt2" class="maj"><?php the_field('banner_titre_vert');?></p>
  <a target ="_blank" href=<?php the_field('banner_bouton_lien');?> ><input type="submit" value=<?php the_field('banner_bouton');?>/></a>
</section>

<section class="section-2">
  <div class="container">
    <h1 class="maj titre"><?php the_field('conference_titre');?></h1>
    <p><?php the_field('conference_texte');?></p>
  </div>
</section>

<section class="section-3" style="background-image: url('<?php echo $section3;?>')">
 <!-- Image de fond -->
</section>

<section class="section-4">
  <h1 class="maj titre"><?php the_field('programme_titre');?></h1>
  <div id="tableau">

    <div id="firstCol">
      <h3 class="maj"><?php the_field('programme_1ere_colonne');?></h3>
   <?php if(have_rows('programme_desscription')): ?>
        <?php while(have_rows('programme_desscription')): the_row(); ?>
      <div><span><span class="gras"><?php the_sub_field('heure'); ?> </span><?php the_sub_field('description'); ?></span></div>
        <?php endwhile; ?>
      <?php endif; ?>
     <!-- <div><span><span class="gras">8:30 </span>Introduction par Christophe Fondation</span></div>
      <div><span><span class="gras">9:00 </span>Wim de Vries Wageningen University</span></div>
      <div><span><span class="gras">9:45 </span>Introduction par Christophe Fondation</span></div>
      <div><span><span class="gras">10:15 </span>Armando Perrez Cueto Copenhagen University</span></div>
    <div><span><span class="gras">10:45 </span> Cofee break</span></div>-->
  </div>
     
    <div id="seconCol">
      <h3 class="maj"><?php the_field('programme_2eme_colonne');?></h3>
      <?php if(have_rows('programme_heure')): ?>
        <?php while(have_rows('programme_heure')): the_row(); ?>
      <div><span><span class="gras"><?php the_sub_field('heure_programme'); ?> </span><?php the_sub_field('description_programme'); ?></span></div>
        <?php endwhile; ?>
      <?php endif; ?>
      <!--<div><span><span class="gras">11:35 </span>Le projet EPICALIM de la fondation</span></div>
      <div><span><span class="gras">12:00 </span>Céremonue</span></div>
      <div><span><span class="gras">12:30 </span>Lunch</span></div>-->
    </div>
  </div>
  <div><a href="<?php the_field('programme_btn_lien');?>"><input class="maj" type="submit" value="<?php the_field('programme_btn_txt');?>"/></a></div>
  <img id="imgProgramme" src="<?php the_field('programme_img');?>" alt="programme">

</section>

<section class="section-5">
   <h1 class="maj titre"><?php the_field('orateur_titre');?></h1>
   <p>Lorem ipsum</p>
   <div id="orateur">
    <?php if(have_rows('orateur')): ?>
        <?php while(have_rows('orateur')): the_row(); ?>
      <div>
          <img src="<?php the_sub_field('orateur_img');?>"/>
          <div class="personne">
            <span><?php the_sub_field('orateur_titre'); ?></span>
            <span><?php the_sub_field('orateur_desc'); ?></span>
            <div>
              <img class="icon-video" src="<?php the_sub_field('orateur_btn_img'); ?>" alt="">
              <a href="<?php the_sub_field('orateur_btn_lien'); ?>"><span class="maj"><?php the_sub_field('orateur_btn_txt'); ?></span></a>
            </div>
         </div>
       </div>
       <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>
   <h1 class="maj titre"><?php the_field('info_pratique_titre');?></h1>  
<section class="section-6">
  <div id="vert">
    <div class="text">
      <img src="<?php the_field('info_pratiques_iconegps');?>" alt="gps">
      <span><?php the_field('info_texte1'); ?></span>
    </div>
    <div class="trait">______________________</div>
    <div class="text">
      <img src="<?php the_field('info__pratique_iconhorloge');?>" alt="gps">
      <span><?php the_field('info_texte2'); ?></span>
    </div>
    <div class="trait">______________________</div>
    <div class="text">
      <img src="<?php the_field('info_pratique_icon_couvert');?>" alt="gps">
      <span><?php the_field('info_texte3'); ?></span>
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
