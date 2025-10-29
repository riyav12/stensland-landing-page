document.addEventListener("DOMContentLoaded", function() {

   
    const tabs = document.querySelectorAll(".projects-section .tab");
    const grids = document.querySelectorAll(".projects-section .projects-grid");

    function showTab(index) {
        tabs.forEach(t => t.classList.remove("active"));
        grids.forEach(g => g.classList.add("hidden-grid"));
        grids.forEach(g => g.classList.remove("active-grid"));

        tabs[index].classList.add("active");
        grids[index].classList.remove("hidden-grid");
        grids[index].classList.add("active-grid");
    }

    tabs.forEach((tab, index) => {
        tab.addEventListener("click", () => {
            showTab(index);
        });
    });

    showTab(0); 
    const popupOverlay = document.createElement('div');
    popupOverlay.classList.add('project-popup-overlay');
    popupOverlay.innerHTML = `
        <div class="project-popup">
            <span class="popup-close">&times;</span>
            <div class="popup-content"></div>
        </div>
    `;
    document.body.appendChild(popupOverlay);

    const popupContent = popupOverlay.querySelector('.popup-content');
    const popupClose = popupOverlay.querySelector('.popup-close');

    
    function openPopup(project) {
        const img = project.querySelector('img') ? project.querySelector('img').outerHTML : '';
        const title = project.querySelector('.project-title') ? `<h3>${project.querySelector('.project-title').innerText}</h3>` : '';
        const role = project.querySelector('.project-role') ? `<p>${project.querySelector('.project-role').innerHTML}</p>` : '';
        const duration = project.querySelector('.project-duration') ? `<p>${project.querySelector('.project-duration').innerText}</p>` : '';
        const desc = project.querySelector('.project-desc') ? `<p>${project.querySelector('.project-desc').innerText}</p>` : '';
        const iso = project.querySelector('.project-tags') ? `<div class="project-tags">${project.querySelector('.project-tags').innerHTML}</div>` : '';

        popupContent.innerHTML = img + title + role + duration + desc + iso;
        popupOverlay.style.display = 'flex';
    }

    
    function attachProjectClicks() {
        const visibleProjects = document.querySelectorAll('.projects-grid.active-grid .project-item');
        visibleProjects.forEach(project => {
            project.style.cursor = 'pointer';
            project.replaceWith(project.cloneNode(true));
        });

         
        document.querySelectorAll('.projects-grid.active-grid .project-item').forEach(project => {
            project.addEventListener('click', function(e) {
                openPopup(project);
            });
        });
    }

    attachProjectClicks();  

    // Close popup on X
    popupClose.addEventListener('click', function() {
        popupOverlay.style.display = 'none';
    });

     
    popupOverlay.addEventListener('click', function(e) {
        if(e.target === popupOverlay) {
            popupOverlay.style.display = 'none';
        }
    });

     
    tabs.forEach((tab, index) => {
        tab.addEventListener("click", () => {
            setTimeout(() => {
                attachProjectClicks();
            }, 10);
        });
    });

});
