function changeBG(){
    var navbar = document.getElementById('header');
    var name = document.getElementById('name');
    var remainingNav = document.getElementById('navbar');
    var scrollValue = window.scrollY;
    if (scrollValue<900){
        navbar.style.backgroundColor = '#F8F2D4';
        remainingNav.style.boxShadow = '0px 0px 0px';
        name.style.color='black';
    }else{
        navbar.style.backgroundColor = 'transparent';
        remainingNav.style.boxShadow = '10px 10px 10px black';
        name.style.color='#F8F2D4';
    }
}

window.addEventListener('scroll', changeBG);