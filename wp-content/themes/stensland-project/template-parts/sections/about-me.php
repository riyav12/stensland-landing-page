<?php
/**
 * About Me Section (ACF Block)
 * Template Path: template-parts/sections/about-me.php
 */

// Load field values
$heading             = get_field('about_me_heading');
$text                = get_field('about_me_text');
$image               = get_field('about_me_image');
$exp_number          = get_field('about_me_experience_number');
$exp_text            = get_field('about_me_experience_text');
$services            = get_field('about_me_services');
?>

<section class="about-me-section">
  <div class="about-me-container">

    <!-- Left: Heading & Text -->
    <div class="about-me-text" style="margin-top:-425px;">
      <?php if ($heading): ?>
        <h2><?php echo esc_html($heading); ?></h2>
      <?php endif; ?>

      <?php if ($text): ?>
        <p><?php echo esc_html($text); ?></p>
      <?php endif; ?>
    </div>

    <!-- Center: Image + Experience Box -->
    <div class="about-me-image">
      <?php if ($image): ?>
        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($heading); ?>">
      <?php endif; ?>

      <?php if ($exp_number || $exp_text): ?>
        <div class="experience-box">
          <?php if ($exp_number): ?>
            <h3><?php echo esc_html($exp_number); ?></h3>
          <?php endif; ?>
          <?php if ($exp_text): ?>
            <p><?php echo esc_html($exp_text); ?></p>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>

    <!-- Right: Services List -->
    <div class="about-me-services" style="margin-top: 395px;">
      <?php if ($services): ?>
        <ul>
          <?php foreach ($services as $service): ?>
            <?php if (!empty($service['service_item'])): ?>
              <li><?php echo esc_html($service['service_item']); ?></li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>

  </div>
</section>
