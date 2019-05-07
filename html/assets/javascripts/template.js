jQuery(document).ready(function( $ ) {

  // Initiate the wowjs animation library
  new WOW().init();

    $(document).ready(function () {
    $('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
});

  // Sticky Header
  $(function(){
    $(window).scroll(function(){
      var winTop = $(window).scrollTop();
      if(winTop >= 80){
        $("nav").addClass("sticky");
      }else{
        $("nav").removeClass("sticky");
      }//if-else
    });//win func.
  });//ready func.

  // Header scroll class
  // Single Nav
  $(window).scroll(function() {

      if ($(this).scrollTop()>150)
       {
          $('#single-nav').fadeIn();
       }
      else
       {
        $('#single-nav').fadeOut();
       }
   });

// scroll
  offsetHeight = 150;

  $('body').scrollspy({ 
    target: '#single-nav',
    offset: offsetHeight
  });

  $("#single-nav a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
          scrollTop: $(hash).offset().top-110
      }, 800, function(){
      });
    }  
  });


  //smooth scroll
  offsetHeight = 150;
  $('body').scrollspy({ 
    target: '#navbarText',
    offset: offsetHeight
  });

  // Add smooth scrolling on all links inside the navbar
  $("#navbarText a").on('click', function(event) {
  // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
    // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
          scrollTop: $(hash).offset().top-52
      }, 800, function(){
     
        // Add hash (#) to URL when done scrolling (default click behavior)
        // window.location.hash = hash;
      });
    }  // End if
  });



  // Review Carousel
  $('.owl-carousel').owlCarousel({
    rtl:false,
    autoplay: true,
    loop:true,
    margin:30,
    nav:true,    
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        991: {
          items: 1
        },
        1200: {
          items: 1
        }
      }
    });


// Back to top button
  $(document).ready(function(){
     $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
              $('.back-to-top').fadeIn();
          } else {
              $('.back-to-top').fadeOut();
          }
        });
     });
    $('.back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });


    // Collapse
    var coll = document.getElementsByClassName("fas");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        var p = this.nextElementSibling;
        if (p.style.display === "block") {
          p.style.display = "none";
        } else {
          p.style.display = "block";
        }
      });
    }
});
