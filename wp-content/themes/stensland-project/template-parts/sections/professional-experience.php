<?php
/**
 * Professional Experience Block Template
 */
$experiences = get_field('experience_items');
if (!$experiences) return;
?>

<section class="professional-experience-section">
  <div class="professional-experience-container">
    
    <!-- Left Heading -->
    <div class="experience-left">
      <h2>Professional<br>Experience</h2>
    </div>

    <!-- Right Timeline -->
    <div class="experience-right">
      <?php
      $count = 0;
      foreach ($experiences as $index => $exp):
          $count++;
          $visible_attr = $count <= 3 ? '' : 'style="display:none;"';
      ?>
        <div 
          class="experience-item" 
          data-index="<?php echo esc_attr($index); ?>" 
          <?php echo $visible_attr; ?>
        >
          <h3><?php echo esc_html($exp['year_range']); ?></h3>
          <p><?php echo nl2br(esc_html($exp['description'])); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

