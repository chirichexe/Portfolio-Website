function changeBG(){
    var navbar = document.getElementById('header');
    var name = document.getElementById('name');
    var namePoint = document.getElementById('none');
    var remainingNav = document.getElementById('navbar');
    var scrollValue = window.scrollY;
    if (scrollValue<900){
        navbar.style.backgroundColor = '#F8F2D4';
        remainingNav.style.boxShadow = '0px 0px 0px';
        name.style.color='black';
        namePoint.style.color = 'black';
    }else{
        navbar.style.backgroundColor = 'transparent';
        remainingNav.style.boxShadow = '10px 10px 10px black';
        name.style.color='transparent';
        namePoint.style.color = 'transparent';
    }
}

window.addEventListener('scroll', changeBG);

//navbar active 

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