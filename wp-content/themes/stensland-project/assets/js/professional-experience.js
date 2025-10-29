document.addEventListener("DOMContentLoaded", function () {
  const items = Array.from(document.querySelectorAll(".experience-item"));
  if (!items.length) return;

  let startIndex = 0;
  const visibleCount = 3;

  function updateVisible(forceAnimate = false) {
    items.forEach((item, idx) => {
      if (idx >= startIndex && idx < startIndex + visibleCount) {
        item.style.display = "block";
        if (forceAnimate) {
          item.style.animation = "slideInRight 0.6s ease forwards";
        } else {
          item.style.animation = "";
        }
        item.style.opacity = 1;
      } else {
        item.style.display = "none";
        item.style.animation = "";
        item.style.opacity = 0;
      }
    });
    setClickable();
  }

  function setClickable() {
    items.forEach((it) => {
      it.classList.remove("clickable");
      it.onclick = null;
    });

    const lastVisibleIdx = startIndex + visibleCount - 1;
    const lastVisible = items[lastVisibleIdx];
    if (lastVisible) {
      lastVisible.classList.add("clickable");
      lastVisible.onclick = handleClick;
    }
  }

  function handleClick() {
    const firstVisible = items[startIndex];
    const nextIdx = startIndex + visibleCount;

    // Check if we’ve reached the end (last visible group)
    const isAtEnd = nextIdx >= items.length;

    if (isAtEnd) {
      // Reset to first 3 entries
      firstVisible.style.animation = "fadeOutLeft 0.5s ease forwards";

      setTimeout(() => {
        startIndex = 0;
        updateVisible(true);
      }, 500);

      return;
    }

    // Normal forward scroll
    const nextItem = items[nextIdx];
    firstVisible.style.animation = "fadeOutLeft 0.5s ease forwards";

    setTimeout(() => {
      firstVisible.style.display = "none";
      firstVisible.style.animation = "";
      firstVisible.style.opacity = 0;

      nextItem.style.display = "block";
      nextItem.style.animation = "slideInRight 0.6s ease forwards";
      nextItem.style.opacity = 1;

      startIndex += 1;
      setClickable();
    }, 500);
  }

  updateVisible(false);
});
