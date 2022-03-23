const getOne = (element) => document.querySelector(element);

getOne('#humburger').addEventListener('click', (e) => {
    getOne('.nav-list').classList.toggle('active')
    console.log(e.target.getAttribute('src'));
    // e.target.setAttribute('src', './assets/svgs/close.svg')
})
