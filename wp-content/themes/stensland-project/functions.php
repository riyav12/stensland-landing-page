<?php
function stensland_enqueue_assets() {
    wp_enqueue_style('stensland-main', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime(get_template_directory() . '/assets/css/main.css'));
    wp_enqueue_script('stensland-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/main.js'), true);
}
add_action('wp_enqueue_scripts', 'stensland_enqueue_assets');


// Register Hero ACF Block
function register_acf_hero_block() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('Hero section with title, description, social links and background image.'),
            'render_template'   => get_template_directory() . '/template-parts/sections/hero.php',
            'category'          => 'layout',
            'icon'              => 'cover-image',
            'keywords'          => array('hero','banner','top'),
            'mode'              => 'preview',
        ));
    }
}
add_action('acf/init', 'register_acf_hero_block');

// Register Skills Block
add_action('acf/init', function() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'skills',
            'title'             => __('Skills'),
            'description'       => __('A section showing skills logos with continuous scroll.'),
            'render_template'   => 'template-parts/sections/skills.php',
            'category'          => 'layout',
            'icon'              => 'images-alt2',
            'keywords'          => array('skills', 'logos', 'slider'),
            'enqueue_style'     => get_template_directory_uri() . '/assets/css/skills.css',
            'enqueue_script'    => get_template_directory_uri() . '/assets/js/skills.js',
            'supports'          => array('align' => false),
        ));
    }
});

if( function_exists('acf_register_block_type') ) {

    // Qualifications Block
    acf_register_block_type(array(
        'name'              => 'qualifications',
        'title'             => __('Qualifications'),
        'description'       => __('Displays qualifications or certifications with separators.'),
        'render_template'   => 'template-parts/sections/qualifications.php',
        'category'          => 'layout',
        'icon'              => 'awards',
        'keywords'          => array('qualifications', 'education', 'skills'),
        'mode'              => 'edit',
        'supports'          => array(
            'align' => false,
            'mode'  => true,
        ),
    ));
}

if( function_exists('acf_register_block_type') ) {

    // Courses Block
    acf_register_block_type(array(
        'name'              => 'courses',
        'title'             => __('Courses'),
        'description'       => __('Displays a list of professional or educational courses.'),
        'render_template'   => 'template-parts/sections/courses.php',
        'category'          => 'layout',
        'icon'              => 'book',
        'keywords'          => array('courses', 'education', 'training'),
        'mode'              => 'edit',
        'supports'          => array(
            'align' => false,
            'mode'  => true,
        ),
    ));
}

function register_audits_block() {
    acf_register_block_type(array(
        'name'              => 'audits',
        'title'             => __('Audits Section'),
        'description'       => __('Displays the audits section with image and list of audits.'),
        'render_template'   => 'template-parts/sections/section-audits.php',
        'category'          => 'formatting',
        'icon'              => 'admin-site-alt3',
        'keywords'          => array('audits', 'experience', 'section'),
        'mode'              => 'edit'
    ));
}
add_action('acf/init', 'register_audits_block');


function register_client_reviews_block() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'client-reviews',
            'title'             => __('Client Reviews Section'),
            'description'       => __('Displays a client review with author and pattern image.'),
            'render_template'   => 'template-parts/sections/client-reviews.php',
            'category'          => 'formatting',
            'icon'              => 'admin-users',
            'keywords'          => array('client', 'review', 'testimonial'),
            'mode'              => 'edit',
        ));
    }
}
add_action('acf/init', 'register_client_reviews_block');

function register_work_section_block() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'            => 'work-section',
            'title'           => __('Work Section'),
            'description'     => __('Work section with up to 3 buttons including download file.'),
            'render_template' => 'template-parts/sections/work.php',
            'category'        => 'formatting',
            'icon'            => 'editor-table',
            'keywords'        => array('work', 'buttons', 'download'),
            'mode'            => 'edit',
        ));
    }
}
add_action('acf/init', 'register_work_section_block');

function register_standards_block() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'standards-section',
            'title'             => __('Standards Section'),
            'description'       => __('Displays the standards section with icons and details.'),
            'render_template'   => 'template-parts/sections/standards.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('standards','icons','section'),
            'mode'              => 'edit'
        ));
    }
}
add_action('acf/init', 'register_standards_block');

// Register ACF Gutenberg block for Professional Experience
add_action('acf/init', 'register_professional_experience_block');
function register_professional_experience_block() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'professional-experience',
            'title'             => __('Professional Experience'),
            'description'       => __('Displays the professional experience timeline.'),
            'render_template'   => 'template-parts/sections/professional-experience.php',
            'category'          => 'formatting',
            'icon'              => 'id-alt',
            'keywords'          => array('experience', 'timeline', 'career'),
            'mode'              => 'edit',
            'supports'          => array('align' => false),
        ));
    }
}

