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
          $visible = $count <= 3 ? '' : 'style="display:none;"';
          $clickable = ($count === 3) ? 'clickable' : '';
      ?>
        <div 
          class="experience-item <?php echo $clickable; ?>" 
          data-index="<?php echo $index; ?>" 
          <?php echo $visible; ?>
        >
          <h3><?php echo esc_html($exp['year_range']); ?></h3>
          <p><?php echo nl2br(esc_html($exp['description'])); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const items = document.querySelectorAll(".experience-item");
  let visibleCount = 3;

  function makeNextClickable() {
    items.forEach(item => item.classList.remove("clickable")); // remove from all
    if (items[visibleCount - 1]) {
      const nextClickable = items[visibleCount - 1];
      nextClickable.classList.add("clickable");
      nextClickable.addEventListener("click", handleClick);
    }
  }

  function handleClick() {
    const nextItem = items[visibleCount];
    if (nextItem) {
      nextItem.style.display = "block";
      nextItem.style.animation = "fadeIn 0.8s ease";
      visibleCount++;
      makeNextClickable();
    }
    this.classList.remove("clickable");
    this.removeEventListener("click", handleClick);
  }

  makeNextClickable();
});
</script>
