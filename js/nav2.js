const navSlide =() =>{
    const hamberger = document.querySelector('.hamberger');
    const nav = document.querySelector('.links');
    const navLinks = document.querySelectorAll('.links li');
    var header = document.getElementsByTagName('header')[0];
    var isHeaderExpanded = false;
    
    hamberger.addEventListener('click',()=>{
    // toggle nav
     nav.classList.toggle('nav-active');

      //
      if (isHeaderExpanded) {
        header.style.minHeight = '0';
        isHeaderExpanded = false;
      } else {
        header.style.minHeight = '100vh';
        isHeaderExpanded = true;
      }
     

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