// Register ACF Gutenberg block for About Me
add_action('acf/init', 'register_about_me_block');
function register_about_me_block() {

    // Check if ACF is active
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'about-me',
            'title'             => __('About Me Section'),
            'description'       => __('A custom About Me section with image, text, and service list.'),
            'render_template'   => 'template-parts/sections/about-me.php',
            'category'          => 'layout',
            'icon'              => 'admin-users',
            'keywords'          => array('about', 'profile', 'info', 'stensland'),
            'mode'              => 'edit',
            // 'enqueue_assets'    => function() {
            //     wp_enqueue_style('about-me-style', get_template_directory_uri() . '/assets/css/about-me.css', array(), null);
            // },
            'supports' => array(
                'align' => false,
                'mode' => false,
            ),
        ));
    }
}

// Register ACF Gutenberg Block: Education
add_action('acf/init', 'register_education_block');
function register_education_block() {

    if ( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'education',
            'title'             => __('Education Section'),
            'description'       => __('Displays the Education timeline section with background image and overlay.'),
            'render_template'   => 'template-parts/sections/education.php',
            'category'          => 'layout',
            'icon'              => 'welcome-learn-more',
            'keywords'          => array('education', 'timeline', 'stensland'),
            'mode'              => 'edit',
            'enqueue_assets'    => function() {
                wp_enqueue_style('education-style', get_template_directory_uri() . '/assets/css/education.css', array(), null);
            },
            'supports' => array(
                'align' => false,
                'mode' => false,
            ),
        ));
    }
}


// Register "Projects" ACF Gutenberg Block
function stensland_register_projects_block() {
     
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'projects',
            'title'             => __('Projects Section', 'stensland'),
            'description'       => __('Displays the Projects section with tabs and project cards', 'stensland'),
            'render_template'   => 'template-parts/sections/projects.php',
            'category'          => 'formatting',
            'icon'              => 'portfolio',
            'keywords'          => array('projects', 'portfolio', 'tabs'),
            'mode'              => 'edit',
            'supports'          => array(
                'align' => false,
                'anchor' => true,
                'jsx' => true,
            ),
        ));
    }
}
add_action('acf/init', 'stensland_register_projects_block');

function enqueue_projects_tabs_script() {
    wp_enqueue_script(
        'projects-tabs',
        get_template_directory_uri() . '/assets/js/projects-tabs.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/projects-tabs.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_projects_tabs_script');


function stensland_enqueue_scripts() {
     
    wp_enqueue_script('projects-popup', get_template_directory_uri() . '/assets/js/project-popup.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'stensland_enqueue_scripts');

function enqueue_client_reviews_assets() {
   
  wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css' );
  wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true );

   
  wp_add_inline_script( 'swiper-js', "
  document.addEventListener('DOMContentLoaded', function() {
    const el = document.querySelector('.client-reviews-slider');
    if (!el) { console.error('client-reviews-slider not found'); return; }

    const slides = el.querySelectorAll('.swiper-slide');
    const arrows = document.querySelector('.client-review-arrows');

    // Hide arrows if there's only one slide
    if (slides.length <= 1 && arrows) {
      arrows.style.display = 'none';
    }

    const clientSwiper = new Swiper(el, {
      loop: slides.length > 1, // Only loop if more than one slide
      slidesPerView: 1,
      spaceBetween: 30,
      navigation: slides.length > 1 ? {
        nextEl: '.client-review-next',
        prevEl: '.client-review-prev',
      } : {}, // Disable navigation if only 1 slide
      speed: 700,
      autoHeight: true,
    });

    console.log('Client Reviews Swiper initialized with ' + slides.length + ' slide(s)');
  });
");

}
add_action( 'wp_enqueue_scripts', 'enqueue_client_reviews_assets' );

// Register custom strings for Polylang translation
if ( function_exists('pll_register_string') ) {
    pll_register_string('Header', 'STENSLAND', 'Header');
    pll_register_string('Header', 'Book a Call', 'Header');
}

function enqueue_professional_experience_script() {
    wp_enqueue_script(
        'professional-experience',
        get_template_directory_uri() . '/assets/js/professional-experience.js',
        array(),  
        filemtime(get_template_directory() . '/assets/js/professional-experience.js'),
        true  
    );
}
add_action('wp_enqueue_scripts', 'enqueue_professional_experience_script');


function enqueue_header_lang_script() {
    wp_enqueue_script(
        'header-lang-toggle',
        get_template_directory_uri() . '/assets/js/header-lang-toggle.js',
        array(),  
        filemtime(get_template_directory() . '/assets/js/header-lang-toggle.js'),
        true  
    );
}
add_action('wp_enqueue_scripts', 'enqueue_header_lang_script');
