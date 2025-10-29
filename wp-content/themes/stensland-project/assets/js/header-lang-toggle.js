document.addEventListener('DOMContentLoaded', () => {
  const langSelect = document.querySelector('.lang-select');
  const dropdown = langSelect?.querySelector('.lang-dropdown');

  if (!langSelect || !dropdown) return;

  langSelect.addEventListener('click', (e) => {
    e.stopPropagation();
    langSelect.classList.toggle('open');
  });

  document.addEventListener('click', () => {
    langSelect.classList.remove('open');
  });
});
