const burger = document.getElementsByClassName('.burger');
const navbar = document.getElementsByClassName('.nav_bar');
const navlist = document.getElementsByClassName('.nav_list');

burger.addEventListener('click', () =>{
    navbar.classList.toggle('h_nav');
    navlist.classList.toggle('vclass');
});
alert("hello")