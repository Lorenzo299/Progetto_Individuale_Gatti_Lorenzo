const navbar = document.querySelector('#navbar')
window.addEventListener('scroll', ()=>
{
    if (window.scrollY>0) {
        navbar.classList.add('fix')
    } else{
        navbar.classList.remove('fix')
    }
})