/*Поиск */
function filterContent() {
  const searchQuery = document.getElementById("search").value.toLowerCase();
  const contentElements = document.querySelectorAll(
    ".feature, .text, .header-md, .subtext, .intro, .main-header,.fs-2, .map, .footer, .hr,.txt, .header-2, .photo, .news-container,.carousel"
  );

  contentElements.forEach((element) => {
    const textContent = element.textContent.toLowerCase();
    if (textContent.includes(searchQuery)) {
      element.style.display = "block";
    } else {
      element.style.display = "none";
    }
  });
}

function clearSearch() {
  document.getElementById("search").value = "";
  const contentElements = document.querySelectorAll(
    ".feature, .text, .header-md, .subtext, .intro"
  );

  contentElements.forEach((element) => {
    element.style.display = "block";
  });
}

/*Стрелка */
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scroll-to-top").style.display = "block";
  } else {
    document.getElementById("scroll-to-top").style.display = "none";
  }
}

document.getElementById("scroll-to-top").onclick = function () {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
};

document
  .querySelector(".container-main")
  .style.setProperty("padding-bottom", "0", "important");

/*Обновление страницы*/
window.addEventListener("load", function () {
  window.scrollTo(0, 0);
});

document.addEventListener("DOMContentLoaded", function () {
  const navbarToggler = document.querySelector(".navbar-toggler");
  const navbarCollapse = document.querySelector("#navbarSupportedContent");

  if (navbarToggler) {
    navbarToggler.addEventListener("click", function () {
      // Переключаем класс 'show' для скрытия/открытия меню
      navbarCollapse.classList.toggle("show");
    });
  }
});
