const arrow_left = document.querySelector('.arrow_left')
const arrow_right = document.querySelector('.arrow_right')
const slider_warrper = document.querySelector('.slider_warrper')
const dots = document.querySelectorAll('.dot')

let current = 0;// here the number for doublicate the length 
const sliderNu = 4;

function deleteAllDots() {
    dots.forEach(e => e.classList.remove('active'))
}

arrow_left.addEventListener('click', (e) => {

    autoSlide()
})
arrow_right.addEventListener('click', (e) => {
    deleteAllDots();
    current <= 0 ? current = sliderNu - 1 : --current;
    slider_warrper.style.setProperty('--dublicateNu', current);
    dots[current].classList.add('active')

})

// the function for auto header
function autoSlide() {
    deleteAllDots();
    current > sliderNu - 2 ? current = 0 : ++current;
    slider_warrper.style.setProperty('--dublicateNu', current);
    dots[current].classList.add('active')
}
setInterval(() => {
    autoSlide()
}, 5000);