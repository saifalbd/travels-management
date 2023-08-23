import './bootstrap';
import './libs/trix';

import 'flowbite';

import Splide from '@splidejs/splide';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide', {
        perPage: 3,
        rewind : true,
        gap:'1rem',
       breakpoints:{
        1280: { perPage: 3, gap: '0.5rem' },
        1024 : { perPage: 2, gap: '0.2rem' },
        768:{ perPage: 1, gap: 0 },
       }
      } );
    splide.mount();



    window.addEventListener('scroll', function(){
      console.log('scroll')
      let top = document.getElementById('top');
      let h = top.clientHeight;
      var nav = document.getElementById('nav');
      nav.classList.toggle('sticky', window.scrollY >h);
  });


  const h1List = document.getElementsByTagName('h1');
  Array.prototype.forEach.call(h1List,(item)=>{
    item.classList.add('animate')
  })
  } );






