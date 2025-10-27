<?php
/**
 * Education Section (ACF Block)
 * Template Path: template-parts/sections/education.php
 */

$background_image = get_field('education_background');
$education_items  = get_field('education_items');
?>

<section class="education-section" style="background-image: url('<?php echo esc_url($background_image ?: get_template_directory_uri() . '/assets/images/education-bg.jpg'); ?>');">
  <div class="education-overlay">
    <div class="container">
      <div class="education-header">

        <h2 class="education-title">Education</h2>

        <?php if ($education_items): ?>
          <div class="education-timeline">
            <?php foreach ($education_items as $item): ?>
              <div class="education-item">
                <?php if (!empty($item['year'])): ?>
                  <h3 class="education-year"><?php echo esc_html($item['year']); ?></h3>
                <?php endif; ?>

                <?php if (!empty($item['degree'])): ?>
                  <p class="education-degree"><?php echo esc_html($item['degree']); ?></p>
                <?php endif; ?>

                <?php if (!empty($item['school'])): ?>
                  <p class="education-school"><?php echo esc_html($item['school']); ?></p>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
