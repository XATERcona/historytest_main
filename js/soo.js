const soo = document.querySelector('.soo');
const btns = document.querySelectorAll('.btnTest');
const close = document.querySelector('.close');


btns.forEach(btnTest => {
    btnTest.addEventListener('click', function(e) {
        e.preventDefault();  
        soo.classList.add('active');
    });
});

function closeModal() {
    soo.classList.remove('active');
}

soo.addEventListener('click', (e) => {
    if (e.target === e.currentTarget) {
        closeModal();
    }
});

if (close) {
    close.addEventListener('click', closeModal);
}

