<section class="audits-section">
  <div class="audits-container">

    <!-- Top row: Heading + Text -->
    <div class="audits-header">
      <?php 
        $title = get_field('audits_title');
        $text  = get_field('audits_text');
      ?>
      <h2 class="audits-title">
        <?php echo $title ? esc_html($title) : 'Audits Title Here'; ?>
      </h2>
      <p class="audits-text">
        <?php echo $text ? esc_html($text) : 'Audits description goes here.'; ?>
      </p>
    </div>

    <!-- Bottom row: Image + Content -->
    <div class="audits-content">

      <!-- Left side: Image -->
      <div class="audits-image-wrap">
        <?php 
          $image = get_field('audits_image'); 
          if( !empty($image) ):
        ?>
          <img src="<?php echo esc_url($image); ?>" alt="Audit Image" class="audits-image">
        <?php endif; ?>
      </div>

      <!-- Right side: Audits List -->
      <div class="audits-right">
        <div class="audit-grid">
          <?php if( have_rows('audit_items') ): ?>
            <?php while( have_rows('audit_items') ): the_row(); 
              $year = get_sub_field('year');
              $company = get_sub_field('company');
              $description = get_sub_field('description');
              $is_last = get_sub_field('is_last_item');
            ?>
              <div class="audit-item">
                <div class="audit-year"><?php echo $year ? esc_html($year) : 'Year'; ?></div>
                <h3 class="audit-company"><?php echo $company ? esc_html($company) : 'Company Name'; ?></h3>
                <p class="audit-desc"><?php echo $description ? esc_html($description) : 'Description goes here.'; ?></p>
                <?php if( !$is_last ): ?>
                  <hr>
                <?php endif; ?>
              </div>
            <?php endwhile; ?>
          <?php else: ?>
            <p>No audit items added yet.</p>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>
</section>
