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

let progress = document.querySelector(".progressbar");
let totalHeight = document.body.scrollHeight - window.innerHeight;

window.onscroll = function(){
	let progressHeight = (window.pageYOffset / totalHeight) * 100;
	progress.style.height = progressHeight + "%";
}