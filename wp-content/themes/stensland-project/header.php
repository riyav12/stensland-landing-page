<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&family=Forum&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container header-inner">
    <!-- Left: Logo -->
    <div class="header-left">
      <a href="<?php echo home_url(); ?>" class="brand">
        <div class="logo-circle">
          <span class="logo-th">
            <span class="t">T</span><span class="h">H</span>
          </span>
        </div>
        <span class="brand-text">STENSLAND</span>
      </a>
    </div>

    <!-- Right: Language + Button -->
    <div class="header-right">
      <div class="lang-select">
        <div class="lang-current">
          <span class="lang">EN</span>
          <svg class="lang-arrow" xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
            <path d="M1 1L5 5L9 1" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <ul class="lang-dropdown">
          <li data-lang="EN">English</li>
          <li data-lang="NO">Norwegian</li>
        </ul>
      </div>

      <a href="#" class="book-btn">
        Book a Call
        <svg width="16" height="16" style="vertical-align:middle;margin-left:6px;" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 12L12 4M12 4H6M12 4V10" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
  </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const langSelect = document.querySelector('.lang-select');
  const currentLang = langSelect.querySelector('.lang');
  const dropdown = langSelect.querySelector('.lang-dropdown');

  langSelect.addEventListener('click', (e) => {
    e.stopPropagation();
    langSelect.classList.toggle('open');
  });

  dropdown.querySelectorAll('li').forEach(item => {
    item.addEventListener('click', (e) => {
      const selected = e.target.getAttribute('data-lang');
      currentLang.textContent = selected;
      langSelect.classList.remove('open');
    });
  });

  document.addEventListener('click', () => {
    langSelect.classList.remove('open');
  });
});
</script>

<?php wp_footer(); ?>
</body>
</html>
