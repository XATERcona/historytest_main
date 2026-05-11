const tests = document.querySelectorAll('.test');
const links = document.querySelectorAll('.link');


tests.forEach(test => {
    test.addEventListener('click', function() {
        tests.forEach(test=> test.classList.remove('active'));
        test.classList.toggle('active');   
})
})