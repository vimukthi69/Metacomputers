const navSlide =() =>{
    const hamberger = document.querySelector('.hamberger');
    const nav = document.querySelector('.links');
    const navLinks = document.querySelectorAll('.links li');
    
    hamberger.addEventListener('click',()=>{
    // toggle nav
     nav.classList.toggle('nav-active');

     //animate links
    navLinks.forEach((link,index) => {
        if (link.style.animation){
            link.style.animation = ''
        } else {
            link.style.animation =`navLinkFade 0.5s ease forwards ${index / 7 +0.5}s`;
        }
    });
    // hamberger animation
    hamberger.classList.toggle('toggle');

    });
   
}
navSlide();