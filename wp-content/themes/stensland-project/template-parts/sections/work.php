<?php
// Get all ACF fields
$work_title    = get_field('work_title');
$work_desc     = get_field('work_desc');

$work_btn1_text = get_field('work_btn1_text');
$work_btn1_link = get_field('work_btn1_link');

$work_btn2_text = get_field('work_btn2_text');
$work_btn2_link = get_field('work_btn2_link');

$work_btn3_text = get_field('work_btn3_text');
$work_btn3_file = get_field('work_btn3_file'); 
?>

<section class="work-section">
    <div class="container">

        <!-- Section Header -->
        <div class="work-header">
            <h2 class="work-title"><?php echo $work_title ? esc_html($work_title) : 'Work Title Here'; ?></h2>
            <p class="work-desc"><?php echo $work_desc ? esc_html($work_desc) : 'Work description goes here.'; ?></p>
        </div>

        <!-- Buttons -->
        <div class="work-buttons">
            <!-- Button 1 -->
            <?php if ($work_btn1_text && $work_btn1_link): ?>
                <a href="<?php echo esc_url($work_btn1_link); ?>" class="work-btn">
                    <span><?php echo esc_html($work_btn1_text); ?></span>
                    <span class="arrow">
                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L12 4M12 4H6M12 4V10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </a>
            <?php endif; ?>

            <!-- Button 2 -->
            <?php if ($work_btn2_text && $work_btn2_link): ?>
                <a href="<?php echo esc_url($work_btn2_link); ?>" class="work-btn">
                    <span><?php echo esc_html($work_btn2_text); ?></span>
                    <span class="arrow">
                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L12 4M12 4H6M12 4V10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </a>
            <?php endif; ?>

            <!-- Button 3 (Download) -->
            <?php if ($work_btn3_text && $work_btn3_file && is_array($work_btn3_file) && isset($work_btn3_file['url'])): ?>
                <a href="<?php echo esc_url($work_btn3_file['url']); ?>" class="work-btn" download>
                    <span><?php echo esc_html($work_btn3_text); ?></span>
                    <span class="arrow">
                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L12 4M12 4H6M12 4V10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </a>
            <?php endif; ?>
        </div>

    </div>
</section>
