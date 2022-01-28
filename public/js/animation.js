const animateCSS = (element, animation, prefix = 'animate__') =>
  // We create a Promise and return it
  new Promise((resolve, reject) => {
    const animationName = `${prefix}${animation}`;
    const node = document.querySelector(element);

    node.classList.add(`${prefix}animated`, animationName);

    // When the animation ends, we clean the classes and resolve the Promise
    function handleAnimationEnd(event) {
      event.stopPropagation();
      node.classList.remove(`${prefix}animated`, animationName);
      resolve('Animation ended');
    }

    node.addEventListener('animationend', handleAnimationEnd, {once: true});
  });

/*
animateCSS('.my-element', 'bounce');

// or
animateCSS('.my-element', 'bounce').then((message) => {
  // Do something after the animation
});
*/

// Event handlers (unique class for each element)
$(window).on('scroll', function() {
    if($(".animateJS").hasClass("animateImg"))
    if ($(window).scrollTop() >= $('.animateImg').offset().top + $('.animateImg').outerHeight() - window.innerHeight) {
        const element = document.querySelector('.animateImg');
        element.classList.add('animate__animated', 'animate__bounce');
        element.addEventListener('animationend', () => {
            // do something
            element.classList.remove("animateImg");
          });
      }
});