document.addEventListener("DOMContentLoaded", function () {
  const menuToggler = document.querySelector(".mobile-menu-toggler");
  const navbarCollapse = document.querySelector("#navbarMobile");

  if (menuToggler) {
    menuToggler.addEventListener("click", function () {
      const isExpanded = menuToggler.getAttribute("aria-expanded") === "true";

      menuToggler.setAttribute("aria-expanded", !isExpanded);

      if (isExpanded) {
        navbarCollapse.classList.remove("show");
        menuToggler.classList.remove("active");
        setTimeout(() => {
          navbarCollapse.classList.remove("collapsing");
          navbarCollapse.classList.add("collapse");
        }, 350);
      } else {
        navbarCollapse.classList.remove("collapse");
        navbarCollapse.classList.add("collapsing");
        menuToggler.classList.add("active");
        setTimeout(() => {
          navbarCollapse.classList.remove("collapsing");
          navbarCollapse.classList.add("collapse", "show");
        }, 350);
      }

      toggleMenuIcon(menuToggler, isExpanded);
    });
  }

  function toggleMenuIcon(button, isExpanded) {
    const iconContainer =
      button.querySelector("i") || button.querySelector("span");

    if (iconContainer) {
      if (isExpanded) {
        iconContainer.innerHTML = `
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 12H21" stroke="#245ba7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3 6H21" stroke="#245ba7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3 18H21" stroke="#245ba7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                `;
      } else {
        iconContainer.innerHTML = `
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#245ba7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 6L18 18" stroke="#245ba7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                `;
      }
    }
  }

  document.addEventListener("click", function (event) {
    const isMenuOpen = navbarCollapse.classList.contains("show");
    const isClickInsideMenu = navbarCollapse.contains(event.target);
    const isClickOnToggler = menuToggler.contains(event.target);

    if (isMenuOpen && !isClickInsideMenu && !isClickOnToggler) {
      menuToggler.click();
    }
  });

  window.addEventListener("resize", function () {
    if (window.innerWidth >= 992 && navbarCollapse.classList.contains("show")) {
      menuToggler.click();
    }
  });
});
