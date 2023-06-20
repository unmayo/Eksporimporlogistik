// Toggle menu active
const navbarNav = document.querySelector(".navbar-nav");
document.querySelector("#menu-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

//Out from nav
const menu = document.querySelector("#menu-menu");

document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

// Updated JavaScript code

document.addEventListener("DOMContentLoaded", function () {
  var dropdownMenu = document.getElementById("dropdown-menu");
  var username = document.getElementById("username");

  function toggleDropdown() {
    dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
  }

  username.addEventListener("click", toggleDropdown);
  dropdownMenu.addEventListener("click", function (event) {
    event.stopPropagation();
  });

  document.addEventListener("click", function () {
    dropdownMenu.style.display = "none";
  });
});

// News
function redirectToLink(link) {
  window.location.href = link;
}

function filterByYear(year) {
  var currentUrl = window.location.href;
  var separator = currentUrl.includes('?') ? '&' : '?';
  window.location.href = currentUrl + separator + 'year=' + year;
}

