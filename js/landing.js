window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 980);
})

var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: false,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 1,
        slideShadows: true,
    },
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
});

var swiper1 = document.querySelector(".swiper-container");
var id = swiper1.querySelector(".swiper-slide-active").id;
var bg = document.querySelector(".screen2").querySelector(".content");
var head = bg.querySelector(".slider-content-head");
var paragraph = bg.querySelector(".slider-content-paragraph");

chngebg(id);

window.setInterval( function() {   
    var temp = swiper1.querySelector(".swiper-slide-active").id;
    if(temp != id) {
        chngebg(temp);
        id = temp;
    }
}, 10);

function chngebg(count){            
    bg.style.background = 'url(img/landing/' + count + '.png) 50% 50% no-repeat';
    switch(count){
        case '1':
        head.innerHTML = 'БАРУУК';
        paragraph.innerHTML = 'Остерегайтесь ярости по-настоящему терпеливых. Выведенный из-под контроля, упрямый хозяин развязывает бурю внутри';
        break;
        case '2':
        head.innerHTML = 'МИСА';
        paragraph.innerHTML = 'Обладая твердой рукой и быстрой реакцией, Миса является настоящим стрелком';
        break;
        case '3':
        head.innerHTML = 'ОКТАВИЯ';
        paragraph.innerHTML = 'Составьте её песнь и управляйте могучим Мендаккордом, превращая басы, ударные и мелодию в разрушительный гимн опустошения';
        break;
        case '4':
        head.innerHTML = 'ТИТАНИЯ';
        paragraph.innerHTML = 'Отправляйтесь в полет вместе с этой озорной феей';
        break;
        case '5':
        head.innerHTML = 'ВОЛЬТ';
        paragraph.innerHTML = 'Вольт создаёт и контролирует электричество. Этот костюм имеет сильные боевые способности, он идеально подходит для тех, кто ищет альтернативу огнестрельному оружию';
        break;
        case '6':
        head.innerHTML = 'ГИДРОИД';
        paragraph.innerHTML = 'Восставший из глубин, Гидроид управляет водой с неимоверно разрушающим эффектом';
        break;
        case '7':
        head.innerHTML = 'ЛИМБО';
        paragraph.innerHTML = 'Лимбо манипулирует измерениями вселенной для уничтожения своих врагов и их сокрытия в разломах';
        break;
        case '8':
        head.innerHTML = 'ЗЕФИР';
        paragraph.innerHTML = 'Специализирующаяся на воздушных атаках и подвижности, Зефир господствует в небе';
        break;
        default:                
        break;
    }
}

let progress = document.querySelector(".progressbar");
let totalHeight = document.body.scrollHeight - window.innerHeight;

window.onscroll = function(){
    let progressHeight = (window.pageYOffset / totalHeight) * 100;
    progress.style.height = progressHeight + "%";
}