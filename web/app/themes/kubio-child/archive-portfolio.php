<?php get_header(); ?>
<h1>Mes Réalisations</h1>
<div class="portfolio-grid">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="portfolio-item">
            <a href="<?php the_permalink(); ?>">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                } else {
                    echo '<img src="https://via.placeholder.com/300" alt="Image par défaut">';
                }
                ?>
                <h2><?php the_title(); ?></h2>
            </a>
        </div>
    <?php endwhile; else: ?>
        <p>Aucune réalisation pour le moment.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
