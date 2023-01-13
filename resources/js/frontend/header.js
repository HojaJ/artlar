import $ from 'jquery';
let el = $('.lang');
let cur = el.find('.lang__current');
let options = el.find('.lang__options li');
let content = $('#content');

$('.price-number__increment').on('click', function (event ){
    let counting = $(this).closest('.price-number').find('.price_counting');
    let data = parseInt(counting.text());
    data = data + 1;
    counting.text(data);
});

$('.price-number__decrement').on('click', function (){
    let counting = $(this).closest('.price-number').find('.price_counting');
    let data = parseInt(counting.text());
    console.log(counting)
    if(data <= 1){
        return false;
    }else {
        data = data - 1;
        counting.text(data);
    }

});



el.on('click', function(e) {
    el.addClass('show-options');

    setTimeout(function() {
        el.addClass('anim-options');
    }, 50);

    setTimeout(function() {
        el.addClass('show-shadow');
    }, 200);
});
options.on('click', function(e) {
    e.stopPropagation();
    el.removeClass('anim-options');
    el.removeClass('show-shadow');

    let newLang = $(this).data('lang');

    cur.find('span').text(newLang);
    content.attr('class', newLang);

    setLang(newLang);

    options.removeClass('selected');
    $(this).addClass('selected');

    setTimeout(function() {
        el.removeClass('show-options');
    }, 600);
});

function getLang() {
    let lang;
    if (localStorage.getItem('currentLang') === null) {
        lang = cur.find('span').text();
    } else {
        lang = JSON.parse(localStorage.getItem('currentLang')).toLowerCase();
    }
    cur.find('span').text(lang);
    options.parent().find(`li[data-lang="${lang}"]`).addClass('selected');

    content.attr('class', lang);
}

getLang();

function setLang(newLang) {
    localStorage.setItem('currentLang', JSON.stringify(newLang).toLowerCase());
    content.attr('class', newLang);
}