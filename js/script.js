const tabs = document.querySelectorAll('.tab');
const links =  document.querySelectorAll('.link');

let Activeindex = 0;

tabs[Activeindex].classList.add('active');
links.forEach((link, index) => {
link.addEventListener('click', () => {
    tabs[Activeindex].classList.remove('active');
    Activeindex = index;
    tabs[Activeindex].classList.add('active');
});
});
