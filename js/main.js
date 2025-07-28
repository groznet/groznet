// Main navmenu dropdown mobile code
document.getElementById("menu").addEventListener("click", function() {
	var e = document.getElementsByTagName("nav")[0];
	"block" == e.style.display ? e.style.display = "none" : e.style.display = "block"
}, !1)
// End: Main navmenu dropdown mobile code

// Fireup the plugins
$(document).ready(function(){
	// initialise  slideshow
	 $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
    });
});

// Main Slider
(function() {
  
	var autoUpdate = true,
		timeTrans = 4000;
	
	  var cdSlider = document.querySelector('.cd-slider'),
		  item = cdSlider.querySelectorAll("li"),
		  nav = cdSlider.querySelector("nav");
  
	  item[0].className = "current_slide";
  
	  for (var i = 0, len = item.length; i < len; i++) {
		  var color = item[i].getAttribute("data-color");
		  item[i].style.backgroundColor=color;
	  }
  
	  // Detect IE
	  // hide ripple effect on IE9
	  var ua = window.navigator.userAgent;
		  var msie = ua.indexOf("MSIE");
		  if ( msie > 0 ) {
			  var version = parseInt(ua.substring(msie+ 5, ua.indexOf(".", msie)));
			  if (version === 9) { cdSlider.className = "cd-slider ie9";}
	  }
  
	  if (item.length <= 1) {
		  nav.style.display = "none";
	  }
  
	  function prevSlide() {
		  var currentSlide = cdSlider.querySelector("li.current_slide"),
			  prevElement = currentSlide.previousElementSibling,
			  prevSlide = ( prevElement !== null) ? prevElement : item[item.length-1],
			  prevColor = prevSlide.getAttribute("data-color"),
			  el = document.createElement('span');
  
		  currentSlide.className = "";
		  prevSlide.className = "current_slide";
  
		  nav.children[0].appendChild(el);
  
		  var size = ( cdSlider.clientWidth >= cdSlider.clientHeight ) ? cdSlider.clientWidth*2 : cdSlider.clientHeight*2,
			  ripple = nav.children[0].querySelector("span");
  
		  ripple.style.height = size + 'px';
		  ripple.style.width = size + 'px';
		  ripple.style.backgroundColor = prevColor;
  
		  ripple.addEventListener("webkitTransitionEnd", function() {
			  if (this.parentNode) {
				  this.parentNode.removeChild(this);
			  }
		  });
  
		  ripple.addEventListener("transitionend", function() {
			  if (this.parentNode) {
				  this.parentNode.removeChild(this);
			  }
		  });
  
	  }
  
	  function nextSlide() {
		  var currentSlide = cdSlider.querySelector("li.current_slide"),
			  nextElement = currentSlide.nextElementSibling,
			  nextSlide = ( nextElement !== null ) ? nextElement : item[0],
			  nextColor = nextSlide.getAttribute("data-color"),
			  el = document.createElement('span');
  
		  currentSlide.className = "";
		  nextSlide.className = "current_slide";
  
		  nav.children[1].appendChild(el);
  
		  var size = ( cdSlider.clientWidth >= cdSlider.clientHeight ) ? cdSlider.clientWidth*2 : cdSlider.clientHeight*2,
				ripple = nav.children[1].querySelector("span");
  
		  ripple.style.height = size + 'px';
		  ripple.style.width = size + 'px';
		  ripple.style.backgroundColor = nextColor;
  
		  ripple.addEventListener("webkitTransitionEnd", function() {
			  if (this.parentNode) {
				  this.parentNode.removeChild(this);
			  }
		  });
  
		  ripple.addEventListener("transitionend", function() {
			  if (this.parentNode) {
				  this.parentNode.removeChild(this);
			  }
		  });
  
	  }
  
	  updateNavColor();
  
	  function updateNavColor () {
		  var currentSlide = cdSlider.querySelector("li.current_slide");
  
		  var nextColor = ( currentSlide.nextElementSibling !== null ) ? currentSlide.nextElementSibling.getAttribute("data-color") : item[0].getAttribute("data-color");
		  var	prevColor = ( currentSlide.previousElementSibling !== null ) ? currentSlide.previousElementSibling.getAttribute("data-color") : item[item.length-1].getAttribute("data-color");
  
		  if (item.length > 2) {
			  nav.querySelector(".prev").style.backgroundColor = prevColor;
			  nav.querySelector(".next").style.backgroundColor = nextColor;
		  }
	  }
  
	  nav.querySelector(".next").addEventListener('click', function(event) {
		  event.preventDefault();
		  nextSlide();
		  updateNavColor();
	  });
  
	  nav.querySelector(".prev").addEventListener("click", function(event) {
		  event.preventDefault();
		  prevSlide();
		  updateNavColor();
	  });
	
	//autoUpdate
	setInterval(function() {
	  if (autoUpdate) {
		nextSlide();
		updateNavColor();
	  };
	  },timeTrans);
  
  })();
//   End: Main Slider
// =======================================================

// PWA Service worker
const registerServiceWorker = async () => {
  if ("serviceWorker" in navigator) {
    try {
      const registration = await navigator.serviceWorker.register("/service-worker.js", {
        scope: "/",
      });
      if (registration.installing) {
        console.log("Service worker installing");
      } else if (registration.waiting) {
        console.log("Service worker installed");
      } else if (registration.active) {
        console.log("Service worker active");
      }
    } catch (error) {
      console.error(`Registration failed with ${error}`);
    }
  }
};

// …

registerServiceWorker();

// Disable right click on website
document.addEventListener('contextmenu', event => event.preventDefault());