var swiper = new Swiper('.swiper-container', {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
});		

let div = document.createElement('div');
div.className = "temp";

var pagination = document.querySelector(".swiper-pagination");
var nav = pagination.getElementsByClassName('swiper-pagination-bullet');
for (var i = nav.length - 1; i >= 0; i--) {
	nav[i].id = i + 1;
}

var el = pagination.querySelector(".swiper-pagination-bullet-active");
var id = el.id;
el.append(div);		

window.setInterval(function() {   
	var temp = pagination.querySelector(".swiper-pagination-bullet-active").id;
	if(temp != id) {
		changeActive(pagination.querySelector(".swiper-pagination-bullet-active"));
		id = temp;
	}
}, 10);

function changeActive(item){
	div.remove();
	item.append(div);
}

var menus = document.getElementsByClassName('menu');

for (var i = menus.length - 1; i >= 0; i--) {
	menus[i].onclick = function() {
		var temp = document.getElementsByClassName('menu-list');

		for (var i = temp.length - 1; i >= 0; i--) {
			if(temp[i].classList.contains("active"))
				temp[i].classList.remove("active");
		}

		this.querySelector(".menu-list").classList.add("active");
	}
}

window.onclick = function(event){
	if (event.target.id != "menu") {
		var temp = document.getElementsByClassName('menu-list');
		for (var i = temp.length - 1; i >= 0; i--) {
			if(temp[i].classList.contains("active")) temp[i].classList.remove("active");
		}
	}
}