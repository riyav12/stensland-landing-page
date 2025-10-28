<section class="standards-section">
    <div class="container">

        <!-- Section Header -->
        <div class="standards-header">
            <h2 class="section-title standards-title">
                <?php echo esc_html( get_field('standards_heading') ); ?>
            </h2>
            <p class="standards-description">
                <?php echo esc_html( get_field('standards_description') ); ?>
            </p>
        </div>

        <!-- Standards Grid -->
        <div class="standards-grid">
            <?php if( have_rows('standards_items') ): 
                $count = 0;
                $total_items = count(get_field('standards_items'));
                while( have_rows('standards_items') ): the_row(); 
                    $count++;
                    $icon = get_sub_field('icon'); 
                    $title = get_sub_field('title');
            ?>
                <div class="standards-item">
                    <div class="item-icon">
                        <?php if( $icon ): ?>
                            <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($title); ?> icon">
                        <?php endif; ?>
                    </div>

                    <h3 class="item-title"><?php echo esc_html($title); ?></h3>

                    <?php if( have_rows('details') ): ?>
                        <ul class="item-details">
                            <?php while( have_rows('details') ): the_row(); 
                                $detail_item = get_sub_field('detail_item');
                            ?>
                                <li><?php echo esc_html($detail_item); ?></li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if ($count < $total_items - 1): ?>
                        <div class="item-separator"></div>
                    <?php endif; ?>

                </div>
            <?php endwhile; endif; ?>
        </div>

    </div>
</section>
