import Lenis from '@studio-freight/lenis';
import { gsap } from "gsap";
    
import { ScrollTrigger } from "gsap/ScrollTrigger";


gsap.registerPlugin(ScrollTrigger);


const html = document.querySelector('html')
html.style.opacity = 0; 
// Navigation toggle
window.addEventListener('load', function () {
      html.style.opacity = 1; 
      
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('navHandler');

      });
      
});



// Smooth scroll 

const lenis = new Lenis()

lenis.on('scroll', ScrollTrigger.update)

gsap.ticker.add((time)=>{
  lenis.raf(time * 1000)
})

gsap.ticker.lagSmoothing(0);