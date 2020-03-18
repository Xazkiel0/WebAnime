$('.nav-link').on('click', function (e) {
    e.preventDefault()

    if (this.hash != '') {
        let hash = this.hash

        $('html').animate({
            scrollTop: $(hash).offset().top
        }, 800);
    }
})
