<section class="client-reviews-section">
  <div class="container">
    <div class="">

      <!-- Left: Heading -->
      <div class="client-reviews-left">
        <?php $heading = get_field('client_reviews_heading'); ?>
        <h2 class="client-reviews-title">
          <?php echo $heading ? nl2br( esc_html($heading) ) : 'Client Reviews'; ?>
        </h2>
      </div>

      <!-- Right: Swiper Slider -->
      <div class="client-reviews-right">
        <div class="swiper client-reviews-slider">
          <div class="swiper-wrapper">
            <?php if( have_rows('client_reviews') ): ?>
              <?php while( have_rows('client_reviews') ): the_row(); 
                $review_text  = get_sub_field('client_review_text');
                $author_image = get_sub_field('client_review_author_image');
                $author_name  = get_sub_field('client_review_author_name');
                $author_role  = get_sub_field('client_review_author_role');
              ?>
              <div class="swiper-slide client-review-item">
                <p class="client-review-text"><?php echo esc_html($review_text); ?></p>
                <div class="client-review-author">
                  <?php if( $author_image ): ?>
                    <img src="<?php echo esc_url($author_image['url']); ?>" alt="<?php echo esc_attr($author_name); ?>" class="client-author-img">
                  <?php endif; ?>
                  <div class="client-author-info">
                    <h4 class="client-author-name"><?php echo esc_html($author_name); ?></h4>
                    <p class="client-author-role"><?php echo esc_html($author_role); ?></p>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>

        
        <div class="client-review-arrows">
          <div class="client-review-prev" aria-hidden="true">&#8592;</div>
          <div class="client-review-next" aria-hidden="true">&#8594;</div>
        </div>
      </div> <!-- end .client-reviews-right -->

    </div> <!-- end .client-reviews-wrapper -->

  </div> <!-- end .container -->

  <?php 
    $pattern_image = get_field('client_reviews_pattern_image');
    if( $pattern_image && is_array($pattern_image) && isset($pattern_image['url']) ): ?>
      <img src="<?php echo esc_url($pattern_image['url']); ?>" alt="" class="review-pattern">
  <?php endif; ?>
</section>
