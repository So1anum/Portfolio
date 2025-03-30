<?php get_header(); ?>
<div class="single-portfolio">
    <h1><?php the_title(); ?></h1>

    <?php
    if (has_post_thumbnail()) {
        the_post_thumbnail('large');
    }
    ?>

    <div class="portfolio-content">
        <?php the_content(); ?> <!-- Affiche le texte que tu as mis dans l’éditeur -->
    </div>

    <div class="portfolio-infos">
        <p><strong>Client :</strong> <?php the_field('client'); ?></p>
        <p><strong>Date :</strong> <?php echo get_field('date'); ?></p>
        <p><strong>Lien :</strong> <a href="<?php the_field('lien_du_projet'); ?>" target="_blank">Voir le projet</a></p>
    </div>

    <div class="portfolio-gallery">
        <?php
        $images = get_field('galerie_dimages');
        if ($images) :
            ?>
            <h2>Galerie</h2>
            <div class="gallery-grid">
                <?php foreach ($images as $image) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
