<section class="courses-section">
    <div class="bg-pattern map-overlay-bg"></div>
    <div class="bg-pattern map-contour-bg"></div>
    <div class="bg-pattern compass-rose-bg"></div>

    <div class="container">
        <div class="courses-wrapper">
            <div class="courses-left">
                <?php if( get_field('courses_title') ): ?>
                    <h2 class="courses-title"><?php the_field('courses_title'); ?></h2>
                <?php endif; ?>
            </div>

            <div class="courses-right">
                <?php if( have_rows('courses_list') ): ?>
                    <ul class="courses-list">
                        <?php while( have_rows('courses_list') ): the_row(); 
                            $year = get_sub_field('course_year');
                            $name = get_sub_field('course_name');
                            $link = get_sub_field('course_link'); ?>
                            <li>
                                <?php if( $link ): ?>
                                    <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener">
                                <?php else: ?>
                                    <a href="#">
                                <?php endif; ?>
                                    <?php if( $year ): ?>
                                        <span class="course-year"><?php echo esc_html($year); ?></span>
                                    <?php endif; ?>
                                    <?php if( $name ): ?>
                                        <span class="course-name"><?php echo wp_kses_post(nl2br($name)); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
