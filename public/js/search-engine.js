const tip = document.getElementById('tip')



let anotherSpeed = 2000,
    onRun = '',
    speed = 200,
    message = 'SEARCH FOR ARTICLE',
    kategori = '["ANIME", "GAME", "TECHNOLOGY", "FILM"]'


let TypingObj = function (viewObj, listToView, time, switched) {
    this.switched = switched
    this.viewObj = viewObj
    this.msg = ''
    this.listToView = listToView
    this.time = time
    this.stop = 'SEARCH FOR'
    this.changed = message
    this.isDelete = false
    this.loop = 0
    this.run()
};
TypingObj.prototype.run = function () {


    let i = this.loop % this.listToView.length
    var el = this.viewObj

    if (this.isDelete) {
        this.msg = this.changed.slice(0, this.msg.length - 1)
        this.time = (speed * Math.random()) + speed / 2
    } else {
        this.msg = this.changed.slice(0, this.msg.length + 1)

    }
    if (!this.isDelete && this.msg == this.changed) {
        this.time = anotherSpeed
        this.isDelete = true
    } else if (this.isDelete && this.msg == this.stop) {
        this.changed = this.msg
        this.changed += ' ' + this.listToView[i]
        this.isDelete = false

        this.loop++
        this.time = 50 + (speed / 2)
    }


    el.attr('placeholder', this.msg);
    // el.text(this.msg)

    let that = this
    if (this.switched) {

        onRun = setTimeout(function () {

            that.run()
        }, this.time)
    } else {
        el.attr('placeholder', '')

        clearTimeout(onRun)
    }
}
let isClick = false
var switched = false
$('#search-btn').click(function (e) {
    e.preventDefault();
    let thatId = this.getAttribute('id')
    $(`#${thatId}`).toggleClass('show')

    if ($(`#${thatId}`).hasClass('show')) {

        search.style.width = '80%';
        search.style.paddingLeft = '45px';
        search.style.cursor = 'text';
        search.focus();
        switched = true
    } else {
        search.style.width = '18px';
        search.style.paddingLeft = '18px';
        switched = false
    }

    new TypingObj($('#search'), JSON.parse(kategori), speed, switched);
});

$('#search').on('keydown', function () {
    tip.style.visibility = 'visible';
    tip.style.opacity = '1';
})
