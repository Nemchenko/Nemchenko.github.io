	$(document).ready(function() {
		$("#phone").inputmask("+38(999)-999-99-99");//маска
		$('#name').blur(function() {
				if($(this).val() != '') {
					var pattern = /^[_a-zA-Z_а-яА-Я\s_a-zA-Z_а-яА-Я\s_a-zA-Z_а-яА-Я]+$/i;
					if(pattern.test($(this).val())){
						$(this).css({'border' : '1px solid #569b44'});
						$('#valid2').text('Верно');
					} else {
						$(this).css({'border' : '1px solid #ff0000'});
						$('#valid2').text('Не верно!');
					}
				} else {
					$(this).css({'border' : '1px solid #ff0000'});
					$('#valid2').text('Поле имя не должно быть пустым!');
				}
			});
			$('#message').blur(function() {
				if($(this).val() != '') {
					
					if($(this).val().length>10){
						$(this).css({'border' : '1px solid #569b44'});
						$('#valid2').text('Верно');
					} else {
						$(this).css({'border' : '1px solid #ff0000'});
						$('#valid2').text('Мало символов!');
					}
				} else {
					$(this).css({'border' : '1px solid #ff0000'});
					$('#valid2').text('Поле сообщение не должно быть пустым!');
				}
			});
	});
