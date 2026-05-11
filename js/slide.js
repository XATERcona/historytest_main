const slides = document.querySelector('.slides');
const slidesCount = document.querySelectorAll('.slide').length;
const dotsContainer = document.querySelector('.dots');


let index = 0;

for(let i=0; i<slidesCount; i++){
    const dot = document.createElement('span');
    dot.className='dot';
    dot.onclick=()=>go(i);
    dotsContainer.append(dot);
}

function go(i){
    index = i; 
    slides.style.transform = `translateX(-${i*100}%)`;
    document.querySelectorAll('.dot').forEach(d=>d.classList.remove('active'));
    dotsContainer.children[i].classList.add('active');
}

go(0);

setInterval(() => {
    index = (index + 1) % slidesCount; 
    go(index);
}, 10000);

const tests = document.querySelectorAll('.test');
const links = document.querySelectorAll('.link');


tests.forEach(test => {
    test.addEventListener('click', function() {
        tests.forEach(test=> test.classList.remove('active'));
        test.classList.toggle('active');   
})
})



