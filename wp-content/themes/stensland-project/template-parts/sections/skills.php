<section class="skills-section">
    <div class="container">

        <div class="skills-header">
            <h2 class="skills-title"><?php the_field('skills_title'); ?></h2>
            <p class="skills-desc"><?php the_field('skills_description'); ?></p>
        </div>

        <div class="skills-logos-wrapper">
            <div class="skills-logos">
                <?php if( have_rows('skills_logos') ):
                    while( have_rows('skills_logos') ): the_row();
                        $logo = get_sub_field('logo_image');
                        $alt = get_sub_field('logo_alt');
                ?>
                    <img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr($alt); ?>">
                <?php endwhile; endif; ?>
            </div>
        </div>

    </div>
</section>
