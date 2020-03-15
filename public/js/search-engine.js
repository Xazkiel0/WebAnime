const searchBtn = document.getElementById('search-btn')
const search = document.getElementById('search')
const placeholder = document.getElementById('placeholder')
const tip = document.getElementById('tip')

searchBtn.addEventListener('click', () => {
    search.style.width = '80%';
    search.style.paddingLeft = '45px';
    search.style.cursor = 'text';
    search.focus();

    var i = 0;
    var message = 'SEARCH FOR ARTICLE(ANIME,GAME,TECHNOLOGY,FILM,ETC,..)';
    var speed = 100;

    function typeWriter() {
        if (i < message.length) {
            msg = search.getAttribute('placeholder') + message.charAt(i);
            search.setAttribute('placeholder', msg)
            i++;
            setTimeout(typeWriter, speed);
        }   
    }

    typeWriter();
})

search.addEventListener('keydown', () => {
    tip.style.visibility = 'visible';
    tip.style.opacity = '1';
})