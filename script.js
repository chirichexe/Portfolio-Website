function changeBG(){
    var navbar = document.getElementById('header');
    var name = document.getElementById('name');
    var scrollValue = window.scrollY;
    if (scrollValue<900){
        navbar.style.backgroundColor = 'white';
        name.style.color='black';
    }else{
        navbar.style.backgroundColor = 'transparent';
        name.style.color='white';
    }
}

window.addEventListener('scroll', changeBG);