document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll(".projects-section .tab");
    const grids = document.querySelectorAll(".projects-section .projects-grid");

    tabs.forEach((tab, index) => {
        tab.addEventListener("click", () => {
            tabs.forEach(t => t.classList.remove("active"));
            grids.forEach(g => g.classList.add("hidden-grid"));
            grids.forEach(g => g.classList.remove("active-grid"));

            tab.classList.add("active");
            grids[index].classList.add("active-grid");
            grids[index].classList.remove("hidden-grid");
        });
    });
});
