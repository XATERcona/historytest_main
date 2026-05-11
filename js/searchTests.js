const selectLevel = document.querySelector("#filterLevel");
const tests = document.querySelectorAll(".test");
const likes = document.querySelectorAll(".favourite");

tests.forEach(test => {
    console.log(test.getAttribute("data-level"));
}
)

selectLevel.addEventListener("change", ()  =>{
    let level = selectLevel.value
    tests.forEach(test => {
      if(level == test.getAttribute("data-level") || level == 'all'){
        test.style.display = "block";
      } else{
        test.style.display = "none";
      }
    })
})

const links = document.querySelectorAll('.link');

tests.forEach(test => {
    test.addEventListener('click', function() {
        tests.forEach(test=> test.classList.remove('active'));
        test.classList.toggle('active');   
})
})