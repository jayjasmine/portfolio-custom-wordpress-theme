const hamburger=document.querySelector(".hamburger"),navMenu=document.querySelector(".nav-menu"),navLink=document.querySelectorAll(".nav-menu__link");hamburger.addEventListener("click",mobileMenu),navLink.forEach(a=>a.addEventListener("click",closeMenu));function mobileMenu(){hamburger.classList.toggle("active"),navMenu.classList.toggle("active")}function closeMenu(){hamburger.classList.remove("active"),navMenu.classList.remove("active")}const elements=document.querySelectorAll(".animated"),elementObserverCallback=a=>{a.forEach(a=>{a.isIntersecting&&a.target.classList.add("fadeInBottom")})},elementObserverOptions={},elementObserver=new IntersectionObserver(elementObserverCallback,elementObserverOptions);elements.forEach(a=>{elementObserver.observe(a)});