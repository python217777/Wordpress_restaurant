

// Scroll to top functionality

const scrollToTopBtn = document.getElementById("scrollToTop");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 300) {
    scrollToTopBtn.style.opacity = "1";
  } else {
    scrollToTopBtn.style.opacity = "0";
  }
});

scrollToTopBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

(() => {
  const navbar1 = document.getElementById("navbar1");
  const navbar2 = document.getElementById("navbar2");
  if (!navbar1 || !navbar2) return;
  console.log("-------------------\n", navbar2);

  window.addEventListener("scroll", () => {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const windowHeight = window.innerHeight;
    const fullHeight = document.documentElement.scrollHeight;
    const distanceFromBottom = fullHeight - (scrollTop + windowHeight);
    if (distanceFromBottom <= 540) {
      navbar1.style.opacity = "0";
      navbar1.classList.add("pointer-events-none");
      if (navbar2) {
        navbar2.style.opacity = "0";
        navbar2.classList.add("pointer-events-none");
      }
    } else {
      navbar1.style.opacity = "1";
      navbar1.classList.remove("pointer-events-none");
      if (navbar2) {
        navbar2.style.opacity = "1";
        navbar2.classList.remove("pointer-events-none");
      }
    }
  });
})();
const menuBtn = document.getElementById("menu-btn");
const dropdown = document.getElementById("dropdown");

menuBtn.addEventListener("click", () => {
  menuBtn.classList.toggle("open");

  if (dropdown.classList.contains("hidden")) {
    // Opening the dropdown
    dropdown.classList.remove("hidden");
    dropdown.style.maxHeight = "0px";
    // Force a reflow to ensure the transition works
    dropdown.offsetHeight;
    dropdown.style.maxHeight = dropdown.scrollHeight + "px";
  } else {
    // Closing the dropdown
    dropdown.style.maxHeight = "0px";
    // Wait for the transition to complete before hiding
    setTimeout(() => {
      if (dropdown.style.maxHeight === "0px") {
        dropdown.classList.add("hidden");
      }
    }, 500); // Match the transition duration
  }
});
