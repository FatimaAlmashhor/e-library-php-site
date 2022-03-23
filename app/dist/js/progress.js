const getAll = (element) => document.querySelectorAll(element)
const getone = (element) => document.querySelector(element)

const steps = getAll('.step')
const next = getone('#next')
const back = getone('#back')

let progress = 0;
const progressNumbers = steps.length;

// good UX for the init 
back.style.display = 'none'

next.addEventListener('click', (e => {
    back.style.display = 'inline'
    if (progress >= progressNumbers - 1) {
        console.log('stop');
    }
    else {
        progress++;
        steps[progress].classList.add('active')
        getone(`[data-progress-content='${progress}']`).classList.remove('hidden')
        if (progress > 0) {
            getone(`[data-progress-content='${progress - 1}']`).classList.add('hidden')
        }
    }
    if (progress === progressNumbers - 1) {
        if (next.innerText === 'تم') {
            window.location.href = '../'
        }
        next.innerText = 'تم'
    }
}))
back.addEventListener('click', (e => {
    console.log('[progress]', progress);
    if (progress > 0) {
        steps[progress].classList.remove('active')
        progress--;
        getone(`[data-progress-content='${progress}']`).classList.remove('hidden')
        if (progress < progressNumbers) {
            getone(`[data-progress-content='${progress + 1}']`).classList.add('hidden')
        }

    }
    else {
        console.log('stop prev');

    }
    if (progress == 0) {
        back.style.display = 'none'
    }
}))
