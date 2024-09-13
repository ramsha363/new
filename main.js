const swiperWatches = new Swiper('.home__swiper', {
 
    loop: true,
   spaceBetween: 32,
   grabCursor: true,
   effect: 'creative',
  creativeEffect: {
    prev: {
        translate: [-100, 0, -500],
        rotate: [0, 0, 15],
        opacity: 0
    },
    next: {
        translate: [100, 0, -500],
        rotate: [0, 0, -15],
        opacity: 0
    },
  }, 
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

  })
//   GSAP Animation
gsap.form(' .home__images' , 1.5, {opacity: 0, y: 150, delay: .1})
gsap.form(' .home__data' , 1.8, {opacity: 0, x: -100, delay: .8})
gsap.form(' .home__info' , 1.8, {opacity: 0, x: -100, delay: .1})



function toggleContent() {
  var additionalContent = document.getElementById('additional-content');

  // Toggle the visibility of the additional content
  if (additionalContent.style.display === 'none') {
      additionalContent.style.display = 'block';
  } else {
      additionalContent.style.display = 'none';
  }
}

    function toggleDiscoverContent() {
        var discoverContent = document.getElementById('discover-content');

        // Toggle the visibility of the discover content
        if (discoverContent.style.display === 'none') {
            discoverContent.style.display = 'block';
        } else {
            discoverContent.style.display = 'none';
        }
    }

    function loadLearnMoreContent() {
        var learnMoreContent = document.getElementById('learn-more-content');

        // Check if content is already loaded or not
        if (learnMoreContent.innerHTML.trim() === '') {
           
            setTimeout(function() {
                learnMoreContent.innerHTML = '<p>This is the learn more content you want to show.</p>';
                learnMoreContent.style.display = 'block'; // Show the content
            }, 500); 
        } else {
            // Content is already loaded, toggle visibility
            if (learnMoreContent.style.display === 'none') {
                learnMoreContent.style.display = 'block';
            } else {
                learnMoreContent.style.display = 'none';
            }
        }
    }


    
     
 
 

    
   