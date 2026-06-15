function loadComponent(selector, url, callback) {
    fetch(url)
        .then(res => res.text())
        .then(html => {
            document.querySelector(selector).innerHTML = html;
            if (callback) callback();
        })
        .catch(err => console.error(`Failed to load ${url}:`, err));
}

function initHeader() {
    const currentPath = window.location.pathname;

    // Active nav link
    document.querySelectorAll('.navbar a').forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.parentElement.classList.add('active');
        }
    });

    // Mobile menu toggle (hamburger)
    const toggle = document.getElementById('menu');
    const nav = document.getElementById('navbar');
    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            nav.style.display = (nav.style.display === 'block') ? 'none' : 'block';
        });
    }
}

function initFooter() {
    const yearEl = document.getElementById('footer-year');
    if (yearEl) yearEl.textContent = new Date().getFullYear();
}

// Load components on DOM ready
document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('#header');
    const footer = document.querySelector('#footer');

    if (header) loadComponent('#header', '/components/header.html', initHeader);
    if (footer) loadComponent('#footer', '/components/footer.html', initFooter);
});


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

// PORTFOLIO
document.addEventListener('DOMContentLoaded', async () => {

    const portfolioGrid = document.querySelector('#portfolio-grid');
    const filtersContainer = document.querySelector('#portfolio-filters');

    const response = await fetch('/data/portfolio.json');
    const data = await response.json();

    const categories = data.categories;
    const projects = data.projects;

    let activeCategory = 'all';

    renderFilters();
    renderProjects();

    function renderFilters() {

        filtersContainer.innerHTML = `
            <button
                class="portfolio-filter-btn active"
                data-category="all"
            >
                Все
            </button>
        `;

        categories.forEach(category => {

            filtersContainer.innerHTML += `
                <button
                    class="portfolio-filter-btn"
                    data-category="${category.id}"
                >
                    ${category.title}
                </button>
            `;
        });

        initFilterEvents();
    }

    function renderProjects() {

        portfolioGrid.innerHTML = '';

        const filteredProjects = activeCategory === 'all'
            ? projects
            : projects.filter(project => project.category === activeCategory);

        filteredProjects.forEach(project => {

            portfolioGrid.innerHTML += `
                <article class="project-item">

                    <a
                        href="${project.url}"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img
                            src="${project.image}"
                            alt="${project.title}"
                            class="w-full"
                            loading="lazy"
                        >
                    </a>

                    <div class="py-4">
                        <h3>
                            ${project.title}
                        </h3>

                        <p>
                            ${project.description}
                        </p>
                    </div>

                </article>
            `;
        });
    }

    function initFilterEvents() {

        const buttons = document.querySelectorAll('.portfolio-filter-btn');

        buttons.forEach(button => {

            button.addEventListener('click', () => {

                buttons.forEach(btn => {
                    btn.classList.remove('active');
                });

                button.classList.add('active');

                activeCategory = button.dataset.category;

                renderProjects();
            });
        });
    }

});


// Testimonials
document.addEventListener('DOMContentLoaded', () => {
    initTestimonials();
});

async function initTestimonials() {
    const container = document.getElementById('testimonial-container');
    if (!container) return;

    try {
        const response = await fetch('/data/testimonials.json');
        if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
        
        const testimonials = await response.json();
        
        container.innerHTML = testimonials.map(item => `
            <figure class="testimonial">
                <p>
                    ${escapeHTML(item.text)}
                    <div class="btn"></div>
                </p>
                <img src="${escapeHTML(item.image)}" alt="${escapeHTML(item.name)}">
                <div class="people">
                    <h3>${escapeHTML(item.name)}</h3>
                    <p class="indentity">${escapeHTML(item.identity)}</p>
                </div>
            </figure>
        `).join('');

        // If you are using a carousel library (Slick, Swiper, etc.), initialize it here:
        // $('.testiSlide').not('.slick-initialized').slick();

    } catch (error) {
        console.error('Failed to load testimonials:', error);
        container.innerHTML = `<p class="error">Не удалось загрузить отзывы.</p>`;
    }
}

function escapeHTML(str) {
    if (!str) return '';
    return str.replace(/[&<>'"]/g, 
        tag => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', "'": '&#39;', '"': '&quot;' }[tag] || tag)
    );
}
// End: Testimonials