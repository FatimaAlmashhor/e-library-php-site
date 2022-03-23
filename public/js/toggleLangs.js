const switch_lang = document.getElementById('switch_lang');
const body = document.getElementsByTagName('body')

let cuurentLang = localStorage.getItem('lang')
const checkLang = () => {
    console.log('[before the storage]', cuurentLang);
    if (cuurentLang != null) {
        if (cuurentLang === 'en') {
            body[0].classList.add('en')
        }
        else {
            body[0].classList.remove('en')

        }
    } else {
        body[0].classList.add('en')
    }
    console.log('[afer the chainge]', cuurentLang);
    localStorage.setItem('lang', cuurentLang)
    switch_lang.innerText = cuurentLang === 'en' ? 'english' : 'العربية'
}
switch_lang.innerText = body[0].className === '' ? 'english' : 'العربية'
switch_lang.addEventListener('click', (e) => {
    cuurentLang === 'en' ? 'ar' : 'en'
    body[0].classList.toggle('en')
    switch_lang.innerText = body[0].className === '' ? 'english' : 'العربية'
    // checkLang()
    // console.log('[after the storage ]', localStorage.getItem('lang'));
})
// checkLang();