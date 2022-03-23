
const cart_counter = document.querySelector('#cart-counter')

let current_counter = 0;
let storeCart = localStorage.getItem('cart_counter');
window.addEventListener('DOMContentLoaded', () => {
    // add to cart function 

    storeCart = storeCart === null ? 0 : storeCart;
    current_counter = storeCart;
    cart_counter.innerText = current_counter > 9 ? "9+" : current_counter;
    document.querySelectorAll('.cart_icon').forEach(element => {
        element.addEventListener('click', (e) => {
            current_counter++;
            cart_counter.innerText = current_counter > 9 ? "9+" : current_counter;
            localStorage.setItem('cart_counter', current_counter)
        })
    })
})  
