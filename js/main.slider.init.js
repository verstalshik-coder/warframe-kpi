fillSlides();

function fillSlides(){
	var slides = document.querySelector(".swiper-wrapper").getElementsByClassName('swiper-slide');
	var headers = ['Проксима Корпуса и Новый Рэйлджек', 'Доступ Октавия Прайм', 'Warframe на PlayStation 5', 'Хранилище: Банши Прайм и Мираж Прайм'];
	var paragraphs = ['Соберите свой Экипаж и вступите в бой с флотом Корпуса уже сейчас на ПК','Исполните симфонию разрушения с Октавией Прайм!',
	'Начните играть уже сегодня!', 'Приготовьтесь в сенсорной перегрузке!'];
	var position = [[10, 230],[63, 120],[4, 80],[5, 630]];
	for (var i = slides.length - 1; i >= 0; i--) {
		slides[i].querySelector(".header").innerHTML = headers[i];
		slides[i].querySelector(".paragraph").innerHTML = paragraphs[i];
		slides[i].querySelector(".slider-content").style.background = 'url(img/main/slide' + (i + 1) + '.jpg) 50% 50% no-repeat';
		slides[i].querySelector(".content").style.left = position[i][0] + "%";
		slides[i].querySelector(".content").style.top = position[i][1] + "px";
		slides[i].querySelector(".content").style.width = "30%";
	}
}