$(document).ready(main);
var contador = 1;
function main() {
  $('.menu_bar').click(function () {
    //$('nav').toggle();
    if (contador == 1) {
      $('nav').animate({
        left: '0'
      });
      contador = 0;
    }else {
      contador = 1;
      $('nav').animate({
        left: '-100%'
      });
    }
  });
};


function Login(_valor) {
  document.getElementById('Login').style.visibility = _valor;
}
function Registrar(_valor) {
  document.getElementById('Registrar').style.visibility = _valor;
}
$(document).ready(function(){
	var altura = $('.menu').offset().top;

	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.menu').addClass('menu-fixed');
		} else {
			$('.menu').removeClass('menu-fixed');
		}
	});

});
