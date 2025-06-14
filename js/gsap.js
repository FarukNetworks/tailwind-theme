document.addEventListener("DOMContentLoaded", (event) => {

  gsap.registerPlugin(ScrollTrigger);
  ScrollTrigger.refresh();

  setTimeout(() => {
    ScrollTrigger.refresh();
  }, 500);



  window.addEventListener('scroll', function () {
    var header = document.querySelector('header');
    if (window.scrollY > 100) {
      header.classList.add('stickNav');
    } else {
      header.classList.remove('stickNav');
    }
  });



  setTimeout(function () {
    gsap.registerPlugin(ScrollTrigger);
    const gsapEl = document.querySelectorAll('.gsap-animated');

    gsapEl.forEach(el => {

      var delayValue = 0;
      if (el.classList.contains('gsap-delay-hero')) {
        delayValue = .5;
      } else if (el.classList.contains('gsap-delay-3')) {
        delayValue = 3;
      }




      if (el.classList.contains('gsap-fade-in-left')) {
        gsap.from(el, {
          scrollTrigger: {
            trigger: el.closest('section'),
            start: () => 'top 80%',
          },
          opacity: 0,
          xPercent: -50,
          ease: 'power1.inOut',
          duration: 1,
          delay: delayValue
        });

      } else if (el.classList.contains('gsap-fade-in-left-stagger')) {
        gsap.from(el.children, {
          scrollTrigger: {
            trigger: el.closest('section'),
            start: () => 'top 80%',
          },
          opacity: 0,
          xPercent: -50,
          ease: 'power1.inOut',
          duration: 1,
          stagger: 0.3,
          delay: delayValue
        });

      } else if (el.classList.contains('gsap-fade-in-right')) {
        gsap.from(el, {
          scrollTrigger: {
            trigger: el.closest('section'),
            start: () => 'top 80%',
          },
          opacity: 0,
          xPercent: 50,
          ease: 'power1.inOut',
          duration: 1,
          delay: delayValue
        });

      } else if (el.classList.contains('gsap-fade-in-right-stagger')) {
        gsap.from(el.children, {
          scrollTrigger: {
            trigger: el.closest('section'),
            start: () => 'top 80%',
          },
          opacity: 0,
          xPercent: 50,
          ease: 'power1.inOut',
          duration: 1,
          stagger: 0.3,
          delay: delayValue
        });

      } else if (el.classList.contains('gsap-fade-in-up')) {
        gsap.from(el, {
          scrollTrigger: {
            trigger: el.closest('section'),
            start: () => 'top 80%',
          },
          opacity: 0,
          yPercent: 50,
          ease: 'power1.inOut',
          duration: 1,
          delay: delayValue
        });

      } else if (el.classList.contains('gsap-fade-in-up-hero')) {
        gsap.from(el, {
          opacity: 0,
          yPercent: 50,
          ease: 'power1.inOut',
          duration: 1,
          delay: 1.5,
        });

      } else if (el.classList.contains('gsap-fade-in-down')) {
        gsap.from(el, {
          scrollTrigger: {
            trigger: el.closest('section'),
            start: () => 'top 80%',
          },
          opacity: 0,
          yPercent: -50,
          ease: 'power1.inOut',
          duration: 1,
          delay: delayValue
        });

      } else if (el.classList.contains('gsap-fade-in-down-stagger')) {
        gsap.from(el.children, {
          scrollTrigger: {
            trigger: el.closest('section'),
            start: () => 'top 80%',
          },
          opacity: 0,
          yPercent: -50,
          ease: 'power1.inOut',
          duration: 1,
          stagger: 0.3,
          delay: delayValue
        });

      } else if (el.classList.contains('gsap-fade-in-down-hero')) {
        gsap.from(el, {

          opacity: 0,
          yPercent: -50,
          ease: 'power1.inOut',
          duration: 1,
          delay: 1.5,
        });

      } else if (el.classList.contains('gsap-fade-in')) {
        gsap.from(el, {
          scrollTrigger: {
            trigger: el.closest('section'),
            start: () => 'top 80%',
          },
          opacity: 0,
          ease: 'power1.inOut',
          duration: 1,
          delay: delayValue
        });
      } else if (el.classList.contains('gsap-fade-in-hero')) {
        gsap.from(el, {
          opacity: 0,
          ease: 'power1.inOut',
          duration: 1,
          delay: 1.5,
        });
      } else if (el.classList.contains('gsap-fade-in-up-stagger')) {
        gsap.from(el.children, {
          scrollTrigger: {
            trigger: el.closest('section'),
            start: () => 'top 80%',
          },
          opacity: 0,
          yPercent: 50,
          ease: 'power1.inOut',
          duration: 1,
          stagger: 0.3,
          delay: delayValue
        });
      } else if (el.classList.contains('gsap-fade-in-up-stagger-hero')) {
        gsap.from(el.children, {
          scrollTrigger: {
            trigger: el.closest('section'),
            start: () => 'top 80%',
          },
          opacity: 0,
          yPercent: 50,
          ease: 'power1.inOut',
          duration: 1,
          stagger: 0.3,
          delay: 1.5
        });
      }
    });



  }, 0);


  /* Lenis animation */
  const lenis = new Lenis();

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }

  requestAnimationFrame(raf);

  // Integrate with GSAP ScrollTrigger
  lenis.on('scroll', ScrollTrigger.update);

  // Use GSAP ticker instead of requestAnimationFrame
  gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
  });

  // Prevent GSAP ticker from adjusting time to improve performance
  gsap.ticker.lagSmoothing(0);




});