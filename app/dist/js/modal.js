const get_arr = (element) => document.querySelectorAll(element);
const get_one = (element) => document.querySelector(element);

const modal = get_one('#modal');
const login = get_one('#login');
const register = get_one('#register');
const arraws = get_one('.arraws');
const image_gallary = get_one('#image-gallery');

// close the modal
(() => get_one('#close_modal').addEventListener('click', () => {
    try {
        modal.classList.add('hidden');
        image_gallary.classList.add('hidden');
        login.classList.add('hidden');
        register.classList.add('hidden');
        arraws.classList.add('hidden');
        // remove the last children
        image_gallary.removeChild(image_gallary.lastChild);
    } catch (error) {

    }
}))()

//for show the sign up
get_one('#create_account')
    .addEventListener('click', () => {
        login.classList.add('hidden');
        register.classList.remove('hidden');
    });



// for show the login 
get_one('#login_in_existing_account')
    .addEventListener('click', () => {
        login.classList.remove('hidden');
        register.classList.add('hidden');
        arraws.classList.add('hidden');
    })

// for all the btn that need to one the login modal 
get_one('.login-btn').addEventListener('click', (e) => {
    console.log('licking me');
    modal.classList.remove('hidden');
    login.classList.remove('hidden');
    arraws.classList.add('hidden');
    console.log(get_one('#modal').classList);
})

let current_image = null;
const images = get_arr('.book img');

const create_image = (e) => {
    let src = e.getAttribute('src')
    let img = document.createElement('img');
    img.setAttribute('src', src);
    image_gallary.append(img)
}
// for gallary image 
images.forEach((element, index) => {
    current_image = index;
    element.addEventListener('click', (e) => {
        arraws.classList.remove('hidden');
        image_gallary.classList.remove('hidden')
        modal.classList.remove('hidden')
        e.target.classList.add('active')
        create_image(e.target)
    })
});

//for show the the previs image
(() => {
    try {
        get_one('#left')
            .addEventListener('click', () => {
                if (current_image <= 0) {
                    current_image = images.length;
                }
                current_image--;
                console.log(current_image);
                image_gallary.children[1].setAttribute('src', images[current_image].getAttribute('src'))
            })
        get_one('#right')
            .addEventListener('click', () => {
                if (current_image >= images.length) {
                    current_image = 0;
                }
                image_gallary.children[1].setAttribute('src', images[current_image].getAttribute('src'))
                console.log(current_image);
                current_image++;
            })
    } catch (error) {

    }
}
)()