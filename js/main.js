$('.header_navbar--toggle').click(function(e){
	e.preventDefault();
	$('.header_navbar').toggleClass('is-open');
});

$(function(){
	$("#btn_up").click(function(){
		$('html, body').animate({scrollTop: 0}, 'slow');
	});

	$(window).scroll(function(){
		if($(window).scrollTop() < 200) {
			$("#btn_up").fadeOut();
		} else {
			$("#btn_up").fadeIn();
		}
	});
});

const counter = document.getElementById('counter');
const msg = document.getElementById('msg');

const updateCounter = async () => {
	const data = await fetch('https://api.countapi.xyz/hit/designandcreation-compteur/visits');
	const count = await data.json();
	msg.innerHTML = "Nombres de pages vues";
	msg.style.color = "#fff";
	counter.innerHTML = count.value;
	counter.style.filter = 'blur(0)';
}; 

updateCounter();


