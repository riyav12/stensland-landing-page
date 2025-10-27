<section class="qualifications-section">
    <div class="container qualifications-content">

        <?php if( get_field('qualifications_title') ): ?>
            <div class="qualifications-title-wrap">
                <h2 class="qualifications-title">
                    <?php the_field('qualifications_title'); ?>
                </h2>
            </div>
        <?php endif; ?>

        <?php if( have_rows('qualifications_list') ): ?>
            <div class="qualifications-list">
                <?php 
                $total = count(get_field('qualifications_list'));
                $i = 0;
                while( have_rows('qualifications_list') ): the_row();
                    $i++;
                    $item = get_sub_field('qualification_item'); ?>
                    <span class="qual-item"><?php echo esc_html($item); ?></span>
                    <?php if($i < $total): ?>
                        <span class="separator">|</span>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>
</section>
