$(document).ready(function(){

$("form").submit(function() { // Событие отправки с оры

var form_data = $(this).serialize(); // Собираем данные и³ полей

		$.ajax({
		type: 'POST', // Mетод отправки
		url: "sendform.php", // Путь к PHP обработчику sеndform.php 
		data: form_data,
		success: function() {
			$('.popup').addClass('active');
			$('.thanks').addClass('active');
		}
			});
			event.preventDefault();
		});
});