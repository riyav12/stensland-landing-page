<?php
$hero_title = get_field('hero_title');
$hero_description = get_field('hero_description');
$hero_email_link = get_field('hero_email_link');
$hero_linkedin_link = get_field('hero_linkedin_link');
$hero_phone_link = get_field('hero_phone_link');
$hero_bg_image = get_field('hero_bg_image');
?>

<section class="hero-section" 
    <?php if ($hero_bg_image) : ?> 
        style="background-image: url('<?php echo esc_url($hero_bg_image); ?>'); background-size: cover; background-position: center;"
    <?php endif; ?>
>
    <div class="container hero-content">
        <div class="hero-left">
            <h1 class="hero-title">
                <?php echo esc_html($hero_title); ?>
            </h1>
            <a href="#footer" class="scroll-down">
                Scroll down <span class="arrow-down">&#8595;</span>
            </a>
        </div>

        <div class="hero-right">
            <p class="hero-description">
                <?php echo esc_html($hero_description); ?>
            </p>
            <div class="social-icons">
                <a href="<?php echo esc_url($hero_email_link); ?>" class="social-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.png" alt="Email">
                </a>
                <a href="<?php echo esc_url($hero_linkedin_link); ?>" class="social-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt="LinkedIn">
                </a>
                <a href="<?php echo esc_url($hero_phone_link); ?>" class="social-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.png" alt="Phone">
                </a>
            </div>
        </div>
    </div>
</section>
