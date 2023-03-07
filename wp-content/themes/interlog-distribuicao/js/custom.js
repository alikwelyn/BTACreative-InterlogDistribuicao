(function() {
  "use strict";

  /*
    * Easy selector helper function
  */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /*
    * Easy event listener function
  */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /*
    * Easy on scroll event listener 
  */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /*
    * Navbar links active state on scroll
  */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /*
    * Header fixed top on scroll
  */
  let selectTopbar = select('#topbar')
  let selectHeader = select('#header')
  let selectNavbar = select('.navbar')
  if (selectNavbar.classList.contains('page')) {
    select('.logo img').src = `${window.location.origin}//bta/interlog-distribuicao/wp-content/themes/interlog-distribuicao/assets/images/logo-interlog-blue.png`;
  } else if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
        selectNavbar.classList.add('scrolled')
        if (selectTopbar) {
          selectTopbar.classList.add('topbar-scrolled')
        }
        select('.logo img').src = `${window.location.origin}//bta/interlog-distribuicao/wp-content/themes/interlog-distribuicao/assets/images/logo-interlog-blue.png`;
      } else {
        selectHeader.classList.remove('header-scrolled')
        selectNavbar.classList.remove('scrolled')
        if (selectTopbar) {
          selectTopbar.classList.remove('topbar-scrolled')
        }
        // change the logo image source back to the original URL
        select('.logo img').src = `${window.location.origin}//bta/interlog-distribuicao/wp-content/themes/interlog-distribuicao/assets/images/logo-interlog.png`;
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /*
    * Mobile nav toggle
  */
  const mobileNavHide = document.querySelector('.mobile-nav-hide');

  document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
    el.addEventListener('click', function(event) {
      event.preventDefault();
      mobileNavToogle();
    })
  });

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavHide.classList.toggle('d-none');
  }

  /*
    * Mobile nav dropdowns activate
  */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /*
    * Scrolls to an element with header offset
  */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('fixed-top')) {
      offset += 70
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /*
    * Back to top button
  */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /*
    * Scroll with ofset on page load with hash links in the url
  */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /*
    * Animation on scroll
  */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  /*
    * Appear file name uploaded in input type=file
  */
  var btnTitle = jQuery(".button-upload-input-title").html();
  jQuery(".button-upload-input input:file").change(function (){
    if( this.files && this.files.length >= 1 ) {
      var file = this.files[0];
      var reader = new FileReader();
      reader.onload = function (e) {
        jQuery(".button-upload-input-title").text(file.name);
      }
      reader.readAsDataURL(file);
    } else {
      jQuery(".button-upload-input-title").html(btnTitle);
    } 
  }); 

})()