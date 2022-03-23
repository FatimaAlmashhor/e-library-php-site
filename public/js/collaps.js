export const get_one = (element) => document.querySelector(element);
export const get_all = (element) => document.querySelectorAll(element);
const collaps = get_all('.collaps_item_header');

collaps.forEach(collap => {
    collap.addEventListener('click', (e) => {
        console.log(collap.nextSibling.nextElementSibling);
        // document.previousSibling
        let collap_body = collap.nextSibling.nextElementSibling;
        // console.log('[collap sibliing]', collap_body);
        collap_body.classList.toggle('active')
    })
})