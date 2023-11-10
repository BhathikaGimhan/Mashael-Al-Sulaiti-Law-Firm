
    // var prevScrollPos = window.pageYOffset;
    // window.addEventListener("scroll", function() {
    //     var currentScrollPos = window.pageYOffset;
    //     var topBar = document.getElementById("topBar");
    //     if (prevScrollPos > currentScrollPos) {
    //         topBar.classList.remove("hidden");
    //     } else {
    //         topBar.classList.add("hidden");
    //     }
    //     prevScrollPos = currentScrollPos;
    // });




      window.addEventListener('scroll', function() {
        var scrollIncrement = Math.floor(window.pageYOffset / 20);
        var marginTop = -5 * scrollIncrement;
        document.querySelector('.main-nav').style.marginTop = marginTop + 'px';
      });

      window.addEventListener('scroll', function() {
        var scrollIncrement = Math.floor(window.pageYOffset / 20);
        var marginTop = -5 * scrollIncrement;
        document.querySelector('.nav-text-topnav-left').style.marginTop = marginTop + 'px';
      });

      window.addEventListener('scroll', function() {
        var scrollIncrement = Math.floor(window.pageYOffset / 20);
        var marginTop = -5 * scrollIncrement;
        document.querySelector('.nav-text-topnav-right').style.marginTop = marginTop + 'px';
      });


      window.addEventListener('scroll', function() {
        var scrollIncrement = Math.floor(window.pageYOffset / 20);
        var marginTop = -5 * scrollIncrement;
        document.querySelector('.nav-text-topnav-left-mob').style.marginTop = marginTop + 'px';
      });

      window.addEventListener('scroll', function() {
        var scrollIncrement = Math.floor(window.pageYOffset / 20);
        var marginTop = -5 * scrollIncrement;
        document.querySelector('.nav-text-topnav-right-mob').style.marginTop = marginTop + 'px';
      });

      function hideNav() {
        var navLists = document.getElementsByClassName("topnav-hide-link");
        for (var i = 0; i < navLists.length; i++) {
          navLists[i].classList.add("text-light");
        }
      }

      function displayNav() {
        var navLists = document.getElementsByClassName("topnav-hide-link");
        for (var i = 0; i < navLists.length; i++) {
          navLists[i].classList.remove("text-light");
        }
      }

      var swiper = new Swiper('.hero-slider', {
        direction: 'vertical',
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        autoplay: {
          delay: 5000,
        },
      });

      const collapse = new bootstrap.Collapse(document.getElementById('navbarSupportedContent'), {
        toggle: false
      });
      const toggleBtn = document.getElementById('toggleBtn');
      toggleBtn.addEventListener('click', function() {
        collapse.toggle();
        if (collapse._isTransitioning || collapse._element.classList.contains('show')) {
          toggleBtn.textContent = 'Close';
        } else {
          toggleBtn.textContent = 'More';
        }
      });
      collapse._element.addEventListener('hidden.bs.collapse', function () {
        toggleBtn.textContent = 'More';
      })


      // var language = "english";
      // var langSwitcher = document.querySelector('.lang-switcher a');

      // function toggleLanguage() {
      // if (language === "english") {
      // language = "arabic";
      // langSwitcher.textContent = "عربي";

      // } else {
      // language = "english";
      // langSwitcher.textContent = "English";

      // }
      // }

      var language = "arabic";
      var langSwitcher = document.querySelector('.lang-switcher a');

      function toggleLanguage() {
        if (language === "arabic") {
        language = "english";
        langSwitcher.textContent = "English";

        } else {
        language = "arabic";
        langSwitcher.textContent = "عربي";
        }
      }

      var prevScrollPos = window.pageYOffset;
      window.addEventListener("scroll", function() {
          var currentScrollPos = window.pageYOffset;
          var topBar = document.getElementById("topBar");
          if (prevScrollPos > currentScrollPos) {
              topBar.classList.remove("hidden");
          } else {
              topBar.classList.add("hidden");
          }
          prevScrollPos = currentScrollPos;
      });
