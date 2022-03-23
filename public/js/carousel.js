const left = document.querySelector('.slider_col .left')
const right = document.querySelector('.slider_col .right')
let slider_length = document.querySelector('.slider_list')
let slider_col_warrper = document.querySelector('.slider_col_warrper')
// document.clientWidth  for get the client width of the element without borders
// document.offsetWidth for get the client width of the element with borders

console.log('[list childern]', slider_length.children);
left.addEventListener('click', () => {
    console.log('[right]', slider_col_warrper.getBoundingClientRect().right);
    console.log('[clientWidth]', slider_length.clientWidth);
    if (slider_length.clientWidth > slider_col_warrper.getBoundingClientRect().right) {

        slider_length.style.marginRight = ` ${slider_col_warrper.getBoundingClientRect().right - slider_length.clientWidth}px`
        // slider_length.style.marginRight = `100%`
    }
})
right.addEventListener('click', () => {
    console.log('[clientWidth]', slider_length.clientWidth);
    console.log('[left]', slider_col_warrper.getBoundingClientRect().right);
    if (slider_length.clientWidth < slider_col_warrper.getBoundingClientRect().right) {
        slider_length.style.marginRight = ` -${slider_length.clientWidth - slider_col_warrper.getBoundingClientRect().left}px`
    }

})