function changeBG(){
    var navbar = document.getElementById('header');
    var name = document.getElementById('name');
    var namePoint = document.getElementById('none');
    var remainingNav = document.getElementById('navbar');
    var opening = document.getElementById('opening');
    var scrollValue = window.scrollY;
    if (scrollValue<700){
        navbar.style.backgroundColor = '#F8F2D4';
        remainingNav.style.boxShadow = '0px 0px 0px';
        name.style.color='black';
        namePoint.style.color = 'black';
        opening.style.color = 'black';
    }else{
        navbar.style.backgroundColor = 'transparent';
        if (document.body.offsetWidth <= 600){
            remainingNav.style.boxShadow = '0px 0px 0px';
            remainingNav.style.backgroundColor = 'transparent';
            opening.style.color = '#F8F2D4';
        }else{
            remainingNav.style.boxShadow = '10px 10px 10px black';
            remainingNav.style.backgroundColor = 'F8F2D4';
        }
        name.style.color='transparent';
        namePoint.style.color = 'transparent';
    }
}

window.addEventListener('scroll', changeBG);

let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');
       
        if(top >= offset && top <= offset + height){
            navLinks.forEach(links =>{
                links.classList.remove('active');
                document.querySelector('header nav a [href*=' + id + ']').classList.add('active');
            });
        };
    });
};


// Change background and text color of navbar on scroll
// Navbar active links
/*
let navLinks = document.querySelectorAll('header nav a');

navLinks.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        const targetId = link.getAttribute('href');
        const targetSection = document.querySelector(targetId);
        const targetOffset = targetSection.offsetTop - 70;

        window.scrollTo({
            top: targetOffset,
            behavior: 'smooth'
        });
    });
});

// Scroll event for navbar active links
window.addEventListener('scroll', () => {
    let fromTop = window.scrollY + 70;

    navLinks.forEach(link => {
        const section = document.querySelector(link.getAttribute('href'));
        if (
            section.offsetTop <= fromTop &&
            section.offsetTop + section.offsetHeight > fromTop
        ) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});
*/
