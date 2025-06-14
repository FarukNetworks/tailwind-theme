document.addEventListener("DOMContentLoaded", (event) => {

  /* Smooth opacity HTML element animation */
  var html = document.querySelector('html');
  html.style.opacity = 0;

  /* Anchor link with # scroll smooth */
  setTimeout(function () {
    var scrollLinks = document.querySelectorAll('a[href^="#"]');

    scrollLinks.forEach(function (scrollLink) {
      scrollLink.addEventListener('click', function (e) {
        e.preventDefault();

        console.log('clicked')
        var targetId = scrollLink.getAttribute('href');
        var targetElement = document.querySelector(targetId);

        if (targetElement) {
          var offsetTop = targetElement.offsetTop - 99;

          window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
          });
        }
      });
    });
  }, 1000);


  /* Navigation toggle navHandler */
  window.addEventListener('load', function () {
    html.style.opacity = 1;
    var main_navigation = document.querySelector('#primary-menu');
    document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
      e.preventDefault();
      main_navigation.classList.toggle('navHandler');
    });
  });


  /* Navigation toggle menu add class is--menu-open */
  const body = document.querySelector('html > body');
  const menuButton = document.querySelector('#primary-menu-toggle');
  const menu = document.querySelector('#primary-menu');

  menuButton.addEventListener('click', function () {
    menuButton.classList.toggle('is--open');
    body.classList.toggle('is--menu-open');
  })

  function handleClickOutside(event) {
    if (!menu.contains(event.target) && !menuButton.contains(event.target) && menuButton.classList.contains('is--open')) {
      menuButton.click();
    }
  }

  document.addEventListener('click', handleClickOutside);

});


jq2 = jQuery.noConflict();
jq2(function ($) {

  if ($('.accordion-content').length > 0) {
    const accordionContent = $('.accordion-content');
    const accordionTitle = $('.accordion-title');

    accordionContent.slideUp();

    accordionTitle.each(function () {
      $(this).on("click", function () {
        accordionTitle.removeClass('open');
        let content = $(this).next(".accordion-content");
        let arrow = $(this).find("svg");
        accordionContent.not(content).removeClass("showed").slideUp();
        content.toggleClass("showed").slideToggle();
        if (content.hasClass('showed')) {
          $(this).addClass('open');
        } else {
          $(this).removeClass('open');
        }
      });
    });
  }

});
