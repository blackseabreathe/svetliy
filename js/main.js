//maskedInput
(function(e){function t(){var e=document.createElement("input"),t="onpaste";return e.setAttribute(t,""),"function"==typeof e[t]?"paste":"input"}var n,a=t()+".mask",r=navigator.userAgent,i=/iphone/i.test(r),o=/android/i.test(r);e.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},dataName:"rawMaskFn",placeholder:"_"},e.fn.extend({caret:function(e,t){var n;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof e?(t="number"==typeof t?t:e,this.each(function(){this.setSelectionRange?this.setSelectionRange(e,t):this.createTextRange&&(n=this.createTextRange(),n.collapse(!0),n.moveEnd("character",t),n.moveStart("character",e),n.select())})):(this[0].setSelectionRange?(e=this[0].selectionStart,t=this[0].selectionEnd):document.selection&&document.selection.createRange&&(n=document.selection.createRange(),e=0-n.duplicate().moveStart("character",-1e5),t=e+n.text.length),{begin:e,end:t})},unmask:function(){return this.trigger("unmask")},mask:function(t,r){var c,l,s,u,f,h;return!t&&this.length>0?(c=e(this[0]),c.data(e.mask.dataName)()):(r=e.extend({placeholder:e.mask.placeholder,completed:null},r),l=e.mask.definitions,s=[],u=h=t.length,f=null,e.each(t.split(""),function(e,t){"?"==t?(h--,u=e):l[t]?(s.push(RegExp(l[t])),null===f&&(f=s.length-1)):s.push(null)}),this.trigger("unmask").each(function(){function c(e){for(;h>++e&&!s[e];);return e}function d(e){for(;--e>=0&&!s[e];);return e}function m(e,t){var n,a;if(!(0>e)){for(n=e,a=c(t);h>n;n++)if(s[n]){if(!(h>a&&s[n].test(R[a])))break;R[n]=R[a],R[a]=r.placeholder,a=c(a)}b(),x.caret(Math.max(f,e))}}function p(e){var t,n,a,i;for(t=e,n=r.placeholder;h>t;t++)if(s[t]){if(a=c(t),i=R[t],R[t]=n,!(h>a&&s[a].test(i)))break;n=i}}function g(e){var t,n,a,r=e.which;8===r||46===r||i&&127===r?(t=x.caret(),n=t.begin,a=t.end,0===a-n&&(n=46!==r?d(n):a=c(n-1),a=46===r?c(a):a),k(n,a),m(n,a-1),e.preventDefault()):27==r&&(x.val(S),x.caret(0,y()),e.preventDefault())}function v(t){var n,a,i,l=t.which,u=x.caret();t.ctrlKey||t.altKey||t.metaKey||32>l||l&&(0!==u.end-u.begin&&(k(u.begin,u.end),m(u.begin,u.end-1)),n=c(u.begin-1),h>n&&(a=String.fromCharCode(l),s[n].test(a)&&(p(n),R[n]=a,b(),i=c(n),o?setTimeout(e.proxy(e.fn.caret,x,i),0):x.caret(i),r.completed&&i>=h&&r.completed.call(x))),t.preventDefault())}function k(e,t){var n;for(n=e;t>n&&h>n;n++)s[n]&&(R[n]=r.placeholder)}function b(){x.val(R.join(""))}function y(e){var t,n,a=x.val(),i=-1;for(t=0,pos=0;h>t;t++)if(s[t]){for(R[t]=r.placeholder;pos++<a.length;)if(n=a.charAt(pos-1),s[t].test(n)){R[t]=n,i=t;break}if(pos>a.length)break}else R[t]===a.charAt(pos)&&t!==u&&(pos++,i=t);return e?b():u>i+1?(x.val(""),k(0,h)):(b(),x.val(x.val().substring(0,i+1))),u?t:f}var x=e(this),R=e.map(t.split(""),function(e){return"?"!=e?l[e]?r.placeholder:e:void 0}),S=x.val();x.data(e.mask.dataName,function(){return e.map(R,function(e,t){return s[t]&&e!=r.placeholder?e:null}).join("")}),x.attr("readonly")||x.one("unmask",function(){x.unbind(".mask").removeData(e.mask.dataName)}).bind("focus.mask",function(){clearTimeout(n);var e;S=x.val(),e=y(),n=setTimeout(function(){b(),e==t.length?x.caret(0,e):x.caret(e)},10)}).bind("blur.mask",function(){y(),x.val()!=S&&x.change()}).bind("keydown.mask",g).bind("keypress.mask",v).bind(a,function(){setTimeout(function(){var e=y(!0);x.caret(e),r.completed&&e==x.val().length&&r.completed.call(x)},0)}),y()}))}})})(jQuery);
$(document).ready(function() {

// домен сайта
var fullDomainString = window.location.href, //полный адрес вообще
siteHost = location.host, // только домен
domainName = location.protocol+'//'+location.host; //протокол и домен
if($('.domainName').length){
$('.domainName').text(domainName);
}
//маска input
$.mask.definitions['~']='[9]';
$("input[name='tell']").mask("+7 (~99) 999-99-99");


// MODAL ///////////////////////////////////////////////////

// callback
$(document).on('click', '.callback', function(){
$('#callback').arcticmodal();
});


//privacy
$(document).on('click', '.privacy', function(){
$('#privacy').arcticmodal();});



// typical request
$(document).on('click', '.requestBtn', function(){

var dataTitle = $(this).attr('data-title');

$('#requestBox .formTitle').empty().html(dataTitle);
$('#requestBox input[name="requestName"]').val(dataTitle);
$('#requestBox').arcticmodal();
});

// calc modal form
$(document).on('click', '.mortgageBtn', function(){

var dataTitle = $(this).attr('data-title'),
appartmentPrice = $('.calc input[name="appartmentPrice"]').val(),
loanTerm = $('.calc input[name="loanTerm"]').val(),
initialPayment = $('.calc input[name="initialPayment"]').val(),
interestRate = $('.calc input[name="interestRate"]').val(),
paymentPerMonth = $('.paymentPerMonth').text();

$('#calcBox .formTitle').empty().html(dataTitle);
$('#calcBox input[name="requestName"]').val(dataTitle);
$('#calcBox input[name="appartmentPrice"]').val(appartmentPrice);
$('#calcBox input[name="loanTerm"]').val(loanTerm);
$('#calcBox input[name="initialPayment"]').val(initialPayment);
$('#calcBox input[name="interestRate"]').val(interestRate);
$('#calcBox input[name="paymentPerMonth"]').val(paymentPerMonth);


$('#calcBox').arcticmodal();
});




// появление блоков
if($('.appear').length){
$('.appear').each(function(){
var appear = $(this);
appearing(appear);
});
$(window).on('scroll resize', function(event){
$('.appear').each(function(){
var appear = $(this);
appearing(appear);
});
});
}

function appearing(appear){
var appearOffsetTop = appear.offset().top,
scroll = $(window).scrollTop() + $(window).height() - appear.outerHeight() - 50;
if (scroll >= appearOffsetTop) appear.addClass('appearing');
else appear.removeClass('appearing');
}




// убрать все ненужные символы в атрибуте href=tel:
$('a[href^="tel"]').each(function(){
var the_phone = $(this);
var phoneAttr = the_phone.attr('href');
var finalHref = "tel:"+phoneAttr.replace(/[^+\d]/g,'');
the_phone.attr('href', finalHref);
});
// убрать все ненужные символы в whatsapp tel href attr:
if($('.waHref').length){
$('.waHref').each(function(){
var the_wa = $(this);
var waAttr = the_wa.attr('href');
var finalwaHref = "https://wa.me/"+waAttr.replace(/[^\d]/g,'');
the_wa.attr('href', finalwaHref);
});
}
//заглавная первая буква каждого слова
$(".uppercase").on("keyup",function(){
var text = $(this).val(); 
var new_text = text.replace(/(^|\s)\S/g, function(a) {return a.toUpperCase()});
$(this).val(new_text);
});

//скролл в меню
$(document).on('click', '.menu li, .footerMenu li', function(){
var toTarget = $(this).attr('data-target');
if($(document).find('.toTarget[data-target="'+toTarget+'"]')){
$('html, body').animate({scrollTop: $($('.toTarget[data-target="'+toTarget+'"]')).offset().top}, 800, 'linear');
}
});

// скролл к форме
$(document).on('click', '.toForm', function(){
$('html, body').animate({scrollTop: $($('footer')).offset().top}, 800, 'linear');
});

// скрол к калькулятору
$(document).on('click', '.toCalc', function(){
$('html, body').animate({scrollTop: $($('.mortgage')).offset().top}, 800, 'linear');
});

// скролл к преимуществам
$('.allOfPrivileges').on('click', function(){
$('html, body').animate({scrollTop: $($('.superiorities')).offset().top}, 800, 'linear');
});




// CALCULATE IT
$('.calc input[type="tel"]').on('input', function(e){

if($(this).val().replace(/[^0-9]/g, '').length <= 0){
$(this).val(0);
return false;
}

$(this).val(parseFloat($(this).val().replace(/[^0-9]/g, '')).toLocaleString('ru-RU'));

var calcAppartmentPrice = $('.calc input[name="appartmentPrice"]').val().replace(/[^0-9]/g, ''),
calcLoanTerm = $('.calc input[name="loanTerm"]').val().replace(/[^0-9]/g, ''),
calcLoanTermMonths = calcLoanTerm * 12,
calcInitialPayment = $('.calc input[name="initialPayment"]').val().replace(/[^0-9]/g, ''),
calcInterestRate = $('.calc input[name="interestRate"]').attr('data-rate'),
calcInterestRatePerMonth = (calcInterestRate / 100 / 12);

if(parseInt(calcInitialPayment) >= parseInt(calcAppartmentPrice)){
$('.paymentPerMonth span').empty().text('0');
return false;
}



setTimeout(function(){

// если все поля калькулятора заполнены
if(calcAppartmentPrice >= 0 && calcLoanTerm >= 0 && calcInitialPayment >= 0 && calcInterestRate >= 0){

var x = Math.pow(1 + calcInterestRatePerMonth, calcLoanTermMonths);
var mortgagePerMonth = ((calcAppartmentPrice - calcInitialPayment) * x * calcInterestRatePerMonth) / (x - 1);


mortgagePerMonth = parseInt(mortgagePerMonth).toFixed(0);
mortgagePerMonthResult = parseInt(mortgagePerMonth).toLocaleString('ru-RU'); // replace('/\B(?=(\d{3})+(?!\d))/g', ' ')

$('.paymentPerMonth span').empty().html(mortgagePerMonthResult);

}

}, 100);


});




$('.calc input[type="tel"]').on('change', function(e){
var thisVal = parseInt($(this).val()),
minVal = parseInt($(this).closest('.input').find('input[type="range"]').attr('min')),
maxVal = parseInt($(this).closest('.input').find('input[type="range"]').attr('max'));

if(thisVal < minVal || thisVal > maxVal){
$(this).val(minVal);

if(Math.abs(thisVal-minVal) <= Math.abs(maxVal-thisVal)) {
$(this).val(minVal);
}
else{
$(this).val(maxVal);
}

return false;
}

$(this).val(parseFloat($(this).val().replace(/[^0-9]/g, '')).toLocaleString('ru-RU'));
$(this).closest('.input').find('input[type="range"]').val($(this).val().replace(/[^0-9]/g, '')).trigger('input');
});

$('.calc input[type="tel"]').on('blur', function(e){
$(this).trigger('change');
});

//enter клик по полю в форме
$(document).on('keydown', '.calc input[type="tel"]', function(e){
if(e.keyCode === 13 || e.key === "Enter"){
e.preventDefault();
e.stopPropagation();
$(this).trigger('change');
}
});



// crossbrowsered input range
$(document).on('input', '.calc input[type="range"]', function(){
var rangeVal = $(this).val(),
rangeWidth = $(this).width().toFixed(0),
rangeMax = $(this).attr('max'),
rangeMin = $(this).attr('min'),
circleWidth = 16 / rangeWidth * 100; // 16 - ширина бегунка range из css
if(!rangeMax) rangeMax = 100;
if(!rangeMin) rangeMax = 0;

var progressWidth = (rangeVal - rangeMin) / (rangeMax - rangeMin) * 100;
progressWidth = progressWidth.toFixed(0);

if(progressWidth < 0) progressWidth = 0;
if(progressWidth > 98) progressWidth = progressWidth - circleWidth;

if(progressWidth > 100) progressWidth = 100;


$(this).closest('.webkitTrackProgress').find('.webkitProgress').css('width', progressWidth+'%');
$(this).closest('.input').find('input[type="tel"]').val(rangeVal).trigger('input');
// /\B(?=(\d{3})+(?!\d))/g, ' '

});


// триггер поля при загрузке страницы
$('.calc input[type="tel"], .calc input[type="range"]').trigger('input');







//табы
$('.tabs').each(function(){
$(this).find('.the_tab').eq(0).addClass('active').show();
$(this).find('.tabsList li:eq(0)').addClass('active');
});
$('.tabs li').on('click',function() {
if($(this).hasClass('active')) return false;
var index = $(this).index();
$(this).closest('.tabs').find('li').removeClass('active');
$(this).addClass('active');
$(this).closest('.tabs').find('.the_tab').removeClass('active').hide();
$(this).closest('.tabs').find('.the_tab').eq(index).addClass('active').fadeIn(1000);
});


// табы количество комнат
if($('.roomsCountsTab').length){
$('.appartments .the_tab').each(function(){
$(this).find('.roomsCountsTab').eq(0).addClass('active').show();
});
}

$('.roomsCounts span').on('click', function(){
if($(this).hasClass('active')) return false;
var roomsCountTabIndex = $(this).index();
$(this).closest('.roomsCounts').find('span').removeClass('active');
$(this).addClass('active');


$(this).closest('.the_tab').find('.roomsCountsTab').removeClass('active').hide();
$(this).closest('.the_tab').find('.roomsCountsTab').eq(roomsCountTabIndex).addClass('active').fadeIn(1000);

});



// слайдер помещений
if($('.appartmentsSlider').length){

$('.appartmentsSlider').each(function(){
$(this).find('.item').each(function(index){
$(this).attr('data-position', index);
});
});


setTimeout(function(){
$('.appartmentsSlider').owlCarousel({
loop:true,
center:true,
dots:false,
navText:['<svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.96967 0.46967C1.26256 0.176777 1.73744 0.176777 2.03033 0.46967L6.03033 4.46967C6.32322 4.76256 6.32322 5.23744 6.03033 5.53033L2.03033 9.53033C1.73744 9.82322 1.26256 9.82322 0.96967 9.53033C0.676777 9.23744 0.676777 8.76256 0.96967 8.46967L4.43934 5L0.96967 1.53033C0.676777 1.23744 0.676777 0.762563 0.96967 0.46967Z" fill="#1B1B1B"/></svg>', '<svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.96967 0.46967C1.26256 0.176777 1.73744 0.176777 2.03033 0.46967L6.03033 4.46967C6.32322 4.76256 6.32322 5.23744 6.03033 5.53033L2.03033 9.53033C1.73744 9.82322 1.26256 9.82322 0.96967 9.53033C0.676777 9.23744 0.676777 8.76256 0.96967 8.46967L4.43934 5L0.96967 1.53033C0.676777 1.23744 0.676777 0.762563 0.96967 0.46967Z" fill="#1B1B1B"/></svg>'],
responsive:{
0:{nav:false,items:1,stagePadding:70,margin:0},
360:{nav:false,items:1,stagePadding:90,margin:0},
414:{nav:false,items:1,stagePadding:119,margin:0},
961:{nav:true,items:3,margin:10}
}
});


}, 100);

}


// кол-во фото в помещении
if($('.appartmentInfo').length){
$('.appartmentInfo').each(function(){
var appartmentImages = $(this).find('.apartmentImage').length;
if(!appartmentImages) appartmentImages = 0;
$(this).find('.countImages span').text(appartmentImages);
});
}



// подробнее о помещении
$(document).on('click', '.appartmentInfo', function(e){
$('html, body').animate({scrollTop: $($('.appartments')).offset().top + $('.appartments .tabs ul').outerHeight()}, 800, 'linear');
$('#appartmentDetail').css('left', '-50%');
var owl = $(this).closest('.appartmentsSlider'),
countNotClonedSlides = owl.find('.owl-item').not('.cloned').length,
origIndex = $(this).closest('.item').attr('data-position'),
firstSlideIndex = owl.find('.owl-item').not('.cloned').eq(0).index(),
lastSlideIndex = owl.find('.owl-item:not(.cloned):last').index(),
currentSlideIndex = $(this).closest('.owl-item').index(),
apartmentNext = parseInt($(this).closest('.owl-item').index())+1,
images = [],
layouts = [],
renovations = [],
roomsCount = $(this).attr('data-roomsCount'),
quadrature = $(this).attr('data-quadrature'),
price = $(this).attr('data-price'),
mortgagePrice = $(this).attr('data-mortgage-price'),
promo = $(this).attr('data-promo'),
roomQuadrature = $(this).attr('data-room-quadrature'),
youtube = $(this).attr('data-youtube');


$(this).find('.apartmentImage').each(function(){
images.push($(this).attr('data-small')+'||'+$(this).attr('data-large'));
});

$(this).find('.layout').each(function(){
layouts.push($(this).attr('data-small')+'||'+$(this).attr('data-large'));
});

$(this).find('.renovation').each(function(){
renovations.push($(this).attr('data-small')+'||'+$(this).attr('data-large'));
});


$('.appartmentDetailSlider').each(function(){
$(this).trigger('destroy.owl.carousel');
$(this).find('.owl-stage-outer').children().unwrap();
$(this).empty();
});


// фото
$.each(images, function(key, value){

var href = value.split('||'),
small = href[0],
large = href[1];
$('.appartmentDetailSlider.images').append('<a href="'+large+'" class="expandImage ovh" data-fancybox="images"><img src="'+small+'" alt="ЖК светлый - квартира"></a>');
});

// планиовки
$.each(layouts, function(key, value){

var href = value.split('||'),
small = href[0],
large = href[1];
$('.appartmentDetailSlider.layouts').append('<a href="'+large+'" class="expandImage ovh" data-fancybox="layouts"><img src="'+small+'" alt="ЖК светлый - квартира"></a>');
});

// отделка
$.each(renovations, function(key, value){

var href = value.split('||'),
small = href[0],
large = href[1];
$('.appartmentDetailSlider.renovations').append('<a href="'+large+'" class="expandImage ovh" data-fancybox="renovations"><img src="'+small+'" alt="ЖК светлый - квартира"></a>');
});


// слайдеры
$('.appartmentDetailSlider').each(function(){
var slider = $(this);
slider.owlCarousel({
items:1,
loop:false,
rewind:true,
margin:0,
dots:true,
nav:true,
navText:['<svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.96967 0.46967C1.26256 0.176777 1.73744 0.176777 2.03033 0.46967L6.03033 4.46967C6.32322 4.76256 6.32322 5.23744 6.03033 5.53033L2.03033 9.53033C1.73744 9.82322 1.26256 9.82322 0.96967 9.53033C0.676777 9.23744 0.676777 8.76256 0.96967 8.46967L4.43934 5L0.96967 1.53033C0.676777 1.23744 0.676777 0.762563 0.96967 0.46967Z" fill="#1B1B1B"/></svg>', '<svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.96967 0.46967C1.26256 0.176777 1.73744 0.176777 2.03033 0.46967L6.03033 4.46967C6.32322 4.76256 6.32322 5.23744 6.03033 5.53033L2.03033 9.53033C1.73744 9.82322 1.26256 9.82322 0.96967 9.53033C0.676777 9.23744 0.676777 8.76256 0.96967 8.46967L4.43934 5L0.96967 1.53033C0.676777 1.23744 0.676777 0.762563 0.96967 0.46967Z" fill="#1B1B1B"/></svg>'],
});
});


// следующее помещение

var apartmentNext = parseInt(currentSlideIndex) + 1;
if(parseInt(apartmentNext) > parseInt(lastSlideIndex)) apartmentNext = firstSlideIndex;


var item = owl.find('.owl-item').eq(apartmentNext),
apartmentNextRoomsCount = item.find('.appartmentInfo').attr('data-roomsCount'),
apartmentNextQuadrature = item.find('.appartmentInfo').attr('data-quadrature');


$('.nextAppartment').attr('data-next', apartmentNext);
$('.nextAppartment span:eq(0)').empty().text(apartmentNextRoomsCount);
$('.nextAppartment span:eq(1)').empty().text(apartmentNextQuadrature+' м²');


// данные
$('.roomesCountNumQuadrature span:eq(0)').empty().text(roomsCount);
$('.roomesCountNumQuadrature span:eq(1)').empty().text(quadrature);
$('.roomQuadrature span').empty().text(roomQuadrature);
$('.ap_basePrice').empty().text(price);
$('.ap_basePriceMortgage span').empty().text(mortgagePrice);
$('.promoPage').attr('href', promo);
$('.apartmentFilm').attr('data-youtube', youtube);



$('.detailsTab').hide();
$('.detailsTab').eq(0).show();
$('.detailsList li').removeClass('active');
$('.detailsList li').eq(0).addClass('active');

setTimeout(function(){
if(!$('#appartmentDetail').hasClass('active')){
$('#appartmentDetail').addClass('active');
}



if($(window).width() <= 960){
$('#appartmentDetail').arcticmodal();
}
else{
$('#appartmentDetail').css('left', '0');
}

// центрируем кликнутый слайд
owl.trigger('to.owl.carousel', origIndex);


}, 100);
});


// подробнее об отделке
$('.renovationItem').on('click', function(){
if($(this).hasClass('active')) return false;
$('html, body').animate({scrollTop: $($('.appartments')).offset().top + $('.appartments .tabs ul').outerHeight()}, 800, 'linear');
$('.renovationItem').removeClass('active');
$(this).addClass('active');

$('#renovationDetail').css('right', '-50%');

var renovationName = $(this).find('.renovationItemName').text(),
renovationImage = $(this).attr('data-image'),
renovationText = [];


$(this).find('.renovationText p').each(function(){
renovationText.push($(this).text());
});


$('.renovationName').text(renovationName);
$('.renovationTextInner').empty();

$.each(renovationText, function(key, value){

$('.renovationTextInner').append('<p>'+value+'</p>');
});

$('.renovationImage img').attr('src', renovationImage);


setTimeout(function(){
if(!$('#renovationDetail').hasClass('active')){
$('#renovationDetail').addClass('active');
}

if($(window).width() <= 960){
$('#renovationDetail').arcticmodal();
}
else{
$('#renovationDetail').css('right', '0');
}

//$('#renovationDetail').css('right', '0');
}, 100);
});

// закрыть подробнее о помещении
$('.detailClose').on('click', function(){
$('#appartmentDetail').removeClass('active');
$('#appartmentDetail').css('left', '-110%', function(){
});
setTimeout(function(){
$('.appartmentDetailSlider').each(function(){
$(this).trigger('destroy.owl.carousel');
$(this).find('.owl-stage-outer').children().unwrap();
$(this).empty();
});
}, 400);
});


// открыть следующее помещение из подробнее о помещении
$('.nextAppartment').on('click', function(){
var nextApartment = $(this).attr('data-next'),
grandParent = $('.appartments .tabs .the_tab.active'),
parent = grandParent.find('.roomsCountsTab.active .appartmentsSlider');

var child = parent.find('.owl-item').eq(nextApartment);
child.find('.appartmentInfo').trigger('click');

parent.trigger('next.owl.carousel');

});


// закрыть подробнее об отделке
$('.renovationClose').on('click', function(){
$('#renovationDetail').removeClass('active');
$('#renovationDetail').css('right', '-110%', function(){
});
$('.renovationItem').removeClass('active');
});




// табы в подробнее о помещении
$(document).on('click', '.detailsList li', function(){
if($(this).hasClass('active')) return false;
var indexLi = $(this).index();
$(document).find('.detailsList li').removeClass('active');
$(this).addClass('active');

$(document).find('.detailsTab').hide();
$(document).find('.detailsTab').eq(indexLi).fadeIn(300);
});


// Youtube в подробнее о помещении и в отзывах
$(document).on('click', '.apartmentFilm, .reviewInfo', function(){
var videoId = $(this).attr('data-youtube').split('watch?v=')[1];

$('.apartmentFilmPlaceholder').append('<iframe src="https://www.youtube.com/embed/'+videoId+'?rel=0&mute=1&amp;controls=1&amp;showinfo=0?ecver=1&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>');

$('#apartmentFilmWrapper').arcticmodal({
afterClose:function(data, el){
$('.apartmentFilmPlaceholder').empty();
$("iframe").each(function(){
$(this)[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
});
}
});
});


// клик вне div слайдера помещений и подробнее о помещении
if($('.appartmentsSlider').length){
$(document).on("mouseup touchend", function(e){
var slider = $('.appartmentsSlider'),
details = $('#appartmentDetail'),
fancyBox = $('.fancybox-container'),
arctimodalPopupOverlay = $('.arcticmodal-container');
if(!slider.is(e.target) && slider.has(e.target).length === 0 && !details.is(e.target) && details.has(e.target).length === 0 && !fancyBox.is(e.target) && fancyBox.has(e.target).length === 0 && !arctimodalPopupOverlay.is(e.target) && arctimodalPopupOverlay.has(e.target).length === 0){
$('.detailClose').trigger('click');
}
});
}

// клик вне div подробнее об отделке
if($('#renovationDetail').length){
$(document).on("mouseup touchend", function(e){
var renovationDetail = $('#renovationDetail');
if(!renovationDetail.is(e.target) && renovationDetail.has(e.target).length === 0 && !$(document).find('.arcticmodal-overlay').length){
$('.renovationClose').trigger('click');
}
});
}


// следующее помещение по нажатию стрелок на клавиатуре
$(document).keyup(function(e){
if(e.key === "ArrowRight" || e.keyCode === 39){
if($('#appartmentDetail').hasClass('active') && !$(document).find('.fancybox-container').length){
$('.nextAppartment').trigger('click');
}
}
});


// закрыть подробнее о помещении по нажатию Escape
$(document).keyup(function(e){
if(e.key === "Escape" || e.keyCode === 27){
if($('#appartmentDetail').hasClass('active') && !$(document).find('.fancybox-container').length && !$(document).find('.arcticmodal-overlay').length){
$('.detailClose').trigger('click');
}
}
});

// закрыть подробнее об отделке по нажатию Escape
$(document).keyup(function(e){
if(e.key === "Escape" || e.keyCode === 27){
if($('#renovationDetail').hasClass('active') && !$(document).find('.arcticmodal-overlay').length){
if($('#renovationDetail').hasClass('active')){
$('.renovationClose').trigger('click');
}
}
}
});


// топ 3 преимуществ
if($('.privilegesList').length){
$('.privilegesItem').eq(0).addClass('active');
$('.privilegesBox').eq(0).addClass('active').show();
}

$('.privilegesItem').on('click', function(e){
if($(this).hasClass('active')) return false;

var privilegesIndex = $(this).index();
$('.privilegesItem').removeClass('active');
$(this).addClass('active');


$('.privilegesBox').fadeOut(600);
$('.privilegesBox').eq(privilegesIndex).fadeIn(600);



});

// фоновое изображение во вкладках преимуществ
if($('.privilegesBg').length){
$('.privilegesBg').each(function(){
var bg = $(this).attr('data-bg');
$(this).css('background', 'url('+bg+')');
});
}


// слайдер отзывов
if($('.reviewSlider').length){

var reviewSlider = $('.reviewSlider');

reviewSlider.each(function(){
$(this).find('.item').each(function(index){
$(this).attr('data-position', index);
});
});

setTimeout(function(){
reviewSlider.owlCarousel({
loop:true,
center:true,
dots:false,
navText:['<svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.96967 0.46967C1.26256 0.176777 1.73744 0.176777 2.03033 0.46967L6.03033 4.46967C6.32322 4.76256 6.32322 5.23744 6.03033 5.53033L2.03033 9.53033C1.73744 9.82322 1.26256 9.82322 0.96967 9.53033C0.676777 9.23744 0.676777 8.76256 0.96967 8.46967L4.43934 5L0.96967 1.53033C0.676777 1.23744 0.676777 0.762563 0.96967 0.46967Z" fill="#1B1B1B"/></svg>', '<svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.96967 0.46967C1.26256 0.176777 1.73744 0.176777 2.03033 0.46967L6.03033 4.46967C6.32322 4.76256 6.32322 5.23744 6.03033 5.53033L2.03033 9.53033C1.73744 9.82322 1.26256 9.82322 0.96967 9.53033C0.676777 9.23744 0.676777 8.76256 0.96967 8.46967L4.43934 5L0.96967 1.53033C0.676777 1.23744 0.676777 0.762563 0.96967 0.46967Z" fill="#1B1B1B"/></svg>'],
responsive:{
0:{nav:false,items:1,stagePadding:70,margin:0},
360:{nav:false,items:1,stagePadding:90,margin:0},
414:{nav:false,items:1,stagePadding:119,margin:0},
961:{nav:true,items:3,margin:10}
}
});

}, 100);

}


// центрируем кликнутый слайд в слайдере отзывов
$(document).on('click', '.reviewInfo', function(){
var origIndex = $(this).closest('.item').attr('data-position');
reviewSlider.trigger('to.owl.carousel', origIndex);
});


// фотогалерея
if($('.album').length){
$('.album').on('click', function(){
var gallery = [];

$(this).find('.albumImage').each(function(){
gallery.push({src: $(this).attr('data-large')});
});

$.fancybox.open(gallery);
});
}


$('.photoBox:eq(0)').show().addClass('active');

$('.galleryAndTour h2').on('click', function(){
if($(this).hasClass('active')) return false;
var photoBoxIndex = $(this).index();

$('.galleryAndTour h2').removeClass('active');
$(this).addClass('active');

$('.photoBox').hide();
$('.photoBox').eq(photoBoxIndex).fadeIn(1000);


});


//3d tour
$('.tour3D').on('click', function(){
$('.Tour3dPlaceholder').empty().html('<iframe width="100%" height="100%" src="https://svetly-kazan.ru/tour/svetly/?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>');
$('#tour3dWrapper').arcticmodal();
});


// подробнее о преимуществе во всех преимуществах
$(document).on('click', '.superiority', function(){
$('html, body').animate({scrollTop: $($('.superioritiesGrid')).offset().top}, 800, 'linear');
$('#superiorityDetail').css('left', '-50%');

$('.superiority').removeClass('active');
$(this).addClass('active');

var superText = [],
superName = $(this).find('span').text(),
superIcon = $(this).find('.icon').html();

$(this).find('.hiddenText p').each(function(){
superText.push($(this).text());
});


$('.sdName').empty().text(superName);
$('.sdIcon').empty().html(superIcon);
$('.sdTextInner').empty();

$.each(superText, function(key, value){
$('.sdTextInner').append('<p>'+value+'</p>');
});


setTimeout(function(){
if(!$('#superiorityDetail').hasClass('active')){
$('#superiorityDetail').addClass('active');
}

if($(window).width() <= 960){
$('#superiorityDetail').arcticmodal();
}
else{
$('#superiorityDetail').css('left', '0');
}

//$('#superiorityDetail').css('left', '0');
}, 100);


});


// закрыть подробнее о преимуществе
$('.sdClose').on('click', function(){
$('#superiorityDetail').css('left', '-110%', function(){
$(this).removeClass('active')
});
$('.superiority').removeClass('active');
});



// клик вне div подробнее о преимуществе
if($('#superiorityDetail').length){
$(document).on("mouseup touchend", function(e){
var superiority = $('#superiorityDetail'),
arctimodalPopupOverlay = $('.arcticmodal-container');
if(!superiority.is(e.target) && superiority.has(e.target).length === 0 && !arctimodalPopupOverlay.is(e.target) && arctimodalPopupOverlay.has(e.target).length === 0){
$('.sdClose').trigger('click');
}
});
}


// закрыть подробнее о преимуществе по нажатию Escape
$(document).keyup(function(e){
if(e.key === "Escape" || e.keyCode === 27){
if($('#superiorityDetail').hasClass('active') && !$(document).find('.arcticmodal-overlay').length){
$('.sdClose').trigger('click');
}
}
});



// табы в контактах
if($('.contactsRouteBox').length){
$('.contactsRouteBox').eq(0).show().addClass('active');

$('.contactsRoute h2').on('click', function(){
if($(this).hasClass('active')) return false;

var indexBox = $(this).index();
$('.contactsRoute h2').removeClass('active');
$(this).addClass('active');

$('.contactsRouteBox').hide();
$('.contactsRouteBox').eq(indexBox).fadeIn(600);
});
}


// копировать контакты
if($('.clipBoard').length){
$('.clipBoard').on('click', function(){
var copy_data = $('.address').text()+'. тел: '+$('.phoneAndWhatsapp .phone a').text(),
$tmp = $("<textarea>");
$("body").append($tmp);
$tmp.val(copy_data).select();
document.execCommand("copy");
$tmp.remove();
$(this).append('<div class="hasCopied fz12">Скопировано</div>');
setTimeout(function(){
$(document).find('.hasCopied').remove();
}, 1000);



});
}


// политика конф
$(document).on('click', '.spreadTitle', function(){
$(this).closest('.spread').toggleClass('active');
$(this).closest('.spread').find('.spreadOut').slideToggle(300);
});



// время ожидания обратного звонка 30 минут - почему
$('.tellMeWhy').on('click', function(){
$(this).closest('.show').find('.why').fadeToggle(300);
});

// клик вне div время ожидания 30 мин - почему
if($('.why').length){
$(document).on("mouseup touchend", function(e){
var why = $('.why'),
tellMeWhy = $('.tellMeWhy');
if(!why.is(e.target) && why.has(e.target).length === 0 && !tellMeWhy.is(e.target) && tellMeWhy.has(e.target).length === 0){
$('.why').fadeOut(300);
}
});
}


//enter клик по полю в форме submit form
$(document).on('keydown', 'input', function(e){
var th = $(this);
if(e.keyCode === 13 || e.key === "Enter"){
e.preventDefault();
e.stopPropagation();
th.closest('form').find('button[name="send"]').trigger('click');
}
});




// отправка формы в подвале
$('.request').on('click', function(){
var th = $(this),
form = th.closest('form'),
data = form.serialize();
    
$.ajax({
url: 'form/index.php',
type: 'post',
dataType: 'json',
data: data+'&type=footerForm',
success: function(json){
if(typeof json.success !== 'undefined'){
form.find('input:not(:hidden)').val('');
form.find('.inputs').removeClass('error').removeClass('valid');
th.closest('.thanxBoxInside').find('.formTitle').html('вы успешно <br>отправили заявку');
form.hide();
th.closest('.thanxBoxInside').find('.showAfterFormSent').fadeIn(600);
}
else if(typeof json.error !== 'undefined'){
form.find('.inputs').removeClass('error').removeClass('valid');
$.each(json.error, function(key, value){
$.each(value, function(key, value){
form.find('input[name="'+value+'"]').closest('.inputs').addClass('error');
});
});
setTimeout(function(){
form.find('.inputs:not(.error)').addClass('valid');
}, 100);
}
},
error: function(json, jqXHR, status, errorThrown, exception){
return alert('Error occured: ' + status, jqXHR, json);
}
});



});

// отправка формы обратный звонок
$('.callbackBtn').on('click', function(){
var th = $(this),
form = th.closest('form'),
data = form.serialize();
    
$.ajax({
url: 'form/index.php',
type: 'post',
dataType: 'json',
data: data+'&type=callback',
success: function(json){
if(typeof json.success !== 'undefined'){
form.find('input:not(:hidden)').val('');
form.find('.inputs').removeClass('error').removeClass('valid');
th.closest('.thanxBoxInside').find('.formTitle').html('вы успешно <br>отправили заявку');
form.hide();
th.closest('.thanxBoxInside').find('.formText').fadeOut(300);
th.closest('.thanxBoxInside').find('.showAfterFormSent').fadeIn(600);
}
else if(typeof json.error !== 'undefined'){
form.find('.inputs').removeClass('error').removeClass('valid');
$.each(json.error, function(key, value){
$.each(value, function(key, value){
form.find('input[name="'+value+'"]').closest('.inputs').addClass('error');
});
});
setTimeout(function(){
form.find('.inputs:not(.error)').addClass('valid');
}, 100);
}
},
error: function(json, jqXHR, status, errorThrown, exception){
return alert('Error occured: ' + status, jqXHR, json);
}
});


});


// отправка типичной формы заявок
$('.requestBtnSend').on('click', function(){
var th = $(this),
form = th.closest('form'),
data = form.serialize();
    
$.ajax({
url: 'form/index.php',
type: 'post',
dataType: 'json',
data: data+'&type=typical',
success: function(json){
if(typeof json.success !== 'undefined'){
form.find('input:not(:hidden)').val('');
form.find('.inputs').removeClass('error').removeClass('valid');
th.closest('.thanxBoxInside').find('.formTitle').html('вы успешно <br>отправили заявку');
form.hide();
th.closest('.thanxBoxInside').find('.formText').fadeOut(300);
th.closest('.thanxBoxInside').find('.showAfterFormSent').fadeIn(600);
}
else if(typeof json.error !== 'undefined'){
form.find('.inputs').removeClass('error').removeClass('valid');
$.each(json.error, function(key, value){
$.each(value, function(key, value){
form.find('input[name="'+value+'"]').closest('.inputs').addClass('error');
});
});
setTimeout(function(){
form.find('.inputs:not(.error)').addClass('valid');
}, 100);
}
},
error: function(json, jqXHR, status, errorThrown, exception){
return alert('Error occured: ' + status, jqXHR, json);
}
});


});


// заявка ипотеч кальк
$('.calcBoxBtnSend').on('click', function(){
var th = $(this),
form = th.closest('form'),
data = form.serialize();
    
$.ajax({
url: 'form/index.php',
type: 'post',
dataType: 'json',
data: data+'&type=calc',
success: function(json){
if(typeof json.success !== 'undefined'){
form.find('input:not(:hidden)').val('');
form.find('.inputs').removeClass('error').removeClass('valid');
th.closest('.thanxBoxInside').find('.formTitle').html('вы успешно <br>отправили заявку');
form.hide();
th.closest('.thanxBoxInside').find('.formText').fadeOut(300);
th.closest('.thanxBoxInside').find('.showAfterFormSent').fadeIn(600);
}
else if(typeof json.error !== 'undefined'){
form.find('.inputs').removeClass('error').removeClass('valid');
$.each(json.error, function(key, value){
$.each(value, function(key, value){
form.find('input[name="'+value+'"]').closest('.inputs').addClass('error');
});
});
setTimeout(function(){
form.find('.inputs:not(.error)').addClass('valid');
}, 100);
}
},
error: function(json, jqXHR, status, errorThrown, exception){
return alert('Error occured: ' + status, jqXHR, json);
}
});


});



// предварительно вставим заголовки в скрытое поля форм
var contactsRouteFormTitle = $('.contactsRoute .formTitle').html(),
callbackTitle = $('#callback .formTitle').html();
$('footer input[name="requestName"]').val(contactsRouteFormTitle);
$('#callback input[name="requestName"]').val(callbackTitle);



// скрыть сообщение об успешной отправке и показать форму снова + замена заголовком форм
$('.onMoreTime').on('click', function(){
var th = $(this),
formName = th.closest('.thanxBoxInside').find('input[name="requestName"]').val();
th.closest('.thanxBoxInside').find('.showAfterFormSent').hide();
th.closest('.thanxBoxInside').find('form').fadeIn(600);
th.closest('.thanxBoxInside').find('.formText').fadeIn(300);
th.closest('.thanxBoxInside').find('.formTitle').empty().html(formName);
});













//end doc ready
});


//я карта
window.addEventListener('load', function () {
if($('#map').length){
var site_url = location.protocol+'//'+location.host; //протокол и домен
ymaps.ready(function () {
var myMap = new ymaps.Map('map', {
center: [55.713169, 49.350152],
zoom: 16,
// Добавим панель маршрутизации.
controls: ['routePanelControl']
});

var control = myMap.controls.get('routePanelControl');

control.routePanel.state.set({
// Выключим возможность задавать пункт отправления в поле ввода.
fromEnabled: true,
// Адрес или координаты пункта отправления.
from: '',
// Включим возможность задавать пункт назначения в поле ввода.
toEnabled: false,
// Адрес или координаты пункта назначения.
to: 'улица Производственная База, деревня Куюки, Богородское сельское поселение, Пестречинский район, Республика Татарстан'
});

// Зададим опции панели для построения машрутов.
control.routePanel.options.set({
// Запрещаем показ кнопки, позволяющей менять местами начальную и конечную точки маршрута.
allowSwitch: false,
// Включим определение адреса по координатам клика.
// Адрес будет автоматически подставляться в поле ввода на панели, а также в подпись метки маршрута.
reverseGeocoding: true,
// Зададим виды маршрутизации, которые будут доступны пользователям для выбора.
types: { masstransit: true, pedestrian: true, taxi: true, auto: true }
});
myMap.behaviors.disable('scrollZoom');
});
}


// localStorage
var coockieShown = localStorage.getItem('coockieShown');
if(coockieShown === null || coockieShown === ''){
localStorage.setItem('coockieShown', 1);
$('.coockie').fadeIn(300);
}

$(document).on('click', '.closeCoockie', function(){
$(this).closest('.coockie').fadeOut(300);
});


//end win on load f
});



